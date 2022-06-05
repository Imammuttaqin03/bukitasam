<?php // Lihat Berita

if (isset($_POST['post'])) {
  if(isset($_GET['post'])) {

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
          $ubah = mysqli_query($conn, "update tb_berita set judul = '".$judul."', tgl = '".$tgl."', isi = '".$isi."', file = '".$filename."' where id_berita ='".$_GET['post']."'");
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
    $ubah = mysqli_query($conn, "update tb_berita set judul = '".$judul."', tgl = '".$tgl."', isi = '".$isi."', file = '".$fileDB."' where id_berita ='".$_GET['post']."'");
            if($ubah){
              echo "<script>alert('BERITA BERHASIL DI UPDATE');document.location='index.php?p=berita'</script>";
              }else{
                echo "<script>alert('GAGAL MENGUPLOAD FILE');document.location='index.php?p=berita'</script>";
                }
    }
  
          }

        }
            if(isset($_GET['post'])){
            $editdata=mysqli_fetch_array(mysqli_query($conn, "select * from tb_berita where id_berita = '".$_GET['post']."'"));
            }
?>