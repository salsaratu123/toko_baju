<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('produk.create') }}">+ Tambah Produk</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produks as $p)
            <tr>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->kategori }}</td>
                <td>{{ $p->stok }}</td>
                <td>Rp {{ number_format($p->harga, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('produk.edit', $p->id) }}">Edit</a> 
                    | 
                    <form action="{{ route('produk.destroy', $p->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="color: red; cursor: pointer;">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>