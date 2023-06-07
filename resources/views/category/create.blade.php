<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h5>Здесь создаем новую категрию</h5>
<form action="{{route('category.store')}}" method="POST">
    @csrf
    название категрии
    <input type="text" name="name">
    Описание

    <input type="text" name="description">
    <button type="submit">Создать</button>
</form>
</body>
</html>
