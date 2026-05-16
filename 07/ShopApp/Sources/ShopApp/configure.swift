import NIOSSL
import Fluent
import FluentPostgresDriver
import Leaf
import Vapor

// configures your application
public func configure(_ app: Application) async throws {
    // uncomment to serve files from /Public folder
    app.middleware.use(FileMiddleware(publicDirectory: app.directory.publicDirectory))

    let hostname = Environment.get("DATABASE_HOST") ?? "localhost"
    let port = Environment.get("DATABASE_PORT").flatMap(Int.init(_:)) ?? 5433
    let username = Environment.get("DATABASE_USERNAME") ?? "vapor"
    let password = Environment.get("DATABASE_PASSWORD") ?? "password"
    let database = Environment.get("DATABASE_NAME") ?? "shopdb"

    let config = SQLPostgresConfiguration(
        hostname: hostname,
        port: port,
        username: username,
        password: password,
        database: database,
        tls: .disable
    )

    app.databases.use(.postgres(configuration: config), as: .psql)

    app.migrations.add(CreateCategory())
    app.migrations.add(CreateProduct())
    
    app.views.use(.leaf)

    // register routes
    try routes(app)
}
