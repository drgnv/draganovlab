<html>

<head>
    <title>Добави категория</title>
</head>

<body>
    <form action="../controller/add_category.php" method="POST">
        <input type="text" placeholder="Име на категорията" name="category-name">
        <input type="text" placeholder="Уникален код" name="category-code">
        <input type="submit" name="add-category" value="Добави">
    </form>
    {$msg}
</body>

</html>