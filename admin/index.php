
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
<body>
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
                   <button><a href="index.php?view_orders" class="nav-link text-light bg-info my-1">Orders</a></button>
                   <button><a href="index.php?view_corder" class="nav-link text-light bg-info my-1">Delivered Order</a></button>
                   <button><a href="index.php?view_user" class="nav-link text-light bg-info my-1">List Users</a></button>
                   <button><a href="index1.php" class="nav-link text-light bg-info my-1">Logout</a></button>
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
                if(isset($_GET['view_corder']))
                {
                    include('view_completedorder.php');
                }
                if(isset($_GET['view_user']))
                {
                    include('view_user.php');
                }
            ?>
        </div>


    </div>
    
</body>
</html>