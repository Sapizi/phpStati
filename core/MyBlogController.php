<?php

class MyBlogController
{
    public function show()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }

        $articles = include 'data/articles.php';

        $userLogin = $_SESSION['user']['login'];
        $myArticles = array_filter($articles, function ($article) use ($userLogin) {
            return $article['author_login'] === $userLogin;
        });

        return new View('my_blog', ['articles' => $myArticles]);
    }
}