<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Pegawai</h1>
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
                            <form action="/pegawai/store_with_kriteria" method="post">
                                <?= csrf_field(); ?>

                                <!-- Input Nama Pegawai -->
                                <div class="form-group">
                                    <label for="nama_karyawan">Nama Pegawai</label>
                                    <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" placeholder="Masukkan Nama Pegawai" required>
                                </div>

                                <!-- Input Kriteria -->
                                <h5>Nilai Kriteria</h5>
                                <hr>
                                <?php foreach ($kriteria as $k): ?>
                                    <div class="form-group">
                                        <label for="kriteria_<?= $k['kode_kriteria']; ?>"><?= esc($k['nama_kriteria']); ?></label>
                                        <input type="number" class="form-control" id="kriteria_<?= $k['kode_kriteria']; ?>" 
                                               name="kriteria[<?= $k['kode_kriteria']; ?>]" 
                                               placeholder="Masukkan nilai untuk <?= esc($k['nama_kriteria']); ?>" required>
                                    </div>
                                <?php endforeach; ?>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <a href="/pegawai" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
