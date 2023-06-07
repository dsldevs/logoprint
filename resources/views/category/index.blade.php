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
<a href="{{route('category.create')}}">Создать категрию</a>

<br>
Активные
<table border="1">
    <thead>
    <tr>
        <th>Название</th>
        <th>Дата создания</th>
        <th>Статус</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
            @if($category->active == 1)
            <tr>
               <td>{{$category->name}}</td>
               <td>{{$category->created_at}}</td>
               <td>{{$category->active}}</td>
                <td>
                    <form action="{{ route('category.destroy',$category->id) }}" method="Post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('category.edit', $category->id) }}">Изменить</a>
                </td>

                <td>
                    <a href="{{ route('category.show', $category->id) }}">Перейти</a>
                </td>

            </tr>
            @endif
        @endforeach
    </tbody>
</table>

Удалены
<table border="1">
    <thead>
    <tr>
        <th>Название</th>
        <th>Дата создания</th>
        <th>Статус</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        @if($category->active == 0)
            <tr>
                <td>{{$category->name}}</td>
                <td>{{$category->created_at}}</td>
                <td>{{$category->active}}</td>
                <td>
                    <form action="{{ route('category.destroy',$category->id) }}" method="Post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Восстановить</button>
                    </form>
                </td>


            </tr>
        @endif
    @endforeach
    </tbody>
</table>


</body>
</html>
