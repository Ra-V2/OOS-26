import Vapor
import Fluent

struct CategoryController: RouteCollection {

    func boot(routes: any RoutesBuilder) throws {
        let categories = routes.grouped("categories")

        categories.get(use: index)
        categories.post(use: create)

        categories.group(":id") { category in
            category.get(use: show)
            category.put(use: update)
            category.delete(use: delete)
        }
    }

    func index(req: Request) async throws -> [Category] {
        try await Category.query(on: req.db).all()
    }

    func create(req: Request) async throws -> Category {
        let category = try req.content.decode(Category.self)
        try await category.save(on: req.db)
        return category
    }

    func show(req: Request) async throws -> Category {
        guard let category = try await Category.find(req.parameters.get("id"), on: req.db)
        else {
            throw Abort(.notFound)
        }
        return category
    }

    func update(req: Request) async throws -> Category {
        guard let category = try await Category.find(req.parameters.get("id"), on: req.db)
        else {
            throw Abort(.notFound)
        }

        let updated = try req.content.decode(Category.self)
        category.name = updated.name

        try await category.save(on: req.db)
        return category
    }

    func delete(req: Request) async throws -> HTTPStatus {
        guard let category = try await Category.find(req.parameters.get("id"), on: req.db)
        else {
            throw Abort(.notFound)
        }

        try await category.delete(on: req.db)
        return .noContent
    }
}