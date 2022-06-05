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
                                                    <input type="text" name="nama" class="form-control" id="validationCustom01" value="<?php if(isset($_GET['edit'])){ echo $editdata['nama']; } ?>" required="">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label class="col-form-label">Bidang</label>
                                                    <select name="bidang" class="form-control form-control-lg">
                                                        <option selected="selected">Pilih Bidang</option>
                                                        <option value="Keanekaragaman Hayati" <?php if ($editdata['bidang'] == "Keanekaragaman Hayati") {echo "selected";} ?>>Keanekaragaman Hayati</option>
                                                        <option value="Pengelolaan Udara" <?php if ($editdata['bidang'] == "Pengelolaan Udara") {echo "selected";} ?>>Pengelolaan Udara</option>
                                                        <option value="Pengelolaan Air" <?php if ($editdata['bidang'] == "Pengelolaan Air") {echo "selected";} ?>>Pengelolaan Air</option>
                                                        <option value="Life Cycle Assesment" <?php if ($editdata['bidang'] == "Life Cycle Assesment") {echo "selected";} ?>>Life Cycle Assesment</option>
                                                        <option value="Sistem Manajemen Lingkungan" <?php if ($editdata['bidang'] == "Sistem Manajemen Lingkungan") {echo "selected";} ?>>Sistem Manajemen Lingkungan</option>
                                                        <option value="Pengembangan Masyarakat" <?php if ($editdata['bidang'] == "Pengembangan Masyarakat") {echo "selected";} ?>>Pengembangan Masyarakat</option>
                                                        <option value="Energi" <?php if ($editdata['bidang'] == "Energi") {echo "selected";} ?>>Energi</option>
                                                        <option value="5R Limbah Non B" <?php if ($editdata['bidang'] == "5R Limbah Non B") {echo "selected";} ?>>5R Limbah Non B</option>
                                                        <option value="Pengelolaan LB" <?php if ($editdata['bidang'] == "Pengelolaan LB") {echo "selected";} ?>>Pengelolaan LB</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom02">Tanggal</label>
                                                    <input type="date" name="tgl" class="form-control" id="validationCustom02" value="<?php if(isset($_GET['edit'])){ echo $editdata['tgl']; } ?>" required="">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom01">Keterangan </label>
                                                    <input type="text" name="ket" class="form-control" id="validationCustom01" value="<?php if(isset($_GET['edit'])){ echo $editdata['ket']; } ?>" required="">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom02">Upload File</label>
                                                    <input type="hidden" name="fileDB" class="form-control" id="validationCustom02" value="<?php if(isset($_GET['edit'])){ echo $editdata['file']; } ?>">
                                                    <input type="file" name="file" class="form-control">
                                                </div>
                                            </div>
                                            <button class="btn btn-primary pull-right" type="submit" name="edit">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
