<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Mhsw_model;

class Mhsw extends Controller
{
    public function index()
    {
        $model = new Mhsw_model;
        $data['title']     = 'Data Mahasiswa';
        $data['getMhsw'] = $model->getMhsw();
        echo view('header_view', $data);
        echo view('mhsw_view', $data);
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
        $model = new Mhsw_model;
        $data = array(
            'nim'       => $this->request->getPost('nim'),
            'nama'      => $this->request->getPost('nama'),
            'kelas'     => $this->request->getPost('kelas'),
            'angkatan'  => $this->request->getPost('angkatan')
        );
        $model->saveMhsw($data);
        echo '<script>
                alert("Sukses Tambah Data Mahasiswa");
                window.location="'.base_url('mhsw').'"
            </script>';

    }

    public function edit($id)
    {
        $model = new Mhsw_model;
        $getMhsw = $model->getMhsw($id)->getRow();
        if(isset($getMhsw))
        {
            $data['mhsw'] = $getMhsw;
            $data['title']  = 'Edit '.$getMhsw->nama;

            echo view('header_view', $data);
            echo view('edit_view', $data);
            echo view('footer_view', $data);

        }else{

            echo '<script>
                    alert("NIM '.$id.' Tidak ditemukan");
                    window.location="'.base_url('mhsw').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new Mhsw_model;
        $id = $this->request->getPost('no');
        $data = array(
            'nim'       => $this->request->getPost('nim'),
            'nama'      => $this->request->getPost('nama'),
            'kelas'     => $this->request->getPost('kelas'),
            'angkatan'  => $this->request->getPost('angkatan')
        );
        $model->editMhsw($data,$id);
        echo '<script>
                alert("Sukses Edit Data Mahasiswa");
                window.location="'.base_url('mhsw').'"
            </script>';
    }

    public function hapus($id)
    {
        $model = new Mhsw_model;
        $getMhsw = $model->getMhsw($id)->getRow();
        if(isset($getMhsw))
        {
            $model->hapusMhsw($id);
            echo '<script>
                    alert("Hapus Data Mahasiswa Sukses");
                    window.location="'.base_url('mhsw').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, NIM '.$id.' Tidak ditemukan");
                    window.location="'.base_url('mhsw').'"
                </script>';
        }
    }
}