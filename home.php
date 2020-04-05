<?php   session_start();  ?>
<html>
<head>
<title>მთავარი</title>
</head>
<body>
<style>
    body {
   color: #fff;
background-image: url('https://images.wallpaperscraft.com/image/lighthouse_coast_blocks_165012_1920x1080.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
    margin-top: 100px;
        text-align: center;
}
    </style>    
<?php
if(!isset($_SESSION['use']))
{
header("Location:Login.php");  
}
echo $_SESSION['use'];
echo " შესვლა წარმატებით დასრულდა";
echo "<a href='logout.php'> <br>Logout</br></a> "; 
?>
</body>
    <br>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    სურათის ასარჩევად აირჩიეთ ფაილი:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
    
</html>