<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Домашняя страница</h1>

    <div>
        <p>Ссылки на другие страницы:</p>
        <a href={{$about_url}}>О нас</a>
        <a href={{$contact_url}}>Контакты</a>
        <a href={{$products_url}}>Посмотреть продукты</a>
        <a href={{$create_product_url}}>Создать продукт</a>
    </div>

    @if($message != "" && $phone_num != "")
        <div>
            <p>Текст сообщения:</p>
            <p>{{$message}}</p>
            
            <p>Номер телефона:</p>
            <p>{{$phone_num}}</p>
        </div>
    @endif
</body>
</html>