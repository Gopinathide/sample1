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
                              $cart_query="Select * from `user_order` where ready=0";
                              $result=mysqli_query($con,$cart_query);
                              $result_count=mysqli_num_rows($result);
                              $result_count=mysqli_num_rows($result);
                              if($result_count>0)
                              {
                                    echo" <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Product ID</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Amount</th>
                                            <th>Order Date</th>                                            <th>User ID</th>
                                            <th>User Name</th>
                                            <th>User Email</th>
                                            <th>User Address</th>
                                            <th>User Pincode</th>
                                            <th>User Mobile</th>
                                            <th>Order Deliver</th>
                                            
                                            
                                            
                                        </tr>
                                        </thead>";
                                        while($row=mysqli_fetch_array($result))
                                        {

                                           
                                            
                                            $order_id=$row['order_id'];
                                            $product_id=$row['product_id']; 
                                            $quantity=$row['quantity'];
                                            $amount=$row['amount'];
                                            $date=$row['order_date'];
                                            $user_id=$row['user_id']; 
                                            $user_name=$row['user_name'];
                                            $user_email=$row['user_email'];
                                            $user_address=$row['user_address'];
                                            $user_pincode=$row['user_pincode'];
                                            $user_mobile=$row['user_mobile'];

                                            $ol="Select * from `products` where product_id=$product_id";
                                            $olw=mysqli_query($con,$ol);
                                            $ows=mysqli_fetch_assoc($olw);
                                            $pname=$ows['product_name'];
                                            
                                            
                                            
                                    ?>
                                        <tr>
                                        <td><?php echo"$order_id"?></td>
                                        <td><?php echo"$product_id"?></td>
                                        <td><?php echo"$pname"?></td>
                                        <th><?php echo"$quantity"?></th>
                                        <th><?php echo"$amount"?></th>
                                        <th><?php echo"$date"?></th>
                                        <td><?php echo"$user_id"?></td>
                                        <td><?php echo"$user_name"?></td>
                                        <td><?php echo"$user_email"?></td>
                                        <td><?php echo"$user_address"?></td>
                                        <td><?php echo"$user_pincode"?></td>
                                        <td><?php echo"$user_mobile"?></td>
                        
                                        <td>  <input type="submit" value="Deliver Order" name="confirmorder" class="bg-info px-3 py-2 border-0 mx-3">
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
              
             if(isset($_POST['confirmorder']))
             {

               $re="Update `user_order` SET ready=1 where order_id=$order_id";
               $res=mysqli_query($con,$re);
                $dest = "$user_email";
                $subjetc = "Order Ready to deliver";
                $body = "Hi $user_name thanks for your order.Your order $pname is ready to deliver.You can expect within one or two days";
                $headers = "From: gopinathk.19it@kongu.edu";

               
              
                if (mail($dest, $subjetc, $body, $headers)) {
                  echo "<script>alert('Message have been sent successfully')</script>";
                  echo"<script>window.open('index.php?view_orders.php','_self')</script>";
                } else {
                  echo "Failed to send email...";
                }
             }
         ?>
            </div>
</div>
</body>
</html>

