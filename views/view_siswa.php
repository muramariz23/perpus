<?php 

include '../controller/controller_kelas.php';
// membuat objek dari class kelas
$kelas = new controller_kelas();
$GetKelas = $kelas->GetData_All();

//mengecek di objek $kelas ada berapa banyak property
//echo var_dump($kelas);

 ?>
 		<!-- icon tugas pertemuan 7 -->
 		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 		<!-- css Bootstrap -->
 		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


 		<h1>OOP - Class, Objek, Property, Method With <u>MVC</u></h1>
 		<h2>CRUD dan CSRF</h2>
 		<h3>Tabel Kelas</h3> <h3><a href="main.php?menu=<?php echo base64_encode(6) ?>"><i class="fa fa-plus-square" style="font-size:25px; color: blue;"> ADD DATA</i></a></h3>



 		<table border="1">
 			<tr>
 				<th>NO</th>
 				<th>ID KELAS</th>
 				<th>NAMA KELAS</th>
 				<th>KOMPETENSI KEAHLIAN</th>
 				<th>TINDAKAN</th>
 			</tr>
 			<?php 

 				//decision validasi variabel
 				if (isset($GetKelas)) {
 					$no = 1;
 					foreach ($GetKelas as $Get) {
 						?>
 						<tr>
 							<td><?php echo $no++; ?></td>
 							<td><?php echo $Get['id_kelas']; ?></td>
 							<td><?php echo $Get['nama_kelas']; ?></td>
 							<td><?php echo $Get['kompetensi_keahlian']; ?></td>
 							
 							 <!-- //untuk tindakan -->
 							 <td>
 							 	<a href="main.php?menu=<?php echo base64_encode(7) ?>&id_kelas=<?php echo base64_encode($Get['id_kelas']) ?>"><i class="fa fa-eye" style="font-size:24px; color: green;"> </i></a>
 							 	<a> | </a>
 							
 							 	<button onclick="konfirmasi('<?php echo base64_encode($Get['id_kelas']) ?>')"><i class="fa fa-trash" style="font-size:25px; color: red;"> </i></button>
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
 					window.location.href='../config/routes.php?function=delete_kelas&id_kelas=' + a;
 				};
 			}

 		</script>