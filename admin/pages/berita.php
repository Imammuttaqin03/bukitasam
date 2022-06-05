<?php 

  include 'config/aksi.php';

 ?>
                  <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <button onclick="window.location.href = 'index.php?p=tambah_berita';" class="btn btn-primary btn-lg" >Tambah Berita <i class="ti-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Dark table start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Data Berita</h4>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="text-left">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>No.</th>
                                                <th>Judul Berita</th>
                                                <th>Tanggal Publish</th>
                                                <th>isi Berita</th>
                                                <th>File</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                              $i=1;
                                              //Mysqli_query : digunakan untuk menjalankan commad sql (query)
                                              $sql=mysqli_query($conn,"SELECT * FROM tb_berita");
                                              //Mysqli_query_fect_array : digunakan untuk menampung data dari command (perintah) dari mysqli_query
                                              while($data=mysqli_fetch_array($sql)):
                                          ?>
                                              <tr>
                                                <td><?php  echo $i++; ?></td>
                                                <td><?= $data["judul"]; ?></td>
                                                <td><?= $data["tgl"]; ?></td>
                                                <td><?= $data["isi"]; ?></td>
                                                <td>
                                                    <img class="avatar user-thumb" src="upload/<?= $data["file"]; ?>">
                                                </td>
                                                <td>
                                                  <a href='?p=edit_berita&edit=<?= $data["id_berita"]; ?>'><i class="fa fa-edit"></i> |</a>
                                                  <a href='?p=berita&del=<?= $data["id_berita"]; ?>'><i class="ti-trash"></i> </a>
                                                </td>
                                              </tr>
                                              <?php endwhile ?>
                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dark table end -->