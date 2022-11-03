<?php include 'Navbar.php'; ?>
<?php include  'Connection.php'; ?>

<!-- INSERT WORK -->

<?php if(isset($_POST['button'])){
    $custName = $_POST['Fname'];
    $custorder = $_POST['Lname'];
    $location = $_POST['Address'];
    
    
    $Country =  $_POST['Country'];
    $City = $_POST['City'];
   

    $query =  "insert into onlinefood(custname,custorder,location,Country,City) values('$custName','$custorder','$location','$Country','$City')";

    $res =  mysqli_query($con,$query);

    if($res){
        echo  "<script>alert('Data Inserted');window.location.href = 'ViewData.php'</script>"; 
    }
    else{
        echo "<script>alert('Data Insertion Failed')</script>";
    }
}?>

<!-- update Work -->
<?php if (isset($_POST['update'])) {
   $custName = $_POST['custname'];
   $custorder = $_POST['custorder'];
   $location = $_POST['location'];
   
   $Country =  $_POST['Country'];
   $City = $_POST['City'];
  
   $fileProp = $_FILES['uploaded'];

   //    echo '<pre>';
   //    print_r($fileProp);
   //    echo '</pre>';

  $FileName = $_FILES['uploaded']['name'];
  $FileType = $_FILES['uploaded']['type'];
  $FiletempLoc = $_FILES['uploaded']['tmp_name'];
  $FileSize= $_FILES['uploaded']['size'];

  $Folder = "Images/";

   if(
       strtolower($FileType) == 'uplode/online.jpg'||
       strtolower($FileType) == 'image/jpg'||
       strtolower($FileType) == 'image/jpeg'
      ) 
      if($FileSize <= 1000000){
    
        $Folder = $Folder.$FileName; 

        $update = "update onlinefood set custname = '$custName ' ,'custorder = ' $custorder ',location = '$location',
    
     Country = '$Country',City = '$City' where custid = '$Custid','IMG' = '$Folder'";
     $res = mysqli_query($con,$update);
           
     if($res){
      echo "<script>alert('Data updated successfully!');window.location.href = 'ViewData.php'</script>";
      move_uploaded_file($FiletempLoc,$Folder);
      echo "<a href='ViewData.php'>Insert more Records</a>";

     
     }
    else{
        echo "<script>alert('Data Insert Failed');window.location.href = 'ViewData.php'</script>";
       }
    }

    else{
        echo "<script>alert('Image Size should be less than 1 MB');window.location.href = 'ViewData.php'</script>";
    }
   
   
   
   else{
    echo "<script>alert('Image Format Should not be supported');window.location.href = 'ViewData.php'</script>";
   }

}
?>