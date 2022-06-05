<?php 
    include 'config/koneksi.php';
    include 'header.php';
    session_start();

    if (!isset($_SESSION['status'])) {
      header('location:login.php');
    }
?>
<!doctype html>
<html class="no-js" lang="en">

<body>
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="">
                                <a href="index.php" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                            </li>
                            <?php if ($_SESSION['status'] == 'admin') : ?>
                            <li>
                                <a href="index.php?p=berita" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Data Berita
                                    </span></a>
                            </li>
                            <?php endif; ?>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-file"></i><span>Data Inventaris</span></a>
                                <ul class="collapse">
                                    <li><a href="index.php?p=kh"><i class="ti-file"></i> Keanekaragaman Hayati</a></li>
                                    <li class=""><a href="index.php?p=pu"><i class="ti-file"></i> Pengelolaan Udara</a></li>
                                    <li><a href="index.php?p=pa"><i class="ti-file"></i> Pengelolaan Air</a></li>
                                    <li><a href="index.php?p=lca"><i class="ti-file"></i> Life Cycle Assesment</a></li>
                                    <li class=""><a href="index.php?p=sml"><i class="ti-file"></i> Sistem Manajemen Lingkungan</a></li>
                                    <li><a href="index.php?p=pm"><i class="ti-file"></i> Pengembangan Masyarakat</a></li>
                                    <li><a href="index.php?p=energi"><i class="ti-file"></i> Energi</a></li>
                                    <li class=""><a href="index.php?p=5lnb"><i class="ti-file"></i> 5R Limbah Non B</a></li>
                                    <li><a href="index.php?p=pl"><i class="ti-file"></i> Pengelolaan LB</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">PT.Bukit Asam Tbk. Unit Dermaga Kertapati</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['nama']; ?> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="logout.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row mt-5">
                    <?php include'config/control.php'; ?>
                </div>
                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->
<?php 
    include 'footer.php';
?>