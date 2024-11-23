<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Kriteria</h1>
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
                            <form action="/data-kriteria/update/<?= $kriteria['id_kriteria']; ?>" method="post">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <label for="kode_kriteria">Kode Kriteria</label>
                                    <input type="text" class="form-control" id="kode_kriteria" name="kode_kriteria" value="<?= esc($kriteria['kode_kriteria']); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_kriteria">Nama Kriteria</label>
                                    <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" value="<?= esc($kriteria['nama_kriteria']); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="nilai_kriteria">Bobot Kriteria</label>
                                    <input type="number" step="0.01" class="form-control" id="nilai_kriteria" name="nilai_kriteria" value="<?= esc($kriteria['nilai_kriteria']); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="tipe_kriteria">Tipe Kriteria</label>
                                    <select class="form-control" id="tipe_kriteria" name="tipe_kriteria" required>
                                        <option value="Benefit" <?= $kriteria['tipe_kriteria'] === 'Benefit' ? 'selected' : ''; ?>>Benefit</option>
                                        <option value="Cost" <?= $kriteria['tipe_kriteria'] === 'Cost' ? 'selected' : ''; ?>>Cost</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="/data-kriteria" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
