<?php
Route::get("/", [TestController::class, 'mainPage']);

Route::get("/login", [LoginController::class, 'showForm']);
Route::get("/register", [RegisterController::class, 'showForm']);

Route::post("/login", [LoginController::class, 'login']);
Route::post("/register", [RegisterController::class, 'register']);


Route::get("/my-blog", [MyBlogController::class, 'show']);