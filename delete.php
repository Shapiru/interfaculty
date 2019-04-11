<?php
$conn=mysqli_connect("localhost","root","","transfer")or die (mysqli_error($conn));
$id=$_GET['id'];
$delete_query=mysqli_query($conn,"delete from admin where id=$id")or die(mysqli_error($conn));
if($delete_query){
    echo "<script>window.alert('1 record deleted')</script>";
    header("refresh:0;url=tabledata.php");
}else{
    echo"<script>window.alert('failed')</script>";
    header("refresh:0;url=tabledata.php");
}


?> 