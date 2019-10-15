<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header" align="center"> 
                    FORM UBAH DATA
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $dosen['id']; ?>">
                        <div class="center">
                            <label for="nim">NIM</label>
                            <input type="text" name="nim" class="form-control" id="nim" value="<?= $dosen['nim']; ?>">
                            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="center">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $dosen['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label><br>
                            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="pria"> Pria <br>
                            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="wanita"> Wanita <br>
                            <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                        </div>
                        <div class="center">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $dosen['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>