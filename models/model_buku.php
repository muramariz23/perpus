<?php 

//class model buku (CRUD buku)
class Model_buku{

	//property
	var $db;
	var $con;
	var $query;
	var $data; 
	var $result;

	var $id_buku;
	var $isbn;
	var $judul;
	var $penulis;
	var $tgl_terbit;



	//method main variabel
		function __construct()
		{
			//membuat objek dari buku database
			include '../config/database.php';
			$this->db = new database();
			$this->con = $this->db->connect();
		}



		//method memasukan data ke dalam table
		function POST ($id_buku,$isbn,$judul,$penulis)
		{
			
			mysqli_query($this->con,"insert into buku values(
				'".$id_buku."',
				'".$isbn."',
				'".$judul."',
				'".$penulis."'
				)");
		}



		//method mengambil semua data dari tabel
		function GET()
		{
			//perintah Get data
			$this->query=mysqli_query($this->con,"select * from buku");
			while ($this->data=mysqli_fetch_array($this->query)) {
				$this->result[]=$this->data;
			}
			return $this->result;
		}



		//method untuk mengambil data seleksi dari tabel
		function GET_Where($id_buku)
		{
			//perintah get where data
			$this->query=mysqli_query($this->con,"select * from buku where id_buku='$id_buku'");
			while($this->data=mysqli_fetch_array($this->query))
			{
				$this->result[]=$this->data;
			}
			return $this->result;
		}



		//method memasukan data kedalam tabel
		function PUT ($id_buku,$isbn,$judul,$penulis)
		{
			//perintah PUT data
			mysqli_query($this->con,"update buku set
				id_buku='".$id_buku."',
				isbn='".$isbn."',
				judul='".$judul."',
				penulis='".$penulis."'
				where id_buku='".$id_buku."'
				");
		}



		//method menghapus data dari table
		function DELETE ($id_buku)
		{
			//perintah DELETE data
			mysqli_query($this->con,"delete from buku where id_buku='$id_buku'");
		}

}




 ?>