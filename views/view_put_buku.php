<?php 

	//memanggil fungsi dari CSRF
include('../config/csrf.php');

include '../controller/controller_buku.php';

//membuat objek dari class buku
$buku = new controller_buku();
$id_buku = base64_decode($_GET['id_buku']);
$GetBuku = $buku->GetData_Where($id_buku);

 ?>




 <?php 

 	foreach ($GetBuku as $Get) {

  ?>

  <form action="../config/routes.php?function=put_buku" method="POST">
  	<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>">
  	<table border="1">
  		<input type="hidden" name="id_buku" value="<?php echo $Get['id_buku']; ?>">
  		<tr>
  			<td>ISBN</td>
  			<td><input type="text" name="nama_buku" value="<?php echo $Get['isbn'] ?>" required onKeyPress="return numberOnly(event);"></td>
  		</tr>

      <tr>
        <td>JUDUL BUKU</td>
        <td><input type="text" name="nama_buku" value="<?php echo $Get['judul'] ?>" required></td>
      </tr>

      <tr>
        <td>PENULIS</td>
        <td><input type="text" name="nama_buku" value="<?php echo $Get['penulis'] ?>" required></td>
      </tr>
      

  		<tr>
      <td><a href="main.php?menu=<?php echo base64_encode(1) ?>">back</a></td>  
      <td colspan="2" align="right"><input type="submit" name="proses" value="create"></td>
      </tr>
  	</table>
  </form>

  <?php } ?>

  <script>
        function ValidateAlpha() {
            var keyCode = (evt.which) ? evt.which : evt.keyCode
            if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)

                return false;
            return true;
        }

        function numberOnly(evt){  //u
    //var e = evt || window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode != 46 && charCode > 31 
  && (charCode < 48 || charCode > 57))
        return false;
        return true;
  }
    </script>