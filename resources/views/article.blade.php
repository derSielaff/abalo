<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Createdate</th>
        </tr>
        @foreach($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->ab_name}}</td>
                <td>{{$article->ab_price}}</td>
                <td>{{$article->ab_description}}</td>
                <td>{{$article->ab_createdate}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
