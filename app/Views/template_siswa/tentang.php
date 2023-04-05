<div class="container">

    <div class="section-title w-75 mx-auto">
        <h2>Tentang Sekolah</h2>
        <p><?= $tentang['profil_nama'] ?> merupakan tempat belajar mengajar yang beralamatkan di <?= $tentang['profil_alamat'] ?> dan memiliki Kepala Sekolah bernama <?= $tentang['profil_kepsek'] ?> </p>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="icon-box">
                <div class="icon"><i class="bi bi-easel" style="color: #ff689b;"></i></div>
                <h4 class="title"><a href="">Visi Sekolah</a></h4>
                <p class="description"><?= $tentang['profil_visi'] ?></p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="icon-box">
                <div class="icon"><i class="bi bi-calendar4-week" style="color: #4680ff;"></i></div>
                <h4 class="title"><a href="">Misi Sekolah</a></h4>
                <p class="description"><?= $tentang['profil_misi'] ?></p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="icon-box">
                <div class="icon"><i class="bi bi-telephone" style="color: #41cf2e;"></i></div>
                <h4 class="title"><a href="">Kontak Sekolah</a></h4>
                <div class="description d-flex mt-4">
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item"><i class="bi bi-whatsapp"></i></li>
                        <li class="list-group-item"><?= $tentang['profil_kontak'] ?></li>
                    </ul>
                    <ul class="list-group list-group-horizontal ms-3">
                        <li class="list-group-item"><i class="bi bi-envelope"></i></li>
                        <li class="list-group-item"><?= $tentang['profil_email'] ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="icon-box">
                <div class="icon rounded-circle" style="border: 2px #3fcdc7 solid;"><i class="bi bi-info" style="color: #3fcdc7;"></i></div>
                <h4 class="title"><a href="">Status Sekolah</a></h4>
                <div class="description">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">NPSB</th>
                                <th scope="col">Akreditasi</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $tentang['profil_npsb'] ?></td>
                                <td><?= $tentang['profil_akreditasi'] ?></td>
                                <td><?= $tentang['profil_status'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>