<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Kriteria</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Kriteria</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Kriteria</h3>
                            <a href="/data-kriteria/create" class="btn btn-success float-right">Tambah Kriteria</a>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Kriteria</th>
                                        <th>Nama Kriteria</th>
                                        <th>Bobot Kriteria</th>
                                        <th>Tipe</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach ($kriteria as $row): ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= esc($row['kode_kriteria']); ?></td>
                                            <td><?= esc($row['nama_kriteria']); ?></td>
                                            <td><?= esc($row['nilai_kriteria']); ?></td>
                                            <td><?= esc($row['tipe_kriteria']); ?></td>
                                            <td>
                                                <a href="/data-kriteria/edit/<?= $row['id_kriteria']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="/data-kriteria/delete/<?= $row['id_kriteria']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
