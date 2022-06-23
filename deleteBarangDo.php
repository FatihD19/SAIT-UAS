<?php

$id = $_GET['id'];
include("config.php");
//delete data di database local
$sql = "delete from tb_item where id=$id";
if (mysqli_query($link, $sql)) {
   echo "<center>Record has been deleted successfully in local database!<br>";
} else {
   echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
mysqli_close($link);

//Pastikan sesuai dengan alamat endpoint dari REST API di ubuntu
$url='http://192.168.1.100/my_store/getApi.php?id='.$id.'';


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
// pastikan method nya adalah delete
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
$result = json_decode($result, true);

curl_close($ch);

//var_dump($result);
// tampilkan return statusnya, apakah sukses atau tidak
print("<center><br>status :  {$result["status"]} "); 
print("<br>");
print("message :  {$result["message"]} "); 
 //
echo "<br>Sukses menghapus data di ubuntu server !";
echo "<br><a href=Barang.php> OK </a>";

?>