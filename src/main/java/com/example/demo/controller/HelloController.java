package com.example.demo.controller;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController // Marks the class as a REST Controller
public class HelloController {

    @GetMapping("/hello") // Maps HTTP GET requests to the /hello endpoint
    public String index() {
        return "Hello, World!"; // Returns the response body
    }
}