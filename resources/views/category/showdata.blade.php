<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<
<p>Create category </p>
    <form method="Post" action="/savedatac">
    @csrf

        <input type="hidden" name="id" value="{{$cat->id}}">
        <input type="text" name="name" value="{{$cat->name}}">
        <button>Update</button>
    </form>
</body>
</html>