<!DOCTYPE html>
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
                <td>{{ $penumpang['nama_penumpang'] }}</td>
                <td>{{ \Carbon\Carbon::parse($penumpang['tanggal_keberangkatan'])->format('d M Y H:i') }}</td>
                <td>{{ $penumpang['asal'] }}</td>
                <td>{{ $penumpang['tujuan'] }}</td>
                <td>{{ $penumpang['no_kursi'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
