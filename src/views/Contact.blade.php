<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Contact form</h1>
    <form action="{{route('contact')}}" method="post">
        @csrf
        <input type="text" name="name">
        <input type="text" name="email">
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <input type="submit">
    </form>
</body>

</html>