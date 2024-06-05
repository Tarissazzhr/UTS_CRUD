<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Mahasiswa_model;

class Mahasiswa extends Controller
{
    public function index()
    {
        $model = new Mahasiswa_model;
        $data['title']     = 'Data Mahasiswa';
        $data['getMahasiswa'] = $model->getMahasiswa();
        echo view('header_view', $data);
        echo view('mahasiswa_view', $data);
        echo view('footer_view', $data);
    }

    public function tambah()
    {
        $data['title']     = 'Tambah Data Mahasiswa';
        echo view('header_view', $data);
        echo view('tambah_view', $data);
        echo view('footer_view', $data);
    }

    public function add()
    {
        $model = new Mahasiswa_model;
        $data = array(
            'nim'               => $this->request->getPost('nim'),
            'nama_mahasiswa'    => $this->request->getPost('nama'),
            'kelas'             => $this->request->getPost('kelas'),
            'angkatan'          => $this->request->getPost('angkatan')
        );
        $model->saveMahasiswa($data);
        echo '<script>
                alert("Sukses Tambah Data Mahasiswa");
                window.location="'.base_url('mahasiswa').'"
            </script>';

    }

    public function edit($id)
    {
        $model = new Mahasiswa_model;
        $getMahasiswa = $model->getMahasiswa($id)->getRow();
        if(isset($getMahasiswa))
        {
            $data['mahasiswa'] = $getMahasiswa;
            $data['title']  = 'Edit '.$getMahasiswa->nama_mahasiswa;

            echo view('header_view', $data);
            echo view('edit_view', $data);
            echo view('footer_view', $data);

        }else{

            echo '<script>
                    alert("NIM mahasiswa '.$id.' Tidak ditemukan");
                    window.location="'.base_url('mahasiswa').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new Mahasiswa_model;
        $id = $this->request->getPost('nim');
        $data = array(
            'nim'               => $this->request->getPost('nim'),
            'nama_mahasiswa'    => $this->request->getPost('nama'),
            'kelas'             => $this->request->getPost('kelas'),
            'angkatan'          => $this->request->getPost('angkatan')
        );
        $model->editMahasiswa($data,$id);
        echo '<script>
                alert("Sukses Edit Data Mahasiswa");
                window.location="'.base_url('mahasiswa').'"
            </script>';

    }

    public function hapus($id)
    {
        $model = new Mahasiswa_model;
        $getMahasiswa = $model->getMahasiswa($id)->getRow();
        if(isset($getMahasiswa))
        {
            $model->hapusMahasiswa($id);
            echo '<script>
                    alert("Hapus Data Mahasiswa Sukses");
                    window.location="'.base_url('mahasiswa').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, Nim mahasiswa '.$id.' Tidak ditemukan");
                    window.location="'.base_url('mahasiswa').'"
                </script>';
        }
    }

}