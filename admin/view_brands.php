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
                              $cart_query="Select * from `brands`";
                              $result=mysqli_query($con,$cart_query);
                              $result_count=mysqli_num_rows($result);
                              $result_count=mysqli_num_rows($result);
                              if($result_count>0)
                              {
                                    echo" <thead>
                                        <tr>
                                            <th>Brand ID</th>
                                            <th>Brand Name</th>
                                            <th>Remove Brand</th>
                                            <th>Operation</th>
                                            
                                        </tr>
                                        </thead>";
                                        while($row=mysqli_fetch_array($result))
                                        {
                                            
                                            
                                            $category_title=$row['brand_title'];
                                           
                                            $category_id=$row['brand_id']; 
                                            
                                            
                                    ?>
                                        <tr>
                                        <td><?php echo"$category_id"?></td>
                                        <td><?php echo"$category_title"?></td>
                                       
                                        <?php
                                        $get_ip_add = getIPAddress();
                                       
                                           
     
                                            ?>
                                            
                                            
                                            <td><input type="checkbox" name="removeitem[]" value="<?php echo $category_id ?>"></td>
                                            <td>
                    
                                           
                                            <input type="submit" value="Remove Brand" name="remove_cart" class="bg-info px-3 py-2 border-0 mx-3">
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
              
              function remove_cart_item()
              {
                 global $con;
                 if(isset($_POST['remove_cart'])){
                 foreach($_POST['removeitem'] as $remove_id)
                 {
                    echo $remove_id;
                    $delete_query="Delete from `brands` where brand_id=$remove_id";
                    $run_delete=mysqli_query($con,$delete_query);
                    $select="Delete from `products` where brand_id=$remove_id";
                    $run=mysqli_query($con,$select);
                    if($run_delete)
                    {

                        echo"<script>alert('Brand have been removed successfuly')</script>";
                    echo "<script>window.open('index.php?view_brands','_self')</script>";
                    }
              }
           }
        }
   echo $remove_item=remove_cart_item();

         ?>
            </div>
</div>
</body>
</html>