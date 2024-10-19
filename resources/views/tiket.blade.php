{{-- <!DOCTYPE html>
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
        <label for="userIdField">Nama Penumpang</label>
        <select name="user_id" id="userIdField">
            @foreach ($data as $key => $value)
                <option value="{{$value->id}}">{{$value->name}}</option>
            @endf oreach
        </select>
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
</html> --}}


<x-layout>
    <div class="container">
        <div class="row p-lg-3">
            <div class="col">
                <form action="/tiket" method="POST">
                    <h1>Mau Mesen tiket?</h1>
                    <br>
                    <div class="mb-3">
                        @csrf
                        <label for="userIdField">Nama Penumpang</label><br>
                        <select name="user_id" id="userIdField">
                            @foreach ($data as $key => $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                        </select>
                        @error('user_id')
                            <div class="text-danger">{{  $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Tanggal Keberangkatan</label>
                        <input type="datetime-local" name="tanggal_keberangkatan" id="tanggal_keberangkatan"
                            placeholder="tanggal berapa dek" class="form-control" required> <br />
                            @error('tanggal_keberangkatan')
                            <div class="text-danger">{{  $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Asal</label>
                        <input type="text" name="asal" id="asal" placeholder="asal mana guys"
                            class="form-control" required> <br />
                            @error('asal')
                            <div class="text-danger">{{  $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Tujuan</label>
                        <input type="text" name="tujuan" id="tujuan" placeholder="jangan jauh jauh ya dek"
                            class="form-control" required> <br />
                            @error('tujuan')
                            <div class="text-danger">{{  $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">nomor kursi</label>
                        <input type="text" name="no_kursi" id="no_kursi" placeholder="mau samping sampingan dong"
                            class="form-control" required> <br />
                            @error('no_kursi')
                            <div class="text-danger">{{  $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">Pesan dulu baru bayar</button>
                </form>


            </div>
        </div>
    </div>
</x-layout>
