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

<form action="{{ route('category.update', $category->id) }}" method="Post">
    @csrf
    @method('PATCH')
    имя <input type="text" name="name" value="{{$category->name}}">
    описаение <input type="text" name="description" value="{{$category->description}}">
    <button type="submit" class="btn btn-danger">Обновить</button>
</form>

</body>
</html>
