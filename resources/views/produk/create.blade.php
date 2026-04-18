<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk Baru</h1>

    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <div>
            <label>Nama Produk:</label><br>
            <input type="text" name="nama" required>
        </div><br>
        <div>
            <label>Kategori:</label><br>
            <input type="text" name="kategori" required>
        </div><br>
        <div>
            <label>Stok:</label><br>
            <input type="number" name="stok" required>
        </div><br>
        <div>
            <label>Harga:</label><br>
            <input type="number" name="harga" required>
        </div><br>
        <button type="submit">Simpan Produk</button>
    </form>
    
    <br>
    <a href="{{ route('produk.index') }}">Kembali</a>
</body>
</html>