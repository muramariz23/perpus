<?php 
	//memanggil fungsi CSRF
	include('../config/csrf.php');

 ?>

 <form action="../config/routes.php?function=create_buku" method="POST">
 	<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>">

 	<table border="1">
 		<tr>
 			
 			<td><input type="hidden" name="id_kelas" onKeyPress="return numberOnly(event);"></td>
 		</tr>
 		<tr>
 			<td>ISBN</td>
 			<td><input type="text" name="isbn" onKeyPress="return numberOnly(event);" required></td>
 		</tr>
        <tr>
            <td>JUDUL BUKU</td>
            <td><input type="text" name="judul" required></td>
        </tr>
        <tr>
            <td>PENULIS</td>
            <td><input type="text" name="penulis" required></td>
        </tr>
        
 		<tr>
  			<td colspan="2" align="right"><input type="submit" name="proses" value="create_kelas"></td>
  		</tr>
 	</table>
 	
 </form>

 <script>
 	function numberOnly(evt){  //u
    //var e = evt || window.event;
	var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode != 46 && charCode > 31 
	&& (charCode < 48 || charCode > 57))
        return false;
        return true;
	}
		   
    function alphabetOnly
    (evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
         
        return false;
            return true;
    }
 </script>