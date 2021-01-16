<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>
<section id="cekTugas">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success alert-dismissible">
            <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?= session()->getFlashdata('pesan'); ?></strong>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="row">
            <div class="col-6 mt-2">
                <form action="" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Mata Pelajaran....." name="keyword">
                        <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Guru</th>
                            <th scope="col">Mapel</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Deskripsi Tugas</th>
                            <th scope="col">Tugas Dibuat</th>
                            <th scope="col">Batas Pengumpulan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 + (10 * ($currentPage - 1)); ?>
                        <?php foreach ($dataTugas as $d) : ?>
                            <tr>

                                <td><?= $i++; ?></td>
                                <td><?= $d['guru']; ?></td>
                                <td><?= $d['mapel']; ?></td>
                                <td><?= $d['kelas']; ?></td>
                                <td><?= $d['deskripsiTugas']; ?></td>
                                <td><?= $d['pemberianTugas']; ?></td>
                                <td><?= $d['batasPengumpulan']; ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?= $pager->links('tugas', 'tugasPagination') ?>
    </div>

</section>
<?= $this->endSection(); ?>