<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new Articale</title>
</head>
<body>
    <p>Create category </p>
    <form method="POST" action="/save">
        @csrf
        <input type="text" name="fk_id" placeholder="fk_id">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="details" placeholder="details">
        <input type="text" name="slug" placeholder="slug">
        <input type="text" name="is_used" placeholder="is_used">
        <button>Submit</button>
    </form>
</body>
</html>