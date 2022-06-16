<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($devs as $dev)
        <a href="{{ route('admin.devs.show', $dev->id)}}">
            <h1>{{$dev->name}}</h1>
        </a>
    @endforeach
</body>
</html>
