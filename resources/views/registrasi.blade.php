<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cihuy</title>
</head>

<body>
    <form action="/registrasi" method="POST">
        @csrf
        <label for="">Nama</label>
        <input type="text" name="name" id="name" class="form-control"> <br />

        <label for="">Email</label>
        <input type="email" name="email" id="email" class="form-control"> <br />

        <label for="">password</label>
        <input type="password" name="passw" id="passw" class="form-control"> <br />

        <button class="btn btn-primary" type="submit">Bikin User </button>
    </form>
</body>

</html>
