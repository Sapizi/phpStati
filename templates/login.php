<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="/assets/style.css">
    <style>
        .error {
            color: red;
        }

        .form-group {
            margin-bottom: 15px;
        }

        input {
            display: block;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="all_content">
        <form method="post" class="forma">
            <h1>Вход</h1>
        
            <?php if (isset($error)): ?>
                <div class="error">
                    <?= $error ?>
                </div>
            <?php endif; ?>
                <label>Логин:</label>
                <input type="text" name="login" minlength="2"  required class="input">
    
                <label>Пароль:</label>
                <input type="password" name="password" minlength="6" required class="input">

    
            <button type="submit" class="button">Войти</button>
            <a href="/register">Нет аккаунта?</a>
        </form>
    
    </div>
</body>

</html>