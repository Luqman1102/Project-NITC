<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main>
    <div class="we-padding">
        <div class="py-5 bg-light">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-2 border p-4 bg-white h-100">
                        <div class="footer-area">
                            <div class="footer-tittle">
                                <h4 class="mb-4">Profil Saya</h4>
                                <ul>
                                    <li><a href="http://localhost:8080/index.html" class="menu-aktif">Profil</a></li>
                                    <li><a href="http://localhost:8080/about.html" class="menu-tidak-aktif">Produk Jasa</a></li>
                                    <li><a href="http://localhost:8080/single-blog.html" class="menu-tidak-aktif">Pesanan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 border p-4 bg-white">
                        <h2>Pesanan</h2>
                        <p>Kelola Pesanan anda untuk mengontrol, melindungi, dan memproses pesanan untuk anda</p>
                        <hr>
                        <div class="container-fluid">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a href="#"><img src="/assets/images/#.png" class="avatar" alt="Avatar"> Judul barang</a></td>
                                        <td><span class="status text-success">&bull;</span> Active</td>
                                        <td>
                                            <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="fas fa-material-icons"></i><i class="material-icons">&#xE8B8;</i></a>
                                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><a href="#"><img src="/examples/images/avatar/2.jpg" class="avatar" alt="Avatar"> Judul</a></td>
                                        <td><span class="status text-success">&bull;</span> Active</td>
                                        <td>
                                            <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><a href="#"><img src="/examples/images/avatar/3.jpg" class="avatar" alt="Avatar"> Judul</a></td>
                                        <td><span class="status text-danger">&bull;</span> Tidak active</td>
                                        <td>
                                            <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><a href="#"><img src="/examples/images/avatar/4.jpg" class="avatar" alt="Avatar"> Judul</a></td>
                                        <td><span class="status text-success">&bull;</span> Active</td>
                                        <td>
                                            <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="clearfix">
                                <div class="hint-text">Showing <b>1</b> out of <b>3</b> entries</div>
                                <ul class="pagination">
                                    <li class="page-item disabled"><a href="#">Previous</a></li>
                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

</main>

<?= $this->endSection(); ?>