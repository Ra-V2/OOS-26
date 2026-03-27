package com.example.app.service

import org.springframework.stereotype.Service

@Service
class AuthService {

    private val users = mapOf(
        "admin" to "admin",
        "user1" to "user1",
        "user2" to "user1",
    )

    fun authenticate(username: String, password: String): Boolean {
        return users[username] == password
    }
}