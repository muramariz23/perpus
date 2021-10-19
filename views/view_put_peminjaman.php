<?php 

	//memanggil fungsi dari CSRF
include('../config/csrf.php');

include '../controller/controller_kelas.php';

//membuat objek dari class kelas
$kelas = new controller_kelas();
$id_kelas = base64_decode($_GET['id_kelas']);
$GetKelas = $kelas->GetData_Where($id_kelas);

 ?>




 <?php 

 	foreach ($GetKelas as $Get) {

  ?>

  <form action="../config/routes.php?function=put_kelas" method="POST">
  	<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>">
  	<table border="1">
  		<input type="hidden" name="id_kelas" value="<?php echo $Get['id_kelas']; ?>">
  		<tr>
  			<td>NAMA KELAS</td>
  			<td><input type="text" name="nama_kelas" value="<?php echo $Get['nama_kelas'] ?>" required></td>
  		</tr>

  		<tr>
  			<td>KOMPETENSI KEAHLIAN</td>
  			<td><input type="text" name="kompetensi_keahlian" value="<?php echo $Get['kompetensi_keahlian'] ?>" required onKeyPress="return ValidateAlpha(event);"></td>
  		</tr>


  		<tr>
      <td><a href="http://localhost/belajarmvc/views/view_kelas.php">back</a></td>  
      <td colspan="2" align="right"><input type="submit" name="proses" value="create" required onKeyPress="return ValidateAlpha(event);"></td>
      </tr>
  	</table>
  </form>

  <?php } ?>

  <script>
        function ValidateAlpha(evt) {
            var keyCode = (evt.which) ? evt.which : evt.keyCode
            if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)

                return false;
            return true;
        }
    </script>