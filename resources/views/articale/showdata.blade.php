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
<p>update  articale </p>
    <form method="Post" action="/savedata">
    @csrf
        <input type="text" name="fk_id" value="{{$art->fk_id}}">
        <input type="text" name="name" value="{{$art->name}}">
        <input type="text" name="details" value="{{$art->details}}">
        <input type="text" name="slug" value="{{$art->slug}}">
        <input type="text" name="is_used" value="{{$art->is_used}}">
        <button>Update</button>
    </form>
</body>
</html>