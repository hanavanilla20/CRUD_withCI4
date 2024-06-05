<div class="container p-5">
    <a href="<?= base_url('mhsw');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title"> Edit Data Mahasiswa : <?= $mhsw->nama;?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('mhsw/update');?>">
                <div class="form-group">
                    <label for=""> NIM </label>
                    <input type="text" value="<?= $mhsw->nim;?>" name="nim" required class="form-control">
                </div>
                <div class="form-group">
                    <label for=""> Nama </label>
                    <input type="text" value="<?= $mhsw->nama;?>" name="nama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for=""> Kelas </label>
                    <input type="text" value="<?= $mhsw->kelas;?>" name="kelas" required class="form-control">
                </div>
                <div class="form-group">
                    <label for=""> Angkatan </label>
                    <input type="number" value="<?= $mhsw->angkatan;?>" name="angkatan" required class="form-control">
                </div>
                <input type="hidden" value="<?= $mhsw->no;?>" name="no">
                <button class="btn btn-success"> Edit Data </button>
            </form>
            
        </div>
    </div>
</div>