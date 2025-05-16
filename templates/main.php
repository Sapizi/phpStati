<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>

    <?php if (isset($_SESSION['user'])): ?>
        Привет, <?= htmlspecialchars($_SESSION['user']['name']) ?>!
        <a href="/my-blog">Мои статьи</a>
    <?php endif; ?>

    <h2>Статьи</h2>

    <table>
        <thead>
            <tr>
                <th>Название</th>
                <th>Дата</th>
                <th>Описание</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?= htmlspecialchars($article['title']) ?></td>
                    <td><?= htmlspecialchars($article['date']) ?></td>
                    <td><?= htmlspecialchars(mb_substr($article['content'], 0, 200)) . '...' ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>