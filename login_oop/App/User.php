<?php
include_once 'Config/DbConnection.php';


class crud extends DbConnection{

	public function tampil(){
		$data = mysqli_query($this->connection, "SELECT * from mahasiswa INNER JOIN kelas ON mahasiswa.kode_kelas = kelas.id_kelas");
	    
	    while ($d = mysqli_fetch_array($data)) {
	      $hasil[] = $d;
	    }
    	
    	return $hasil;
	}

	public function input($nama, $nim, $kode_kelas){
		 mysqli_query($this->connection, "INSERT INTO mahasiswa (nama, nim, kode_kelas) VALUE ('$nama', '$nim', '$kode_kelas')");
		}

	public function hapus($id){
		$query = mysqli_query($this->connection,"delete from mahasiswa where id='$id'");
	}

	public function edit($id){
		$query = mysqli_query($this->connection,"select * from mahasiswa where id='$id'");
		return $query->fetch_array();
	}

	public function update($id, $nama, $nim, $kode_kelas){
		$query = mysqli_query($this->connection,"update mahasiswa set nama='$nama',nim='$nim',kode_kelas='$kode_kelas' where id='$id'");
	}

	public function tampil_kelas(){
		$data = mysqli_query($this->connection, "SELECT * from kelas");
	    
	    while ($d = mysqli_fetch_array($data)) {
	      $hasil[] = $d;
	    }
    	
    	return $hasil;
	}


}


class crud_kelas extends DbConnection {

	public function tampil(){
		$data = mysqli_query($this->connection, "SELECT * from kelas");
	    
	    while ($d = mysqli_fetch_array($data)) {
	      $hasil[] = $d;
	    }
    	
    	return $hasil;
	}

	public function input($nama_kelas){
		 mysqli_query($this->connection, "INSERT INTO kelas (nama_kelas) VALUE ('$nama_kelas')");
		}

	public function hapus($id_kelas){
		$query = mysqli_query($this->connection,"DELETE from kelas where id_kelas='$id_kelas'");
	}

	public function edit($id_kelas){
		$query = mysqli_query($this->connection,"SELECT * from kelas where id_kelas='$id_kelas'");
		return $query->fetch_array();
	}

	public function update($id_kelas, $nama_kelas){
		$query = mysqli_query($this->connection,"UPDATE kelas set nama_kelas='$nama_kelas'where id_kelas='$id_kelas'");
	}

}
 
class User extends DbConnection{

    public function __construct(){

        parent::__construct();
    }
    
    public function check_login($username, $password){

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $query = $this->connection->query($sql);

        if($query->num_rows > 0){
            $row = $query->fetch_array();
            return $row['id'];
        }
        else{
            return false;
        }
    }
        
    public function details($sql){

        $query = $this->connection->query($sql);
        
        $row = $query->fetch_array();
            
        return $row;       
    }
    
    public function escape_string($value){
        
        return $this->connection->real_escape_string($value);
    }
}