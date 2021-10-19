<?php 

//class CRUD buku
class controller_buku{

	//property
	var $db;
	var $con;
	var $query;
	var $data; 
	var $result;

	var $Mbuku;

	var $id_buku;
	var $isbn;
	var $judul;
	var $penulis;
	var $tgl_terbit;



	//method main variabel
		function __construct()
		{
			// membuat objek dari class module pegawai
			include '../models/model_buku.php';
			$this->Mbuku = new model_buku();
		}



		//method memasukan data ke dalam tabel
		function POSTData ($id_buku,$isbn,$judul,$penulis)
		{
			//perintah POST data
			$this->Mbuku->POST($id_buku,$isbn,$judul,$penulis);
		}



		//method untuk mengambil semua data dari table
		function GetData_All()
		{
			//perintah GET data
			return $this->Mbuku->GET();
		}



		//method untuk mengambil data seleksi dari tabel
		function GetData_Where($id_buku)
		{
			//perintah get data where
			return $this->Mbuku->GET_Where($id_buku);
		}



		//method memasukan data ke dalam tabel
		function PUTData($id_buku,$isbn,$judul,$penulis)
		{
			//perintah PUT data
			$this->Mbuku->PUT($id_buku,$isbn,$judul,$penulis);
		}



		//method menghapus data dari table
		function DELETEData($id_buku)
		{
			//perintah delete data
			$this->Mbuku->DELETE($id_buku);
		}

		
}

 ?>