package com.example.app.controller

import com.example.app.model.LoginRequest
import com.example.app.model.User
import com.example.app.service.AuthService
import org.springframework.beans.factory.annotation.Autowired
import org.springframework.web.bind.annotation.GetMapping
import org.springframework.web.bind.annotation.PostMapping
import org.springframework.web.bind.annotation.RequestBody
import org.springframework.web.bind.annotation.RequestMapping
import org.springframework.web.bind.annotation.RestController

@RestController
@RequestMapping("/api")
class UserController @Autowired constructor(
    private val authService: AuthService
) {
    private val users = listOf(
        User("admin", "ADMIN"),
        User("user1", "USER"),
        User("user2", "USER"),
    )

    @GetMapping("/users")
    fun getUsers(): List<User> {
        return users
    }

    @PostMapping("/login")
    fun login(@RequestBody request: LoginRequest): String {
        return if (authService.authenticate(request.username, request.password)) {
            "Login successful"
        } else {
            "Invalid credentials"
        }
    }
}