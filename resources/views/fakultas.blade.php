<!DOCTYPE html>
<html>
<head>
    <title>Daftar Fakultas</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th {
            font-weight: bold;
            background-color: #f2f2f2;
            text-align: center;
        }
        th, td {
            padding: 8px 15px;
        }
    </style>
</head>
<body>
    <h2>Daftar Fakultas - Telkom University</h2>
    <table>
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama Fakultas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fakultas as $f)
                <tr>
                    <td>{{ $f['kode'] }}</td>
                    <td>{{ $f['nama_fakultas'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
