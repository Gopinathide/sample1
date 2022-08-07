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
                              $cart_query="Select * from `user_table`";
                              $result=mysqli_query($con,$cart_query);
                              $result_count=mysqli_num_rows($result);
                              $result_count=mysqli_num_rows($result);
                              if($result_count>0)
                              {
                                    echo" <thead>
                                        <tr>
                                            <th>User_Id</th>
                                            <th>User Image</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Mobile</th>
                                            <th>Pincode</th>
                                            <th>Remove</th>
                                            <th>Operation</th>
                                            
                                        </tr>
                                        </thead>";
                                        while($row=mysqli_fetch_array($result))
                                        {
                                            $user_id=$row['user_id'];
                                            $user_name=$row['user_name'];
                                            $user_image=$row['user_image'];
                                           $email=$row['user_email']; 
                                            $address=$row['user_address1'];
                                            $mobile=$row['user_mobile'];
                                            $pin=$row['user_pincode'];
                                            
                                            
                                    ?>
                                        <tr>
                                        <td><?php echo"$user_id"?></td>
                                        <td><img src="../users_area/user_images/ <?php echo $user_image?>" alt="" class="img"></td>
                                        <td><?php echo"$user_name"?></td>
                                        <td><?php echo"$email"?></td>
                                        <td><?php echo"$address"?></td>
                                        <td><?php echo"$mobile"?></td>
                                        <td><?php echo"$pin"?></td>
                                        <td><input type="checkbox" name="removeitem[]" value="<?php echo $user_id ?>"></td>
                                        <td>
                                        <input type="submit" value="Remove User" name="remove_cart" class="bg-info px-3 py-2 border-0 mx-3">
                                        </td>
                                        </tr>
                                            
                                            
                                                <?php  }}
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
                 foreach($_POST['removeitem'] as $user_id)
                 {
                    echo $user_id;
                    $delete_query="Delete from `user_table` where user_id=$user_id";
                    $run_delete=mysqli_query($con,$delete_query);
                    
                    if($run_delete)
                    {

                        echo"<script>alert('User have been removed Successfully')</script>";
                        echo "<script>window.open('index.php?view_user.php','_self')</script>";
                    }
                }
              }
            }
                echo $remove_item=remove_cart_item();

         ?>
               <?php
              
            

         ?>
            </div>
</div>
</body>
</html>