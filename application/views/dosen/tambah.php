<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card" style="max-width:100rem" >
                <!-- <h2 align="center">DAFTAR MAHASISWA</h2> -->
                <div class="card-header" align="center">
                    FORM TAMBAH DATA
</div>
 <div class="card-body">
<form action="" method="post">
<div class="form-group">
    <label for="nim">NIM</label>
        <input type="text" name="nim" class="form-control" id="nim">
     <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label><br>
                            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="pria"> Pria <br>
                            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="wanita"> Wanita <br>
                            <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                        </div><div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea row="30" col="50" name="alamat" class="form-control" id="alamat"></textarea>
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>