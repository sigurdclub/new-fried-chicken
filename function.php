<?php 
date_default_timezone_set("Asia/makassar");
//koneksi ke database
$conn=mysqli_connect("localhost","root","", "chicken_db");

if(!isset($conn)){
    echo "koneksi gagal!!!";
}


function query($query){
  global $conn;
  $result=mysqli_query($conn,$query) or die (mysqli_error($conn));
  $rows=[];

  foreach($result as $row){
    $rows[]=$row;
  }
  return $rows;
}


function tambahAyam($data){
  global $conn;
  $ayam=$data["nama_ayam"];
  $stok=$data["stok"];
  $size=$data["size"];
  $harga=$data["harga"];
  
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $tmp_file =$_FILES['gambar']['tmp_name'];

  $ext=pathinfo($nama_file,PATHINFO_EXTENSION);
  $nama_file_baru = uniqid().'.'.$ext;
  //cek tipe file
  if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
    
    $folder =__DIR__."/img/".$nama_file_baru ;
    //upload jika lolos pengecekan
    move_uploaded_file($tmp_file, $folder);
  }

  $query="INSERT INTO ayam VALUES ('','$ayam','$stok', '$harga', '$size' ,'$nama_file_baru')";
  mysqli_query($conn,$query);//jalankan query
  return $query;
}

function updateAyam($data){
  global $conn;
  $id=mysqli_real_escape_string($conn, $_POST["id"]);
  $ayam=mysqli_real_escape_string($conn, $data["nama_ayam"]);
  $size=mysqli_real_escape_string($conn, $data["size"]);
  $harga=mysqli_real_escape_string($conn, $data["harga"]);
  $stok=mysqli_real_escape_string($conn, $data["stok"]);

  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $tmp_file =$_FILES['gambar']['tmp_name'];

  $ext=pathinfo($nama_file,PATHINFO_EXTENSION);
  $nama_file_baru = uniqid().'.'.$ext;
  //cek tipe file
  if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
    
    $folder =__DIR__."/img/".$nama_file_baru ;
    //upload jika lolos pengecekan
    move_uploaded_file($tmp_file, $folder);
  }
  $query="UPDATE ayam SET nama_ayam='$ayam', stok='$stok', harga='$harga', size='$size', gambar='$nama_file_baru' 
                            WHERE id='$id' ";
  // var_dump($query);die();
  mysqli_query($conn,$query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapus($id){
  global $conn;
  $id = htmlspecialchars($_GET["id"]);
  $file=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM ayam WHERE id=$id "));
  $gambar = $file["gambar"];
  
  if(file_exists("../img/$gambar")){
    unlink('../img/'.$gambar);
    
    $query = "DELETE FROM ayam WHERE id=$id ";
    // var_dump($query);die;
    mysqli_query($conn,$query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
  }
  
}

function pesan($data){
  global $conn;

  $tanggal=date('Y/m/d H:i:s');
  $harga=$_GET["harga"];
  $ayam=$_GET["ayam"];
  $nama     = htmlspecialchars( $data["nama_pembeli"] );
  $jumlah  = htmlspecialchars( $data["jumlah_pesanan"] );
  $size  = htmlspecialchars( $data["size"] );
  $total=$jumlah*$harga;
  // var_dump($total);die;
  $query = "INSERT INTO orderan_ayam VALUES ('', '$nama', '$ayam', '$jumlah','$size', '$total','$tanggal')";
  // var_dump($query);die;
  mysqli_query($conn, $query)or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);


}


?>