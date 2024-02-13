<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    @include('layouts.partial.navbar')
    <h1>Ini halaman ekstrakulikuler</h1>
    <table class="table mt-4 container">
        <tr>
            <th>ID</th>
            <th>Nama Ekstrakulikuler</th>
            <th>Nama Pembina</th>
            <th>Deskripsi</th>
        </tr>
        @foreach ($ekstra as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['nama_pembina'] }}</td>
                <td>{{ $item['deskripsi'] }}</td>
            </tr>
        @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
