{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Penumpang</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Data Penumpang</h2>
    <table>
        <thead>
            <tr>
                <th>Nama Penumpang</th>
                <th>Tanggal Keberangkatan</th>
                <th>Asal</th>
                <th>Tujuan</th>
                <th>Nomor Kursi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tiket as $penumpang)
            <tr>
                <td>{{ $penumpang->user->name }}</td>
                <td>{{ \Carbon\Carbon::parse($penumpang['tanggal_keberangkatan'])->format('d M Y H:i') }}</td>
                <td>{{ $penumpang['asal'] }}</td>
                <td>{{ $penumpang['tujuan'] }}</td>
                <td>{{ $penumpang['no_kursi'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html> --}}

<x-layout>
    <div class="container mt-5">
        <div class="card">
            <h3 class="card-header">Halaman Tiket</h3>
            <div class="card-body">
                <div class="col-sm-7">
                    <a href="/tiket" class="btn btn-primary">Tambah tiket</a>
                </div>
                <table class="table table-bordered table-striped table-hover" id="myTable">
                    <thead>
                        <tr>
                            <th>Nama Penumpang</th>
                            <th>Tanggal Keberangkatan</th>
                            <th>Asal</th>
                            <th>Tujuan</th>
                            <th>Nomor Kursi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            @foreach ($tiket as $penumpang)
                            <tr>
                                <td>{{ $penumpang->user->name }}</td>
                                <td>{{ \Carbon\Carbon::parse($penumpang['tanggal_keberangkatan'])->format('d M Y H:i') }}</td>
                                <td>{{ $penumpang['asal'] }}</td>
                                <td>{{ $penumpang['tujuan'] }}</td>
                                <td>{{ $penumpang['no_kursi'] }}</td>
                            </tr>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
