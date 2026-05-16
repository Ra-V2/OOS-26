import Vapor
import Fluent
import Leaf

struct ProductWebController: RouteCollection {

    func boot(routes: any RoutesBuilder) throws {
        let web = routes.grouped("web", "products")

        web.get(use: index)
        web.get("new", use: createView)
        web.post(use: create)

        web.get(":id", "edit", use: editView)
        web.post(":id", "update", use: update)
        web.post(":id", "delete", use: delete)
    }

    // LIST
    func index(req: Request) async throws -> View {
        let products = try await Product.query(on: req.db).all()
        return try await req.view.render("Products/index", [
            "products": products
        ])
    }

    // CREATE VIEW
    func createView(req: Request) async throws -> View {
        try await req.view.render("Products/create")
    }

    // CREATE ACTION
    func create(req: Request) async throws -> Response {
        struct Input: Content {
            let name: String
            let price: Double
        }

        let input = try req.content.decode(Input.self)

        let product = Product(name: input.name, price: input.price)
        try await product.save(on: req.db)

        return req.redirect(to: "/web/products")
    }

    // EDIT VIEW
    func editView(req: Request) async throws -> View {
        guard let id = req.parameters.get("id", as: UUID.self),
              let product = try await Product.find(id, on: req.db)
        else {
            throw Abort(.notFound)
        }

        return try await req.view.render("Products/edit", [
            "product": product
        ])
    }

    // UPDATE ACTION
    func update(req: Request) async throws -> Response {
        struct Input: Content {
            let name: String
            let price: Double
        }

        guard let id = req.parameters.get("id", as: UUID.self),
              let product = try await Product.find(id, on: req.db)
        else {
            throw Abort(.notFound)
        }

        let input = try req.content.decode(Input.self)

        product.name = input.name
        product.price = input.price

        try await product.save(on: req.db)

        return req.redirect(to: "/web/products")
    }

    // DELETE
    func delete(req: Request) async throws -> Response {
        guard let id = req.parameters.get("id", as: UUID.self),
              let product = try await Product.find(id, on: req.db)
        else {
            throw Abort(.notFound)
        }

        try await product.delete(on: req.db)

        return req.redirect(to: "/web/products")
    }
}