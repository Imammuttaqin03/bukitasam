<?php 

  include 'config/aksi1.php';

 ?>
                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <button onclick="window.location.href = 'index.php';" class="btn btn-primary btn-lg" >Kembali <i class="ti-arrow-left"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Data Berita</h4>
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Nama Inventaris</label>
                                                    <input type="text" name="nama" class="form-control" id="validationCustom01" required="">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label class="col-form-label">Bidang</label>
                                                    <select name="bidang" class="form-control form-control-lg">
                                                        <option selected="selected">Pilih Bidang</option>
                                                        <option value="Keanekaragaman Hayati">Keanekaragaman Hayati</option>
                                                        <option value="Pengelolaan Udara">Pengelolaan Udara</option>
                                                        <option value="Pengelolaan Air">Pengelolaan Air</option>
                                                        <option value="Life Cycle Assesment">Life Cycle Assesment</option>
                                                        <option value="Sistem Manajemen Lingkungan">Sistem Manajemen Lingkungan</option>
                                                        <option value="Pengembangan Masyarakat">Pengembangan Masyarakat</option>
                                                        <option value="Energi">Energi</option>
                                                        <option value="5R Limbah Non B">5R Limbah Non B</option>
                                                        <option value="Pengelolaan LB">Pengelolaan LB</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom02">Tanggal</label>
                                                    <input type="date" name="tgl" class="form-control" id="validationCustom02" required="">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom01">Keterangan </label>
                                                    <input type="text" name="ket" class="form-control" id="validationCustom01" required="">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom02">Upload File</label>
                                                    <input type="file" name="file" class="form-control" id="validationCustom02" required="">
                                                </div>
                                            </div>
                                            <button class="btn btn-primary pull-right" type="submit" name="simpan">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
