<?php include 'Navbar.php'; ?>
<?php include 'connection.php'; ?>



<?php
$query = 'select * from onlinefood';
($res = mysqli_query($con, $query)) or die('Incorrect Querry');
// $data = mysqli_fetch_assoc($res);
// echo '<pre>';
// print_r($data);
// echo '</pre>';

$rowCount = mysqli_num_rows($res);

if ($rowCount > 0) { ?>

    <table class = "container table table-bordered mt-5">

    <tr>
            <th>coustid</th>
            <th>Coustname</th>
            <th>coustorder</th>
            <th>location</th>
            <th>Country</th>
            <th>City</th>
            <th>Image</th>
            <th>edit</th>
            <th>delete</th>
        </tr>

        <?php while ($data = mysqli_fetch_assoc($res)) {
            echo '<tr>'; ?>

                        <td><?= $data['custid'] ?></td>
                        <td> <?= $data['custname'] ?></td>
                        <td><?= $data['custorder'] ?></td>
                        <td><?= $data['location'] ?></td>
                        
                        <td><?= $data['Country'] ?></td>
                        <td><?= $data['City'] ?></td>  
                      
                        
                        <td> <img src="<?=$data['custname'];?>" width = > </td>
            <td><a href="Edit.php?id=<?=$data['custid']?>" >Edit</a></td>
            <td><a href="ViewData.php?Delid=<?=$data['custid']?>" onclick =
     "return confirm('Are you sure you want to delete?');return false;">Delete</a></td>



        <?php echo '</tr>';
        } ?>
    
    
    </table>
<?php } else{ echo '<p>No Records Found</p>'; }?>



<?php

error_reporting(0);

$DelID = $_GET['Delid'];

$query = "delete from onlinefood where custid   = $DelID";

$res = mysqli_query($con, $query);

if ($res) {
    echo "<script>alert('Data Deleted!!');window.location.href = 'ViewData.php';</script>";
}

?>