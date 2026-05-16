import Vapor
import Fluent

struct ProductController: RouteCollection {

    func boot(routes: any RoutesBuilder) throws {
        let products = routes.grouped("products")

        products.get(use: index)
        products.post(use: create)

        products.group(":id") { product in
            product.get(use: show)
            product.put(use: update)
            product.delete(use: delete)
        }
    }

    func index(req: Request) async throws -> [Product] {
        try await Product.query(on: req.db).all()
    }

    func create(req: Request) async throws -> Product {

        struct Input: Content {
            let name: String
            let price: Double
            let categoryID: UUID
        }

        let input = try req.content.decode(Input.self)

        let product = Product(
            name: input.name,
            price: input.price,
            categoryID: input.categoryID
        )

        try await product.save(on: req.db)
        return product
    }

    func show(req: Request) async throws -> Product {
        guard let product = try await Product.find(req.parameters.get("id"), on: req.db)
        else { throw Abort(.notFound) }

        return product
    }

    func update(req: Request) async throws -> Product {

        struct Input: Content {
            let name: String
            let price: Double
            let categoryID: UUID
        }

        guard let product = try await Product.find(req.parameters.get("id"), on: req.db)
        else { throw Abort(.notFound) }

        let input = try req.content.decode(Input.self)

        product.name = input.name
        product.price = input.price
        product.$category.id = input.categoryID

        try await product.save(on: req.db)
        return product
    }

    func delete(req: Request) async throws -> HTTPStatus {
        guard let product = try await Product.find(req.parameters.get("id"), on: req.db)
        else { throw Abort(.notFound) }

        try await product.delete(on: req.db)
        return .noContent
    }
}