<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
   <!-- //for 4.ob -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <!-- //for 5.1 -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
   integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <!-- //for 4.5 -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  
   <style>
       #ques{
           min-height: 433px;
       }
    </style>

    <title>welcome to iDiscuss!-coding forum</title>
</head>

<body>
<?php include 'partials/_dbconnect.php'; ?>

    <?php include 'partials/_header.php'; ?>
   
    <!-- slider starts here-->

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner  ">
            <div class="carousel-item active ml-3">
                <!-- Tag to use in case of random unsplsh image -->
                <!-- src="https://source.unsplash.com/random/500 x 150/?'.java.'" -->
                <img src="image/slider-1.jpg" class="d-block mx-auto w-100" style="height:400px; width:100%; "
                    alt="...">
            </div>
            <div class="carousel-item ml-3">
                <img src="image/slider-2.jpg" class="d-block mx-auto w-100" style="height:400px; width:100%; "
                    alt="...">
            </div>
            <div class="carousel-item ml-3">
                <img src="image/slider-3.jpg" class="d-block mx-auto w-100" style="height:400px; width:100%; "
                    alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Cartegoroes starts here  -->
    <div class="container my-3" id="ques">
        <h2 class="text-center my-3">iDiscuss - Browse Catogories </h2>
        <div class="row my-3">
            <!-- Fetch all the categories  -->
            <?php 
            $sql = "SELECT * FROM `categories`"; 
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result)){
                // echo $row['category_id'];
                // echo $row['category_name'];
                 //src = "img/card-'$id'.jpg"//
                $id=$row['category_id'];
                $cat = $row['category_name'];
                $desc = $row["category_description"];
                echo'<div class="col-md-4">
                <div class="card my-2" style="width: 18rem;">
                   
                    <img src="https://source.unsplash.com/random/500×400/?'.$cat.',coding" class="card-img-top"style="height:200px; width:300px; " alt="image for  this category">
                    <div class="card-body ">
                        <h5 class="card-title"><a href="threadlist.php?catid='.$id.'">'.$cat.'</a> </h5>
                        <p class="card-text">'.substr($desc,0,90).'....</p>
                        <a href="threadlist.php?catid='.$id.'" class="btn btn-primary">View threads</a>
                    </div>
                </div>
            </div>';
            }
            ?>
            <!-- Use a fo loop to iterate through categories -->

        </div>
    </div>
    <!-- Category container starts here  -->
    <?php include 'partials/_footer.php'; ?>
     <!-- Optional JavaScript; choose one of the two! -->
                <!-- for bootstrap 4.0 -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

                <!-- for bootstrap 5.1 -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>          
    
</body>

</html>