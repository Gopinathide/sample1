<?php
   include('../includes/connect.php');
   include('../functions/common_function.php');
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
     
      <title>Swathi electronics</title>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    
     <link rel="stylesheet" href="../css/style.css">
   
    
     
     
       </head>
<body class="main-layout">

<header>
         <!-- header inner -->
        
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.html"><img src="../images/1.jfif" alt="logo" style="width: 100px;"></a> </div>
                        <p style="font-size: 20px;margin-top: 20px; color: black;font-style: italic;"><strong>SWATHI </strong><br>ELECTRONICS</p>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li class="active"> <a href="index.php" style="font-style: italic;">Home</a> </li>
                              <li> <a href="about.php" style="font-style: italic;">About</a> </li>
                              <li> <a href="../product.php" style="font-style: italic;">product</a> </li>
                             
                                                                 
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
              
            </div>
         </div>
         <!-- end header inner --> 
      </header>
     <div class="container-fuid my-3">
         <h2 style="text-align:center;">Admin Login</h2><br><br>
         <div class="row d-flex align-items-center justify-content-center">
             <div class="col-lg-12 col-xl-6">

            <form action="" method="post">
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="user_name" class="form-label">User Name</label>
                    <input type="text" name="user_name" id="user_name" class="form-control" style="border-radius:12px; border-color:gray;"
                    placeholder="Enter your User name" autocomplete="off"
                    required="required">
                </div>

                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="user_password" class="form-label">Password</label>
                    <input type="password" name="user_password" id="user_password" class="form-control" style="border-radius:12px; border-color:gray;"
                    placeholder="Enter you password" autocomplete="off"
                    required="required">
                </div>

                <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="user_register" class="btn btn-info mb-3 px-3" value="Login" >
                
            </div>
        </form>

       


             </div>

         </div>
      
    </div>

    <script src="../js/jquery.min.js"></script> 
      <script src="../js/bootstrap.bundle.min.js"></script>      
      <script src="../js/custom.js"></script>
</body>
</html>
<?php
        if(isset($_POST['user_register']))
        {
            $user_name=$_POST['user_name'];
            $user_password=$_POST['user_password'];
           
            if($user_name=='admingopi' && $user_password=='1234')
            {
                echo"<script>alert('Admin have been Logged in successfully')</script>";
                echo"<script>window.open('index.php','_self')</script>";
            }
           else{
            echo"<script>alert('Invalid Credentials')</script>";
           }
           
        }
        ?>