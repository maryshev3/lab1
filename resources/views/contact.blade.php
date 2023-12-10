<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Контактная информация</h1>

    <form action="./" method="post">
        @csrf
        <label for="message">Сообщение:</label>
        <input id="message" name="message" type="text"/>
        <label for="phone_num">Номер телефона:</label>
        <input id="phone_num" name="phone_num" type="text"/>
        <input type="submit" value="Отправить" />
    </form>
</body>
</html>