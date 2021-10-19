<?php 

include '../controller/controller_buku.php';
// membuat objek dari class buku
$buku = new controller_buku();
$GetBuku = $buku->GetData_All();

//mengecek di objek $kelas ada berapa banyak property
//echo var_dump($kelas);

 ?>
 		<!-- icon tugas pertemuan 7 -->
 		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 		<!-- css Bootstrap -->
 		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


 		<h1>OOP - Class, Objek, Property, Method With <u>MVC</u></h1>
 		<h2>CRUD dan CSRF</h2>
 		<h3>Tabel Kelas</h3> <h3><a href="main.php?menu=<?php echo base64_encode(4) ?>"><i class="fa fa-plus-square" style="font-size:25px; color: blue;"> ADD DATA</i></a></h3>



 		<table border="1">
 			<tr>
 				<th>NO</th>
 				<th>ID</th>
 				<th>ISBN</th>
 				<th>JUDUL</th>
 				<th>PENULIS</th>
 				<th>TINDAKAN</th>
 			</tr>
 			<?php 

 				//decision validasi variabel
 				if (isset($GetBuku)) {
 					$no = 1;
 					foreach ($GetBuku as $Get) {
 						?>
 						<tr>
 							<td><?php echo $no++; ?></td>
 							<td><?php echo $Get['id_buku']; ?></td>
 							<td><?php echo $Get['isbn']; ?></td>
 							<td><?php echo $Get['judul']; ?></td>
 							<td><?php echo $Get['penulis']; ?></td>
 							
 							
 							 <!-- //untuk tindakan -->
 							 <td>
 							 	<a href="main.php?menu=<?php echo base64_encode(7) ?>&id_buku=<?php echo base64_encode($Get['id_buku']) ?>"><i class="fa fa-eye" style="font-size:24px; color: green;"> </i></a>
 							 	<a> | </a>
 							
 							 	<button onclick="konfirmasi('<?php echo base64_encode($Get['id_buku']) ?>')"><i class="fa fa-trash" style="font-size:25px; color: red;"> </i></button>
 							 </td>

 						</tr>
 						<?php 
 					}
 				}
 			 ?>
 		</table>

 		<script>
 			function konfirmasi(id_kelas) {
 				var a = id_kelas;
 				if (window.confirm('Apakah Data Ini Akan Dihapus??')) {
 					window.location.href='../config/routes.php?function=delete_buku&id_buku=' + a;
 				};
 			}

 		</script>