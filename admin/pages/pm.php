<?php 

  include 'config/aksi1.php';

?>
                    <?php if ($_SESSION['status'] == 'admin' OR $_SESSION['status'] == 'staff') : ?>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <button onclick="window.location.href = 'index.php?p=tambah_inventaris';" class="btn btn-primary btn-lg" >Tambah Inventaris <i class="ti-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <!-- Dark table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Data Pengembangan Masyarakat</h4>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="text-left">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Inventaris</th>
                                                <th>Bidang</th>
                                                <th>Tanggal</th>
                                                <th>Keterangan</th>
                                                <th>File</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                              $i=1;
                                              //Mysqli_query : digunakan untuk menjalankan commad sql (query)
                                              $sql=mysqli_query($conn,"SELECT * FROM tb_inventaris where bidang = 'Pengembangan Masyarakat'");
                                              //Mysqli_query_fect_array : digunakan untuk menampung data dari command (perintah) dari mysqli_query
                                              while($data=mysqli_fetch_array($sql)):
                                          ?>
                                              <tr>
                                                <td><?php  echo $i++; ?></td>
                                                <td><?= $data["nama"]; ?></td>
                                                <td><?= $data["bidang"]; ?></td>
                                                <td><?= $data["tgl"]; ?></td>
                                                <td><?= $data["ket"]; ?></td>
                                                <td>
                                                    <a href='upload/inventaris/<?= $data["file"]; ?>' target='_blank'><i class="fa fa-download"> <?= $data["file"]; ?></i></a>
                                                </td>
                                                <?php if ($_SESSION['status'] == 'admin') : ?>
                                                <td>
                                                  <a href='?p=edit_inventaris&edit=<?= $data["id_inven"]; ?>'><i class="fa fa-edit"></i> |</a>
                                                  <a href='?p=pm&del=<?= $data["id_inven"]; ?>'><i class="ti-trash"></i> </a>
                                                </td>
                                                <?php endif; ?>
                                              </tr>
                                              <?php endwhile ?>
                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dark table end -->