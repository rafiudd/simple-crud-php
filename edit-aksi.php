<?php

include 'konek.php';
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$fullname = $_POST['fullname'];

$sql_update=("UPDATE users SET username='$username', password='$password', level='$level', fullname='$fullname' WHERE id='$id'");

mysqli_query($conn,$sql_update)or die(mysqli_error($conn));

echo '<script>
alert("Data Berhasil Diedit");
location="index.php?"
</script>';

?>
