<?php 

  include 'config/aksi.php';

 ?>
                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Data Berita</h4>
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom01">Judul</label>
                                                    <input type="text" name="judul" class="form-control" id="validationCustom01" value="<?php if(isset($_GET['edit'])){ echo $editdata['judul']; } ?>" required="">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom02">Tanggal</label>
                                                    <input type="date" name="tgl" class="form-control" id="validationCustom02" value="<?php if(isset($_GET['edit'])){ echo $editdata['tgl']; } ?>" required="">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Isi Berita</label>
                                                    <textarea class="ckeditor" id="ckedtor" name="isi" required=""><?php echo $editdata['isi'] ?></textarea>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom02">Upload Gambar</label>
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