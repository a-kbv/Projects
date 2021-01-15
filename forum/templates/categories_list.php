<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CATEGORIES</title>
</head>
<body>

<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Questions Count</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($categories as $category): ?>
        <tr>
            <td>
                <a href="<?=url("category.php?id={$category['id']}");?>">
                <?= $category['name'] ?>
                </a>
            </td>
            <td> <?= $category['questions_count'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>