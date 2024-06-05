<div class="container pt-5">
    <a href="<?= base_url('mahasiswa/tambah');?>" class="btn btn-success mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Mahasiswa</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nim</th>
                            <th>Nama Mahasiswa</th>
                            <th>Kelas</th>
                            <th>Angkatan</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php foreach($getMahasiswa as $isi){?>
                            <tr>
                                <td><?= $isi['nim'];?></td>
                                <td><?= $isi['nama_mahasiswa'];?></td>
                                <td><?= $isi['kelas'];?></td>
                                <td><?= $isi['angkatan'];?></td>
                                <td>
                                    <a href="<?= base_url('mahasiswa/edit/'.$isi['nim']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('mahasiswa/hapus/'.$isi['nim']);?>" 
                                    onclick="javascript:return confirm('Apakah anda ingin menghapus data mahasiswa ?')"
                                    class="btn btn-danger">
                                    Hapus</a>

                                </td>
                            </tr>
                        <?php }?>
                    </tbody>  

                </table>
            </div>
        </div>
    </div>
</div>