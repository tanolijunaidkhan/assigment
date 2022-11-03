<?php include 'Navbar.php'; ?>
<?php include 'connection.php'; ?>

<?php
$ID = $_GET['id'];
$query = "select * from onlinefood where Custid  = $ID";
$getData = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($getData);
// $checkEdit = $res['Courses'];
// $checkBox = explode(',', $checkEdit);
// print_r($checkBox);
?>

<div  id  = "main_div">
    <div id = "div1">
    <form action="Insert.php" method = "post" enctype="multipart/form-data">

<div class = "col-lg-6 container">

        <div class="d-flex flex-column align-items-center text-center  user-profile-image">

        <input class="form-control" type="file" id="Pro_Image" name="uploaded" style="visibility: hidden;">

            <img class="mt-5" style="width:350px;" src="images/noImg.jpg" id="UserImage">

            <div class="upload-photo text-center ">
                <br />
                <img src="images/camera.png" alt="cameraImg"  class = "img-responsive" >
               
            </div>
        </div>
</div>

<!-- <input type="submit" value = "submit" class = "btn btn-primary mt-5 ml-5" style = "width:300px;" name = "U"> -->

</form>
</div>

<script>
        $(document).ready(function () {


            $(".upload-photo").click(function () {
               $("#Pro_Image").trigger('click')
            })

            $("#UserImage").click(function () {
                $("#Pro_Image").trigger('click')
            })


            $("#Pro_Image").change(function () {
                if (this.files && this.files[0]) {
                    var fileReader = new FileReader();
                    fileReader.readAsDataURL(this.files[0]);
                    fileReader.onload = function (x) {
                        $("#UserImage").attr('src', x.target.result);
                    }
                }
            })
        })
    </script>

<?php if (isset($_POST['button'])) {
        // $FileProp = $_FILES['uploaded'];
        // echo '<pre>';
        // print_r($FileProp);
        // echo '</pre>';
        $FileName = $_FILES['uploaded']['name'];
        $FileType = $_FILES['uploaded']['type'];
        $FiletempLoc = $_FILES['uploaded']['tmp_name'];
        $FileSize = $_FILES['uploaded']['size'];

        $folder = 'images/';

        if (
            strtolower($FileType) == 'image/png' ||
            strtolower($FileType) == 'image/jpg' ||
            strtolower($FileType) == 'image/jpeg'
        ) {
            if ($FileSize <= 1000000) {
                //1MB

                $folder = $folder . $FileName; //   images/1.png

                $query = "insert into onlinefood (IMG) values ('$FileName')";
                $res = mysqli_query($con, $query);

                if ($res) {
                    echo "<script>alert('Insert Successfully!')</script>";
                    move_uploaded_file($FiletempLoc, $folder);
                } else {
                    echo "<script>alert('Insert Failed!')</script>";
                }
            } else {
                echo "<script>alert('Size Should be less than 1 MB')</script>";
            }
        } else {
            echo "<script>alert('Image Formate should not be supported!!')</script>";
        }
    } ?>

</div>
    <div id = "div2">
    <form action="Insert.php" method = "post">
  <div class="container">
    <div class="justify-content-center">
        <div class="card">
          <div class="row g-0">
            <div class="col-xl-12">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">ONLINE FOOD</h3>
                <p  class = "para1">Please fill the order form</p>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <label class="form-label">C_NAME</label>
                      <input type="text" name = "Fname" class="form-control"  placeholder="Enter Your coustomer Name" required>
                      
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <label class="form-label" >C_ORDER</label>
                      <input type="text" name = "Lname" class="form-control"  placeholder="Enter Your Order" required>
                     
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label">Location</label>
                  <input type="text" name = "Address" class="form-control"  placeholder="Enter Your Location" required>
                  
                </div>

     
    </div>

    <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <label class="form-label">Country</label>
                      <input type="text" name = "Country" class="form-control" placeholder="Enter Your Country" required>
                      
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <label class="form-label" >City</label>
                      <input type="text" name = "City" class="form-control"  placeholder="Enter Your City" required>
                      
                    </div>
                  </div>
                </div>


                <div class="d-flex justify-content-center pt-3">
                  <button type="update" class="btn btn-warning" name ="button">update</button>
                </div>

              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</form>
    </div>
</div>
</div>
