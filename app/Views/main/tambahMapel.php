<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>
<section id="tambahMapel">
    <div class="container">
        <h1 class="text-center mb-3 text-white">Halaman Tambah Modul Belajar</h1>
        <div class="col-md-12 col-lg-12 col-xs-12">
            <form method="POST" action="Admin/tambahMapel">
                <table class="mx-auto bg-warning">
                    <tr>
                        <td><label class="form-label">Nama Guru</label></td>
                        <td>
                            <div class="mb-3 ml-3">
                                <select name="guru" id="guru">
                                    <option value="">Pilih Guru</option>
                                    <?php foreach ($dataGuru as $d) : ?>
                                        <option value="<?= $d['namaGuru']; ?>"><?= $d['namaGuru']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Mata Pelajaran</label></td>
                        <td>
                            <div class="mb-3 ml-3">
                                <select name="mapel" id="mapel">
                                    <option value="">Pilih Mata Pelajaran</option>
                                    <?php foreach ($dataMapel as $d) : ?>
                                        <option value="<?= $d['namaMapel']; ?>"><?= $d['namaMapel']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Kelas</label></td>
                        <td>
                            <div class="mb-3 ml-3">
                                <select name="kelas" id="kelas">
                                    <option value="">Pilih Kelas</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Nomer HP</label></td>
                        <td>
                            <div class="mb-3 ml-3">
                                <input type="text" name="nomerHp" id="nomerHp"></input>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Masukkan Link</label></td>
                        <td>
                            <div class="mb-3 ml-3">
                                <textarea name="link" id="link" cols="40" rows="5"></textarea>
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