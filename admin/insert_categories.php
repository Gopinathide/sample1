<?php
  include('../includes/connect.php');
  if(isset($_POST['insert_cat']))
  {
      $category_title=$_POST['cat_title'];
      $select_query="select * from categories where category_title='$category_title'";
      $result_select=mysqli_query($con,$select_query);
      $number=mysqli_num_rows($result_select);
      if($number>0)
      {
          echo "<script>alert('This category is already presented inside the table')</script>";
      }
      else
      {
          $insert_query="INSERT INTO categories (category_title) VALUES ('$category_title');";
          if(mysqli_query($con,$insert_query))
          {
              echo "<script>alert('Category has been added Successfully') </script>";
          }
      }
  }
?>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-adden1">
            <i class="fa-solid fa-receipt">

            </i>
        </span>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="categories" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-aut0">
        <input type="submit" class=" bg-info border-0 p-2 my-3" name="insert_cat" value="Insert Categories" aria-describedby="basic-addon1" >  
    </div>
</form>