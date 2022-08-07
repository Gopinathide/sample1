<?php
  include('../includes/connect.php');
  if(isset($_POST['insert_product'])){
    $product_title=$_POST[ 'product_title'];
    $description=$_POST['description'];
    $keywords=$_POST['keyword'];
    $product_category=$_POST['product_category'];
    $product_brands=$_POST['product_brands'];
    $product_price=$_POST['product_price'];
    $product_status='true';
    // accessing images
    $product_image1=$_FILES['product_image1']['name'];

    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $quantity=$_POST['product_quantity'];
   
// checking empty condition
        if($product_title=='' or $product_price=='' or $description==''  ){
        echo "<script>alert('Please fill all the available fields')</script>";
        exit();
        }
        else{

            move_uploaded_file($temp_image1,"./product_images/$product_image1");
       
        // insert query
        $insert_products="insert into `products` (product_name,product_description,product_keywords,
        category_id,brand_id,product_image,
        product_price,quantity, date,status) values ('$product_title','$description',' $keywords',
        '$product_category','$product_brands','$product_image1','$product_price','$quantity',NOW(),'$product_status')";
        if(mysqli_query($con,$insert_products))
        {
            echo "<script>alert('Product has been added Successfully') </script>";
        }
        }

    }
?>

<h1 class="text-center">Insert Products</h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_title" class="form-label">Product name</label>
        <input type="text" name="product_title" id="product_title" class="form-control"
        placeholder="Enter product name" autocomplete="off"
        required="required">
    </div>

    <div class="form-outline mb-4 w-50 m-auto">
        <label for="description" class="form-label">Product description</label>
        <input type="text" name="description" id="description" class="form-control"
        placeholder="Enter product description" autocomplete="off"
        required="required">
    </div>

    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_keywords" class="form-label">Product Keywords</label>
        <input type="text" name="keyword" id="keyword" class="form-control"
        placeholder="Enter product keywords" autocomplete="off"
        required="required">
    </div>

    <div class="form-outline mb-4 w-50 m-auto">
        <select name="product_category" id="" class="form-select">
            <option value="">Select a Category</option>
             <?php
                    $select_cats="Select * from `categories`";
                    $result_cats=mysqli_query($con,$select_cats);
                    while($row=mysqli_fetch_assoc($result_cats))
                    {
                        $category_title=$row['category_title'];
                        $category_id=$row['category_id'];
                        echo "<option value='$category_id'>$category_title</option>";
                    }
            ?> 
        </select>
   </div>
     
    <div class="form-outline mb-4 w-50 m-auto">
        <select name="product_brands" id="" class="form-select">
            <option value="">Select a Brand</option>
            <?php
                    $select_cats="Select * from `brands`";
                    $result_cats=mysqli_query($con,$select_cats);
                    while($row=mysqli_fetch_assoc($result_cats))
                    {
                        $brand_title=$row['brand_title'];
                        $brand_id=$row['brand_id'];
                        echo "<option value='$brand_id'>$brand_title</option>";
                    }
            ?> 
        </select>
   </div>
 
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_image1" class="form-label">Product image 1</label>
        <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
    </div>

    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_price" class="form-label">Product price</label>
        <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required">
   </div>

   <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_quantity" class="form-label">Quantity</label>
        <input type="text" name="product_quantity" id="product_quantity" class="form-control" placeholder="Number of Products" autocomplete="off" required="required">
   </div>

   <div class="form-outline mb-4 w-50 m-auto">
        <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Products">
   </div>

</form>