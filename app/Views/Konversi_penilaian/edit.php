<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Konversi Penilaian</h1>
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
                            <form action="/konversi-penilaian/update/<?= $konversi['id_konversi']; ?>" method="post">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <label for="id_pegawai">Nama Pegawai</label>
                                    <select class="form-control" id="id_pegawai" name="id_pegawai" required>
                                        <?php foreach ($pegawai as $p): ?>
                                            <option value="<?= $p['id_pegawai']; ?>" <?= $p['id_pegawai'] == $konversi['id_pegawai'] ? 'selected' : ''; ?>>
                                                <?= esc($p['nama_karyawan']); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kode_kriteria">Nama Kriteria</label>
                                    <select class="form-control" id="kode_kriteria" name="kode_kriteria" required>
                                        <?php foreach ($kriteria as $k): ?>
                                            <option value="<?= $k['kode_kriteria']; ?>" <?= $k['kode_kriteria'] == $konversi['kode_kriteria'] ? 'selected' : ''; ?>>
                                                <?= esc($k['nama_kriteria']); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nilai_kriteria">Nilai Kriteria</label>
                                    <input type="number" class="form-control" id="nilai_kriteria" name="nilai_kriteria" value="<?= esc($konversi['nilai_kriteria']); ?>" required>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="/konversi-penilaian" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
