<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Pegawai</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="/pegawai/update/<?= $pegawai['id_pegawai']; ?>" method="post">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <label for="nama_karyawan">Nama Pegawai</label>
                                    <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" value="<?= esc($pegawai['nama_karyawan']); ?>" required>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="/pegawai" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
