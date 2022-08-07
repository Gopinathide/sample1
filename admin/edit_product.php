<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <style>
        .admin_image{
            width: 100px;
            object-fit: contain;
        }
        </style>
</head>

<?php

include('../includes/connect.php');


$product_id=$_GET['ep'];

$fetch="Select * from `products` where Product_id=$product_id";
$fetchs=mysqli_query($con,$fetch);
$fetchss=mysqli_fetch_assoc($fetchs);
$pname=$fetchss['product_name'];
$pdes=$fetchss['product_description'];
$pkey=$fetchss['product_keywords'];
$pcat=$fetchss['category_id'];
$pbrand=$fetchss['brand_id'];
$pimg=$fetchss['product_image'];
$pprice=$fetchss['product_price'];
$pquan=$fetchss['quantity'];


?>

<h1 style="font-family:'Times New Roman', Times, serif; font: size 150px; text-align:center ">SWATHI ELECRONICS</h1>
    <br>
    <h1 style="font-family:'Times New Roman', Times, serif; font: size 100px; text-align:center ">ADMIN PAGE</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
               <div class="p-3">
                   
                       <img src="/images/1.jpg" alt="" class="admin_image">
                       <p class="text-light text-center">SWATHI ELECTRONICS</p>
                    
               </div>
               <div class="button text-center">
                   <button class="my-3"><a href="index.php?insert_products" class="nav-link text-light bg-info my-1">Insert Products</a>
                   </button>
                   <button><a href="index.php?view_products" class="nav-link text-light bg-info my-1">View products</a></button>
                   <button><a href="index.php?insert_categories" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                   <button><a href="index.php?view_categories" class="nav-link text-light bg-info my-1">View Categories</a></button>
                   <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brand</a></button>
                   <button><a href="index.php?view_brands" class="nav-link text-light bg-info my-1">View Brand</a></button>
                   <button><a href="index.php?view_orders" class="nav-link text-light bg-info my-1">All orders</a></button>
                   <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
                   <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
               </div>
                
            </div>
        </div>

        <div class="container my-5">
            <?php
                if(isset($_GET{'insert_categories'}))
                {
                    include('insert_categories.php');
                }
                if(isset($_GET{'insert_brand'}))
                {
                    include('insert_brand.php');
                }
                if(isset($_GET{'insert_products'}))
                {
                    include('insert_products.php');
                }
                if(isset($_GET['view_products']))
                {
                    include('view_products.php');
                }
                if(isset($_GET['view_categories']))
                {
                    include('view_categories.php');
                }
                if(isset($_GET['view_brands']))
                {
                    include('view_brands.php');
                }
                if(isset($_GET['view_orders']))
                {
                    include('view_orders.php');
                }
            ?>
        </div>


    </div>

<h1 class="text-center">Edit Details</h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_title" class="form-label">Product name</label>
        <input type="text" name="product_title" id="product_title" class="form-control"
        placeholder="Enter product name" autocomplete="off" value="<?php echo"$pname"; ?>"
        required="required">
    </div>

    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_title" class="form-label">Product Image</label><br>
        <img src="../admin/product_images/<?php echo $pimg ?>" alt="" class="img"><br>
        <input type="file" name="pimage" id="pimage" class="form-control "
        placeholder="Upload your image" required="required">
    </div>


    <div class="form-outline mb-4 w-50 m-auto">
        <label for="description" class="form-label">Product description</label>
        <input type="text" name="description" id="description" class="form-control"
        placeholder="Enter product description" autocomplete="off" value="<?php echo"$pdes"; ?>"
        required="required">
    </div>

    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_keywords" class="form-label">Product Keywords</label>
        <input type="text" name="keyword" id="keyword" class="form-control" value="<?php echo"$pkey" ?>"
        placeholder="Enter product keywords" autocomplete="off"
        required="required">
    </div>

   

    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_price" class="form-label">Product price</label>
        <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required" value="<?php echo"$pprice" ?>">
   </div>

   <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_quantity" class="form-label">Quantity</label>
        <input type="text" name="product_quantity" id="product_quantity" class="form-control" placeholder="Number of Products" autocomplete="off" required="required" value="<?php echo"$pquan" ?>">
   </div>

   <div class="form-outline mb-4 w-50 m-auto">
        <input type="submit" name="update" class="btn btn-info mb-3 px-3" value="Update">
   </div>

</form>

<?php
 
  if(isset($_POST['update'])){
    $product_title=$_POST[ 'product_title'];
    $description=$_POST['description'];
    $keywords=$_POST['keyword'];
    $product_price=$_POST['product_price'];
    $quantity=$_POST['product_quantity'];
    $pimage=$_FILES['pimage']['name'];
    $pimagetmp=$_FILES['pimage']['tmp_name'];
  
    move_uploaded_file($pimagetmp,"./product_images/$pimage");
   
// checking empty condition
        if($product_title=='' or $product_price=='' or $description=='' or $keywords=='' or $quantity=='' ){
        echo "<script>alert('Please fill all the available fields')</script>";
        exit();
        }
        else{

           
       
        // insert query
        $update_products="UPDATE `products` SET `product_name`='$product_title',`product_image`='$pimage',
        `product_description`='$description',`product_keywords`='$keywords',`product_price`='$product_price',`quantity`='$quantity' WHERE product_id=$product_id";
        if(mysqli_query($con,$update_products))
        {
            echo "<script>alert('Product has been updated Successfully') </script>";
            echo"<script>window.open('index.php','_self')</script>";
        }
        }

    }
?>



</html>
