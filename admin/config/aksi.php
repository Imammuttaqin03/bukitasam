<?php // input Berita

if (isset($_POST['simpan'])) {
  $judul = $_POST['judul'];
  $tgl = $_POST['tgl'];
  $isi = $_POST['isi'];

  $ekstensi_diperbolehkan = array('png','jpg','gif');
  $filename = $_FILES['file']['name'];
  $x = explode('.', $filename);
  $ekstensi = strtolower(end($x));
  $ukuran = $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name']; 

  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070){      
          move_uploaded_file($file_tmp, 'upload/'.$filename);
          $simpan = mysqli_query($conn,"INSERT INTO tb_berita VALUES(' ','$judul','$tgl','$isi','$filename') ");
          if($simpan){
            echo "<script>alert('BERITA BERHASIL DI UPLOAD');document.location='index.php?p=tambah_berita'</script>";
          }else{
            echo "<script>alert('GAGAL MENGUPLOAD FILE');document.location='index.php?p=tambah_berita'</script>";
          }
        }else{
          echo "<script>alert('UKURAN FILE TERLALU BESAR');document.location='index.php?p=tambah_berita'</script>";
        }
      }else{
        echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN');document.location='index.php?p=tambah_berita'</script>";
      }
    }
?>

<?php // Edit Berita

if (isset($_POST['edit'])) {
  if(isset($_GET['edit'])) {

    $judul = $_POST['judul'];
    $tgl = $_POST['tgl'];
    $isi = $_POST['isi'];
    $fileDB = $_POST['fileDB'];

    $ekstensi_diperbolehkan = array('png','jpg','gif');
    $filename = $_FILES['file']['name'];
    if($_FILES['file']['size'] > 0){
    $x = explode('.', $filename);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070){      
          move_uploaded_file($file_tmp, 'upload/'.$filename);
          $ubah = mysqli_query($conn, "update tb_berita set judul = '".$judul."', tgl = '".$tgl."', isi = '".$isi."', file = '".$filename."' where id_berita ='".$_GET['edit']."'");
            if($ubah){
              echo "<script>alert('BERITA BERHASIL DI UPDATE');document.location='index.php?p=berita'</script>";
              }else{
                echo "<script>alert('GAGAL MENGUPLOAD FILE');document.location='index.php?p=berita'</script>";
                }
              }else{
                echo "<script>alert('UKURAN FILE TERLALU BESAR');document.location='index.php?p=berita'</script>";
                }
              }else{
                echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN');document.location='index.php?p=berita'</script>";
              }
                 
      
    } else {
    $ubah = mysqli_query($conn, "update tb_berita set judul = '".$judul."', tgl = '".$tgl."', isi = '".$isi."', file = '".$fileDB."' where id_berita ='".$_GET['edit']."'");
            if($ubah){
              echo "<script>alert('BERITA BERHASIL DI UPDATE');document.location='index.php?p=berita'</script>";
              }else{
                echo "<script>alert('GAGAL MENGUPLOAD FILE');document.location='index.php?p=berita'</script>";
                }
    }
  
          }

        }
            if(isset($_GET['edit'])){
            $editdata=mysqli_fetch_array(mysqli_query($conn, "select * from tb_berita where id_berita = '".$_GET['edit']."'"));
            }
?>

<?php // Delete Berita
if (isset($_GET['del'])) {
  $value = $_GET['del'];
  
  $hapusFile = mysqli_query($conn, "DELETE FROM tb_berita WHERE id_berita = '".$_GET['del']."'");
  if ($hapusFile) {
    echo "<script>alert('Berita berhasil dihapus');document.location='index.php?p=berita'</script>";
  } else {
    echo "<script>alert('Gagal Hapus Berita');document.location='index.php?p=berita'</script>";
  }
}

?>