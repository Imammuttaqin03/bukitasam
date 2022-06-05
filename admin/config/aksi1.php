<?php // input File

if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $bidang = $_POST['bidang'];
  $tgl = $_POST['tgl'];
  $ket = $_POST['ket'];

  $ekstensi_diperbolehkan = array('png','jpg','gif','pdf','doc','docx','zip');
  $filename = $_FILES['file']['name'];
  $x = explode('.', $filename);
  $ekstensi = strtolower(end($x));
  $ukuran = $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name']; 

  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070){      
          move_uploaded_file($file_tmp, 'upload/inventaris/'.$filename);
          $simpan = mysqli_query($conn,"INSERT INTO tb_inventaris VALUES(' ','$nama','$bidang','$tgl','$ket','$filename') ");
          if($simpan){  
            echo "<script>alert('FILE BERHASIL DI UPLOAD');document.location='index.php?p=tambah_inventaris'</script>";
          }else{
            echo "<script>alert('GAGAL MENGUPLOAD FILE');document.location='index.php?p=tambah_inventaris'</script>";
          }
        }else{
          echo "<script>alert('UKURAN FILE TERLALU BESAR');document.location='index.php?p=tambah_inventaris'</script>";
        }
      }else{
        echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN');document.location='index.php?p=tambah_inventaris'</script>";
      }
    }
?>

<?php // Edit File

if (isset($_POST['edit'])) {
  if(isset($_GET['edit'])) {

    $nama = $_POST['nama'];
    $bidang = $_POST['bidang'];
    $tgl = $_POST['tgl'];
    $ket = $_POST['ket'];
    $fileDB = $_POST['fileDB'];

    $ekstensi_diperbolehkan = array('png','jpg','gif','pdf','doc','docx','zip');
    $filename = $_FILES['file']['name'];
    if($_FILES['file']['size'] > 0){
    $x = explode('.', $filename);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070){      
          move_uploaded_file($file_tmp, 'upload/inventaris/'.$filename);
          $ubah = mysqli_query($conn, "update tb_inventaris set nama = '".$nama."', bidang = '".$bidang."', tgl = '".$tgl."', ket = '".$ket."', file = '".$filename."' where id_inven ='".$_GET['edit']."'");
            if($ubah){
              echo "<script>alert('FILE BERHASIL DI UPLOAD');document.location='index.php?p=edit_inventaris'</script>";
              }else{
                echo "<script>alert('GAGAL MENGUPLOAD FILE');document.location='index.php?p=edit_inventaris'</script>";
                }
              }else{
                echo "<script>alert('UKURAN FILE TERLALU BESAR');document.location='index.php?p=edit_inventaris'</script>";
                }
              }else{
                echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN');document.location='index.php?p=edit_inventaris'</script>";
              }


    } else {
    $ubah = mysqli_query($conn, "update tb_inventaris set nama = '".$nama."', bidang = '".$bidang."', tgl = '".$tgl."', ket = '".$ket."', file = '".$fileDB."' where id_inven ='".$_GET['edit']."'");
            if($ubah){
              echo "<script>alert('FILE BERHASIL DI UPLOAD');document.location='index.php?p=edit_inventaris'</script>";
              }else{
                echo "<script>alert('GAGAL MENGUPLOAD FILE');document.location='index.php?p=edit_inventaris'</script>";
                }
    }
    
          }

        }
            if(isset($_GET['edit'])){
            $editdata=mysqli_fetch_array(mysqli_query($conn, "select * from tb_inventaris where id_inven = '".$_GET['edit']."'"));
            }
?>

<?php // Delete File
if (isset($_GET['del'])) {
  $value = $_GET['del'];
  
  $hapusFile = mysqli_query($conn, "DELETE FROM tb_inventaris WHERE id_inven = '".$_GET['del']."'");
  if ($hapusFile) {
    echo "<script>alert('file berhasil dihapus');document.location='index.php'</script>";
  } else {
    echo "<script>alert('Gagal Hapus file');document.location='index.php'</script>";
  }
}

?>