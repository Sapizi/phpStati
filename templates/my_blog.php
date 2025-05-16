<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мои статьи</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
    <body>
        <h2 class="title">Мои статьи</h2>
        <?php if (empty($articles)): ?>
            <p>У вас пока нет статей.</p>
        <?php else: ?>
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
                            <td><?= $article['title'] ?></td>
                            <td><?= $article['date'] ?></td>
                            <td><?= mb_substr($article['content'], 0, 200) . '...' ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>

        <p><a href="/">На главную</a></p>

    </body>
</html>