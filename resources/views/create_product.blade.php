<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action={{$store_product_url}} method="post">
        @csrf
        <label for="name">name:</label>
        <input id="name" name="name" type="text"/>
        <label for="price">price:</label>
        <input id="price" name="price" type="text"/>
        <label for="description">description:</label>
        <input id="description" name="description" type="text"/>
        <input type="submit" value="Отправить" />
    </form>
</body>
</html>