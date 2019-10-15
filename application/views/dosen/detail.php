<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card" style="margin-left: 100px">
                <div class="card-header" align="center">
                    Detail Data
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted"><?= $dosen['nim']; ?></h6>
                    <h5 class="card-title"><?= $dosen['nama']; ?></h5>
                    
                    <p class="card-text"><?= $dosen['jenis_kelamin']; ?></p>
                    <p class="card-text"><?= $dosen['alamat']; ?></p>
                    <a href="<?= base_url(); ?>dosen" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>