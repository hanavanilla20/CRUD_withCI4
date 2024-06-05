<div class="container pt-5">
    <a href="<?= base_url('mhsw/tambah');?>" class="btn btn-success mb-2"> Tambah Data </a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title"> Data Mahasiswa </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr align="center">
                            <th style="max-width: 30px;"> No. </th>
                            <th style="max-width: 100px;"> NIM </th>
                            <th> Nama Mahasiswa </th>
                            <th> Kelas </th>
                            <th style="max-width: 60px;"> Angkatan </th>
                            <th> Aksi </th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getMhsw as $isi){?>
                            <tr align="center">
                                <td style="max-width: 30px;"><?= $no;?></td>
                                <td style="max-width: 100px;"><?= $isi['nim'];?></td>
                                <td><?= $isi['nama'];?></td>
                                <td><?= $isi['kelas'];?></td>
                                <td style="max-width: 60px;"><?= $isi['angkatan'];?></td>
                                <td>
                                    <a href="<?= base_url('mhsw/edit/'.$isi['no']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('mhsw/hapus/'.$isi['no']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data mahasiswa ?')"
                                    class="btn btn-danger">
                                    Hapus</a>

                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  

                </table>
            </div>
        </div>
    </div>
</div>