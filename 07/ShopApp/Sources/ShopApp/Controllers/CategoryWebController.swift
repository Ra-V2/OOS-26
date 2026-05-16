import Vapor
import Fluent
import Leaf

struct CategoryWebController: RouteCollection {

    func boot(routes: any RoutesBuilder) throws {
        let web = routes.grouped("web", "categories")

        web.get(use: index)
        web.get("new", use: createView)
        web.post(use: create)

        web.get(":id", "edit", use: editView)
        web.post(":id", "update", use: update)
        web.post(":id", "delete", use: delete)
    }

    func index(req: Request) async throws -> View {
        let categories = try await Category.query(on: req.db).all()

        return try await req.view.render("Categories/index", [
            "categories": categories
        ])
    }

    func createView(req: Request) async throws -> View {
        try await req.view.render("Categories/create")
    }

    func create(req: Request) async throws -> Response {
        struct Input: Content {
            let name: String
        }

        let input = try req.content.decode(Input.self)

        let category = Category(name: input.name)
        try await category.save(on: req.db)

        return req.redirect(to: "/web/categories")
    }

    func editView(req: Request) async throws -> View {
        guard let id = req.parameters.get("id", as: UUID.self),
              let category = try await Category.find(id, on: req.db)
        else {
            throw Abort(.notFound)
        }

        return try await req.view.render("Categories/edit", [
            "category": category
        ])
    }

    func update(req: Request) async throws -> Response {
        struct Input: Content {
            let name: String
        }

        guard let id = req.parameters.get("id", as: UUID.self),
              let category = try await Category.find(id, on: req.db)
        else {
            throw Abort(.notFound)
        }

        let input = try req.content.decode(Input.self)
        category.name = input.name

        try await category.save(on: req.db)

        return req.redirect(to: "/web/categories")
    }

    func delete(req: Request) async throws -> Response {
        guard let id = req.parameters.get("id", as: UUID.self),
              let category = try await Category.find(id, on: req.db)
        else {
            throw Abort(.notFound)
        }

        try await category.delete(on: req.db)

        return req.redirect(to: "/web/categories")
    }
}