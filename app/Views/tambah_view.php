<div class="container p-5">
    <a href="<?= base_url('mahasiswa');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data Mahasiswa</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('mahasiswa/add');?>">
            <div class="form-group">
                    <label for="">Nim</label>
                    <input type="number" name="nim" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Nama Mahasiswa</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Kelas</label>
                    <input type="text" name="kelas" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Angkatan</label>
                    <input type="number" name="angkatan" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>
            
        </div>
    </div>
</div>