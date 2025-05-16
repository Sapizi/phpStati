<?php
class TestController
{
    public function mainPage()
    {
        $articles = include 'data/articles.php';
        return new View('main', ['articles' => $articles]);
    }
}