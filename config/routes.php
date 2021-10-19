<?php 

include 'csrf.php';
include '../controller/controller_buku.php';
// include '../controller/controller_siswa.php';
// include '../controller/controller_peminjaman.php';

//membuat objek dari class



//membuat variabel dari GET URL
 $function = $_GET['function'];

//decision variabel create_buku
if ($function == "create_buku") {
	
	$db_buku = new controller_buku();

	// validasi token csrf
	if (validation() == true) {
		$db_buku->POSTData(
			$_POST['id_buku'],
			$_POST['isbn'],
			$_POST['judul'],
			$_POST['penulis']
			
		);
	}

	header("location:../Views/main.php?menu=".base64_encode(1));
	}

	//decision variabel PUT_buku
		elseif ($function == "put_buku") {

		$db_buku = new controller_buku();
		//validasi token csrf
		if (validation() == true) {
			$db_buku->PUTData(
			$_POST['id_buku'],
			$_POST['isbn'],
			$_POST['judul'],
			$_POST['penulis']
			);

		}
		header("location:../Views/main.php?menu=".base64_encode(1));
	}

	//decision variabel delete_buku
	elseif ($function == "delete_buku") {
		$db_buku = new controller_buku();
		$id_buku = base64_decode($_GET['id_buku']);
		$db_buku->DELETEData($id_buku);
		header("location:../Views/main.php?menu=".base64_encode(1));
	}else{echo "error";}



	//kelas
	if ($function == "create_siswa") {
	$db_kelas = new controller_siswa();
	// validasi token csrf
	if (validation() == true) {
		$db_siswa->POSTData(
			$_POST['id_siswa'],
			$_POST['nisn'],
			$_POST['nis'],
			$_POST['nama'],
			$_POST['kelas']
		);
	}

	    header("location:../Views/main.php?menu=".base64_encode(1));
	}

	//decision variabel PUT_kelas
	elseif ($function == "put_siswa") {
		
		$db_siswa = new controller_siswa();
		//validasi token csrf
		if (validation() == true) {
			$db_kelas->PUTData(
			$_POST['id_siswa'],
			$_POST['nisn'],
			$_POST['nis'],
			$_POST['nama'],
			$_POST['kelas']
		);

		}
		    header("location:../Views/main.php?menu=".base64_encode(1));
	}

	//decision variabel delete_kelas
	elseif ($function == "delete_siswa") {
		$db_siswa = new controller_siswa();
		$id_siswa = base64_decode($_GET['id_siswa']);
		$db_siswa->DELETEData($id_siswa);
		header("location:../Views/main.php?menu=".base64_encode(1));
	}else{echo "error";}

	

	//spp
	if ($function == "create_peminjaman") {
	$db_peminjaman = new controller_peminjaman();
	//validasi token csrf
	// if (validation() == true) {
		$db_peminjaman->POSTData(
			$_POST['id_peminjaman'],
			$_POST['id_buku'],
			$_POST['id_siswa'],
			$_POST['tanggal_pinjam']
		);
	// }

	header("location:../Views/main.php?menu=".base64_encode(4));
	}

	//decision variabel PUT_spp
	elseif ($function == "put_spp") {
		
		$db_spp = new controller_spp();
		//validasi token csrf
		// if (validation() == true) {
			$db_spp->PUTData(
			$_POST['id_peminjaman'],
			$_POST['id_buku'],
			$_POST['id_siswa'],
			$_POST['tanggal_pinjam']
		);

		// }
		header("location:../Views/main.php?menu=".base64_encode(4));
	}

	//decision variabel delete_spp
	elseif ($function == "delete_peminjaman") {
		$db_peminjaman = new controller_peminjaman();
		$id_peminjaman = base64_decode($_GET['id_peminjaman']);
		$db_spp->DELETEData($id_spp);
		header("location:../Views/main.php?menu=".base64_encode(4));
	}else{echo "error";}
