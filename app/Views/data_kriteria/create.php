<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Kriteria</h1>
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
                            <form action="/data-kriteria/store" method="post">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <label for="kode_kriteria">Kode Kriteria</label>
                                    <input type="text" class="form-control" id="kode_kriteria" name="kode_kriteria" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_kriteria">Nama Kriteria</label>
                                    <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" required>
                                </div>
                                <div class="form-group">
                                    <label for="nilai_kriteria">Bobot Kriteria</label>
                                    <input type="number" step="0.01" class="form-control" id="nilai_kriteria" name="nilai_kriteria" required>
                                </div>
                                <div class="form-group">
                                    <label for="tipe_kriteria">Tipe Kriteria</label>
                                    <select class="form-control" id="tipe_kriteria" name="tipe_kriteria" required>
                                        <option value="Benefit">Benefit</option>
                                        <option value="Cost">Cost</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <a href="/data-kriteria" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
