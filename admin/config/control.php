<?php 

    $data_total = "SELECT count(id_inven) as total FROM tb_inventaris";
    $query_total = mysqli_query($conn, $data_total);
    $tampil_total = mysqli_fetch_array($query_total);

    $data_kh = "SELECT count(id_inven) as total FROM tb_inventaris where bidang = 'Keanekaragaman Hayati'";
    $query_kh = mysqli_query($conn, $data_kh);
    $tampil_kh = mysqli_fetch_array($query_kh);

    $data_pu = "SELECT count(id_inven) as total FROM tb_inventaris where bidang = 'Pengelolaan Udara'";
    $query_pu = mysqli_query($conn, $data_pu);
    $tampil_pu = mysqli_fetch_array($query_pu);

    $data_pa = "SELECT count(id_inven) as total FROM tb_inventaris where bidang = 'Pengelolaan Air'";
    $query_pa = mysqli_query($conn, $data_pa);
    $tampil_pa = mysqli_fetch_array($query_pa);

    $data_lca = "SELECT count(id_inven) as total FROM tb_inventaris where bidang = 'Life Cycle Assesment'";
    $query_lca = mysqli_query($conn, $data_lca);
    $tampil_lca = mysqli_fetch_array($query_lca);

    $data_sml = "SELECT count(id_inven) as total FROM tb_inventaris where bidang = 'Sistem Manajemen Lingkungan'";
    $query_sml = mysqli_query($conn, $data_sml);
    $tampil_sml = mysqli_fetch_array($query_sml);

    $data_pm = "SELECT count(id_inven) as total FROM tb_inventaris where bidang = 'Pengembangan Masyarakat'";
    $query_pm = mysqli_query($conn, $data_pm);
    $tampil_pm = mysqli_fetch_array($query_pm);

    $data_energi = "SELECT count(id_inven) as total FROM tb_inventaris where bidang = 'Energi'";
    $query_energi = mysqli_query($conn, $data_energi);
    $tampil_energi = mysqli_fetch_array($query_energi);

    $data_5lnb = "SELECT count(id_inven) as total FROM tb_inventaris where bidang = '5R Limbah Non B'";
    $query_5lnb = mysqli_query($conn, $data_5lnb);
    $tampil_5lnb = mysqli_fetch_array($query_5lnb);

    $data_pl = "SELECT count(id_inven) as total FROM tb_inventaris where bidang = 'Pengelolaan LB'";
    $query_pl = mysqli_query($conn, $data_pl);
    $tampil_pl = mysqli_fetch_array($query_pl);

 ?>

<?php 
    $dir = 'pages/';
    if (isset($_GET['p'])) {
        $page = $_GET['p'];
        switch ($page) {
            case 'berita':
                include $dir . 'berita.php';
                break;
            case 'tambah_berita':
                include $dir . 'tambah_berita.php';
                break;
            case 'edit_berita':
                include $dir . 'edit_berita.php';
                break;
            case 'tambah_inventaris':
                include $dir . 'tambah_inventaris.php';
                break;
            case 'edit_inventaris':
                include $dir . 'edit_inventaris.php';
                break;
            case 'kh':
                include $dir . 'kh.php';
                break;
            case 'pu':
                include $dir . 'pu.php';
                break;
            case 'pa':
                include $dir . 'pa.php';
                break;
            case 'lca':
                include $dir . 'lca.php';
                break;
            case 'sml':
                include $dir . 'sml.php';
                break;
            case 'pm':
                include $dir . 'pm.php';
                break;
            case 'energi':
                include $dir . 'energi.php';
                break;
            case '5lnb':
                include $dir . '5lnb.php';
                break;
            case 'pl':
                include $dir . 'pl.php';
                break;
        }
    } else { ?>


                <!-- sales report area start -->
                        <div class="col-md-12">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="ti-user"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Selamat Datang "<?php echo $_SESSION['nama']; ?>", &nbsp; di Aplikasi Penyimpanan Data Proper PT.Bukit Asam Tbk. Unit Dermaga Kertapati 
                                            <br>
                                            <br>
                                            Anda Sekarang (<?php echo $_SESSION['status']; ?>)</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                    </div> 
                                </div>
                            </div>
                        </div>
                <!-- sales report area end -->

                <!-- sales report area start -->
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><?php echo ($tampil_kh['total']); ?></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Keanekaragaman Hayati</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!-- sales report area end -->

                <!-- sales report area start -->
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><?php echo ($tampil_pu['total']); ?></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Pengelolaan Udara</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!-- sales report area end -->

                <!-- sales report area start -->
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><?php echo ($tampil_pa['total']); ?></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Pengelolaan Air</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!-- sales report area end -->

                <!-- sales report area start -->
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><?php echo ($tampil_lca['total']); ?></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Life Cycle Assesment</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!-- sales report area end -->

                <!-- sales report area start -->
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><?php echo ($tampil_sml['total']); ?></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Sistem Manajemen Lingkungan</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!-- sales report area end -->

                <!-- sales report area start -->
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><?php echo ($tampil_pm['total']); ?></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Pengembangan Masyarakat</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!-- sales report area end -->

                <!-- sales report area start -->
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><?php echo ($tampil_energi['total']); ?></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Energi</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!-- sales report area end -->

                <!-- sales report area start -->
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><?php echo ($tampil_5lnb['total']); ?></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">5R Limbah Non B</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!-- sales report area end -->

                <!-- sales report area start -->
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><?php echo ($tampil_pl['total']); ?></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Pengelolaan LB</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!-- sales report area end -->
<?php } ?>