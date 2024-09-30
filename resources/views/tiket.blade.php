<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesenin dong</title>
</head>
<body>
    <form action="/tiket" method="POST">
        @csrf
        <label for="">Nama Penumpang</label>
        <input type="text" name="nama_penumpang" id="nama_penumpang" placeholder="namanya siapa sayang" class="form-control"> <br />

        <label for="">Tanggal Keberangkatan</label>
        <input type="datetime-local" name="tanggal_keberangkatan" id="tanggal_keberangkatan" placeholder="tanggal berapa dek" class="form-control"> <br />

        <label for="">Asal</label>
        <input type="text" name="asal" id="asal" placeholder="asal mana guys" class="form-control"> <br />

        <label for="">Tujuan</label>
        <input type="text" name="tujuan" id="tujuan" placeholder="jangan jauh jauh ya dek" class="form-control"> <br />

        <label for="">nomor kursi</label>
        <input type="text" name="no_kursi" id="no_kursi" placeholder="mau samping sampingan dong" class="form-control"> <br />

        <button class="btn btn-primary" type="submit">Pesan dulu baru bayar</button>
    </form>

</body>
</html>
