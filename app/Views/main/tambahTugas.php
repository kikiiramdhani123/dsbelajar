<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>
<section id="tambahMapel">
    <div class="container">
        <h1 class="text-center mb-3 text-white">Halaman Tambah Tugas</h1>
        <div class="col-md-12 col-lg-12 col-xs-12">
            <form method="POST" action="Admin/tambahTugas">
                <table class="mx-auto bg-warning">
                    <tr>
                        <td><label class="form-label">Nama Guru</label></td>
                        <td>
                            <div class="mb-3 ml-3">
                                <select name="guru" id="guru" class="form-select <?= ($validation->hasError('guru')) ? 'is-invalid' : ''; ?>">
                                    <option value="">Pilih Guru</option>
                                    <?php foreach ($dataGuru as $d) : ?>
                                        <option value="<?= $d['namaGuru']; ?>"><?= $d['namaGuru']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('guru'); ?>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Mata Pelajaran</label></td>
                        <td>
                            <div class="mb-3 ml-3">
                                <select name="mapel" id="mapel" class="form-select <?= ($validation->hasError('mapel')) ? 'is-invalid' : ''; ?>">
                                    <option value="">Pilih Mata Pelajaran</option>
                                    <?php foreach ($dataMapel as $d) : ?>
                                        <option value="<?= $d['namaMapel']; ?>"><?= $d['namaMapel']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('mapel'); ?>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Kelas</label></td>
                        <td>
                            <div class="mb-3 ml-3">
                                <select name="kelas" id="kelas" class="form-select <?= ($validation->hasError('kelas')) ? 'is-invalid' : ''; ?>">
                                    <option value="">Pilih Kelas</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kelas'); ?>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Deskripsi Tugas</label></td>
                        <td>
                            <div class="mb-3 ml-3">
                                <textarea class="form-control <?= ($validation->hasError('deskripsiTugas')) ? 'is-invalid' : ''; ?>" name="deskripsiTugas" id="deskripsiTugas" cols="40" rows="5"></textarea>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('deskripsiTugas'); ?>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Batas Pengumpulan</label></td>
                        <td>
                            <div class="mb-3 ml-3">
                                <input class="form-control <?= ($validation->hasError('batasPengumpulan')) ? 'is-invalid' : ''; ?>" type="datetime-local" name="batasPengumpulan" id="batasPengumpulan"></input>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('batasPengumpulan'); ?>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td><button type="submit" class="btn btn-primary">Kirim</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>