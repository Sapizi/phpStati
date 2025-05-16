<?php
class RegisterController
{
    public function showForm()
    {
        return new View('register');
    }

    public function register()
    {
        $errors = [];

        if (!isset($_SESSION['users'])) {
            $_SESSION['users'] = [];
        }

        if (isset($_POST['login']) && !empty($_POST['login'])) {
            foreach ($_SESSION['users'] as $value) {
                if ($value['login'] === $_POST['login']) {
                    $errors['login'] = 'Этот логин уже занят';
                }
            }
        }

        if (isset($_POST['password']) && strlen($_POST['password']) < 6) {
            $errors['password'] = 'Пароль должен содержать минимум 6 символов';
        }

        if (!empty($errors)) {
            return new View('register', ['errors' => $errors]);
        }

        $user = [
            'name' => $_POST['name'],
            'login' => $_POST['login'],
            'password' => $_POST['password'],
            'date' => $_POST['date']
        ];

        $_SESSION['users'][] = $user;

        header('Location: /login');
    }
}