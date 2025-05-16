<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="/assets/style.css">
    <style>
        .error {
            color: red;
        }
        
    </style>
</head>

<body>
    <div class="all_content">

        <form method="post" class="forma">
            <h1 class="title">Регистрация</h1>

                <label>Имя:</label>
                <input type="text" name="name" minlength="1" required class="input">

                <label>Логин:</label>
                <input type="text" name="login" minlength="1" required class="input">
                <?php if (isset($errors['login'])): ?>
                    <span class="error">
                        <?= $errors['login'] ?>
                    </span>
                <?php endif; ?>

                <label>Пароль :</label>
                <input type="password" name="password" minlength="6" required class="input">
                <?php if (isset($errors['password'])): ?>
                    <span class="error">
                        <?= $errors['password'] ?>
                    </span>
                <?php endif; ?>

                <label>Дата рождения:</label>
                <input type="date" name="date" minlength="1" class="input">

            <button type="submit" class="button">Регистрация</button>
            <a href="/login">Уже есть аккаунт?</a>
        </form>
    
    </div>
</body>

</html>