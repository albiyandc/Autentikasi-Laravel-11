<!DOCTYPE html>
<html>
<head>
    <title>Produk</title>
</head>
<body>
    <h1>Produk</h1>

    <p>
        <a href="{{ route('logout') }}">Logout</a>
    </p>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nama_produk }}</td>
                    <td>{{ $p->harga }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
