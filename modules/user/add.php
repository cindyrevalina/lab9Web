<div class="content">
    <h2>Tambah Barang</h2>
    
    <div class="form-container">
        <form method="POST" action="">
            <div class="form-group">
                <label for="nama">Nama Barang</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select id="kategori" name="kategori" required>
                    <option value="">Pilih Kategori</option>
                    <option value="Elektronik">Elektronik</option>
                    <option value="Komputer">Komputer</option>
                    <option value="Handphone">Handphone</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="harga_jual">Harga Jual</label>
                <input type="number" id="harga_jual" name="harga_jual" required>
            </div>
            
            <div class="form-group">
                <label for="harga_beli">Harga Beli</label>
                <input type="number" id="harga_beli" name="harga_beli" required>
            </div>
            
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" id="stok" name="stok" required>
            </div>
            
            <button type="submit" class="btn btn-success">Simpan Barang</button>
            <a href="index.php?page=user/list" class="btn">Batal</a>
        </form>
    </div>
</div>