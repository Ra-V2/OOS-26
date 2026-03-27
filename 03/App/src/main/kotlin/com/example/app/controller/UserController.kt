package com.example.app.controller

import com.example.app.model.User
import org.springframework.web.bind.annotation.GetMapping
import org.springframework.web.bind.annotation.RequestMapping
import org.springframework.web.bind.annotation.RestController

@RestController
@RequestMapping("/api")
class UserController {

    private val users = listOf(
        User("admin", "ADMIN"),
        User("user1", "USER"),
        User("user2", "USER"),
    )

    @GetMapping("/users")
    fun getUsers(): List<User> {
        return users
    }
}