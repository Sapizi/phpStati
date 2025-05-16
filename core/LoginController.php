<?php
class LoginController
{
    public function showForm()
    {
        return new View('login');
    }

    public function login()
    {

        if (!isset($_SESSION['users']) || empty($_SESSION['users'])) {
            return new View('login', ['error' => 'Нет зарегистрированных пользователей']);
        }

        $login = $_POST['login'];
        $password = $_POST['password'];

        $user = null;
        foreach ($_SESSION['users'] as $us) {
            if ($us['login'] === $login) {
                $user = $us;
            }
        }

        if (!$user || $user['password'] !== $password) {
            return new View('login', ['error' => 'Неверный логин или пароль']);
        }

        $_SESSION['user'] = $user;

        header('Location: /');
    }
}