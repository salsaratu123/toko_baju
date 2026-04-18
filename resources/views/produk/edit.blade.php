<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>

    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT') <div>
            <label>Nama Produk:</label><br>
            <input type="text" name="nama" value="{{ $produk->nama }}" required>
        </div><br>
        
        <div>
            <label>Kategori:</label><br>
            <input type="text" name="kategori" value="{{ $produk->kategori }}" required>
        </div><br>
        
        <div>
            <label>Stok:</label><br>
            <input type="number" name="stok" value="{{ $produk->stok }}" required>
        </div><br>
        
        <div>
            <label>Harga:</label><br>
            <input type="number" name="harga" value="{{ $produk->harga }}" required>
        </div><br>
        
        <button type="submit">Update Produk</button>
    </form>
    
    <br>
    <a href="{{ route('produk.index') }}">Batal</a>
</body>
</html>