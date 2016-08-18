<?php include("../lib/mysql.php"); ?>
<?php 
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql = "delete from taikhoan where matk=".$id;
        $conn->query($sql);
        header("location:control.php");
        $conn->close();
    }
?>