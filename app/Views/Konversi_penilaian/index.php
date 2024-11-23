<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Konversi Penilaian</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Konversi Penilaian</li>
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
                            <h3 class="card-title">Daftar Konversi Penilaian</h3>
                            <a href="/konversi-penilaian/create" class="btn btn-success float-right">Tambah Konversi Penilaian</a>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Pegawai</th>
                                        <th>Nama Kriteria</th>
                                        <th>Nilai Kriteria</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach ($konversi as $row): ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= esc($row['nama_karyawan']); ?></td>
                                            <td><?= esc($row['nama_kriteria']); ?></td>
                                            <td><?= esc($row['nilai_kriteria']); ?></td>
                                            <td>
                                                <a href="/konversi-penilaian/edit/<?= $row['id_konversi']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="/konversi-penilaian/delete/<?= $row['id_konversi']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
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
