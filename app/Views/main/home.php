<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>
<section id="atas">
    <div class="text-center">
        <marquee behavior="scroll" direction="left" scrolldelay="20">
            <h2 class="text-white">
                Selamat Datang Di Website Belajar Online
            </h2><br>
            <h2 class="text-white">SMK Darussa'adah</h2>
        </marquee>
    </div>
    <div class="container">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success alert-dismissible">
                <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong><?= session()->getFlashdata('pesan'); ?></strong>
            </div>
        <?php endif; ?>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="#kelas10" data-bs-toggle="pill" href="#kelas10" role="tab" aria-controls="pills-home" aria-selected="true">Kelas 10</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="#kelas11" data-bs-toggle="pill" href="#kelas11" role="tab" aria-controls="pills-profile" aria-selected="false">Kelas 11</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="#kelas12" data-bs-toggle="pill" href="#kelas12" role="tab" aria-controls="pills-contact" aria-selected="false">Kelas 12</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="kelas10" role="tabpanel" aria-labelledby="kelas10">
                <div class="mt-4">
                    <div class="row">
                        <?php foreach ($dataKelas10 as $d) : ?>
                            <div class="col-xs-6 col-sm-6 col-md-3 bg-warning ml-3 mb-2" style="margin-left:5px; margin-bottom:5px">
                                <h2><?= $d['mapel']; ?></h2>
                                <h4><?= $d['guru']; ?></h4>
                                <a href="<?= $d['link']; ?>">
                                    <button class="btn btn-primary mb-2">Belajar Yuk!</button>
                                </a>
                                <a href="https://api.whatsapp.com/send?phone=<?= $d['nomerHp']; ?>&text=Assalamualaikum Warahmatullah">
                                    <div class="btn-group mb-2" role="group" aria-label="Basic mixed styles example">
                                        <input type="image" src="/img/whatsapp.png" width="35px"></input>
                                        <button type="button" class="btn btn-primary">Tanya Guru</button>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>

            <div class="tab-pane fade show" id="kelas11" role="tabpanel" aria-labelledby="kelas11">
                <div class="mt-4">
                    <div class="row">
                        <?php foreach ($dataKelas11 as $d) : ?>
                            <div class="col-xs-6 col-sm-6 col-md-3 bg-warning ml-3 mb-2" style="margin-left:5px; margin-bottom:5px">
                                <h2><?= $d['mapel']; ?></h2>
                                <h4><?= $d['guru']; ?></h4>
                                <a href="<?= $d['link']; ?>">
                                    <button class="btn btn-primary mb-2">Belajar Yuk!</button>
                                </a>
                                <a href="https://api.whatsapp.com/send?phone=<?= $d['nomerHp']; ?>&text=Assalamualaikum Warahmatullah">
                                    <div class="btn-group mb-2" role="group" aria-label="Basic mixed styles example">
                                        <input type="image" src="/img/whatsapp.png" width="35px"></input>
                                        <button type="button" class="btn btn-primary">Tanya Guru</button>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade show" id="kelas12" role="tabpanel" aria-labelledby="kelas12">
                <div class="mt-4">
                    <div class="row">
                        <?php foreach ($dataKelas12 as $d) : ?>
                            <div class="col-xs-6 col-sm-6 col-md-3 bg-warning ml-3 mb-2" style="margin-left:5px; margin-bottom:5px">
                                <h2><?= $d['mapel']; ?></h2>
                                <h4><?= $d['guru']; ?></h4>
                                <a href="<?= $d['link']; ?>">
                                    <button class="btn btn-primary mb-2">Belajar Yuk!</button>
                                </a>
                                <a href="https://api.whatsapp.com/send?phone=<?= $d['nomerHp']; ?>&text=Assalamualaikum Warahmatullah">
                                    <div class="btn-group mb-2" role="group" aria-label="Basic mixed styles example">
                                        <input type="image" src="/img/whatsapp.png" width="35px"></input>
                                        <button type="button" class="btn btn-primary">Tanya Guru</button>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>