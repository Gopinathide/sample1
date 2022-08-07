<?php
      include('../includes/connect.php');
      include('../functions/common_function.php');
    
?>
<!DOCTYPE html>
<html lang = "en" >
<head >
    <meta charset = "UTF-8" >
    <meta http - equiv = "X-UA-Compatible " content = "IE-edge " >
    <meta name = "viewport" content ="width=device-width,initial-scale=1.0">
    
    <style>
          .img
        {
            width:50px;
            height:50px;
            object-fit: contain;
        }
        </style>
</head >
<body>

<div class="container">
            <div class="row">
               <form action="" method="post" >
                   
                <table class="table table-bordered text-center" style="width:1000px;">
                   
                  <tbody>
                      <?php
                               
                              global $con;
                              $cart_query="Select * from `products`";
                              $result=mysqli_query($con,$cart_query);
                              $result_count=mysqli_num_rows($result);
                              $result_count=mysqli_num_rows($result);
                              if($result_count>0)
                              {
                                    echo" <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Product Image</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                          
                                            <th>Edit</th>
                                            
                                        </tr>
                                        </thead>";
                                        while($row=mysqli_fetch_array($result))
                                        {
                                            $product_id=$row['product_id'];
                                            $select_products="Select * from `products`";
                                            $result_products=mysqli_query($con,$select_products);
                                           
                                            $product_title=$row['product_name'];
                                            $product_image=$row['product_image'];
                                            $product_values=$row['product_price']; 
                                            $quantity=$row['quantity'];
                                            
                                            
                                    ?>
                                        <tr>
                                        <td><?php echo"$product_title"?></td>
                                        <td><img src="../admin/product_images/<?php echo $product_image ?>" alt="" class="img"></td>
                                        <td><?php echo"$quantity" ?></td>
                                        <?php
                                        $get_ip_add = getIPAddress();
                                       
                                           
     
                                            ?>
                                            <td><?php echo"$product_values"?></td>
                                            
                                           
                                            <td>
                    
                                           <?php
                                            echo"<a href='edit_product.php?ep=$product_id' class='btn btn-info my-2'>Edit Product</a>"
                                            ?>
                                            </td>
                                            </tr>
                                            
                                                <?php }}
                                               

                                  else
                                  {
                                     echo"<h2 class='text-center text-danger'>Stock is empty</h2>";
                                  }
                                 

                            
                            ?>
                  </tbody>

                </table>
               </form>

               <?php
              
            

         ?>
            </div>
</div>
</body>
</html>