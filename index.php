<?php 

  require_once('config.php');

  if(isset($_POST['submit_btn']) && $_GET['action']=='sample_form')
      
  {
     
   
      
      /* getting form value from post method */
      
      $fname = $_POST['fname'];
      $lname=$_POST['lname'];
      $date = date('Y-m-d H:i:s');
      
  
       /* inserting data in database */
      $query= "insert into user (fname,lname,time_log) values ('$fname','$lname','$date')";
      
       $result = mysqli_query($connect,$query);
      
        if(!$result)
        {
            echo 'error in result ';
        }
         else
         {
             echo 'insert successfully';
         }
}?>


<html !DOCTYP >
<head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
   <div class="container">
    <div class="jumbotron text-center">
       <legend>Output section</legend>
       </div>
    <div class="col-sm-6">
       <div class="form-group">
        <form method="post" action="index.php?action=sample_form">
           <div class="col-sm-4">
            <label>FirstName</label>
               <input type="text" id="fname" name="fname" class="form-control" required>
             <label>LastName</label>
               <input type="text" id="lname" name="lname" class="form-control" required>
               
               <br>
               <button class="btn btn-success" name="submit_btn">Submit</button>
            </div>
          
           
         
           </form>
        </div>
       
       </div>
       <div class="col-sm-6">
       <table class="table table-bordered strive">
           <tr>
           <th>Id</th>
           <th>FirstName</th>
           <th>LastName</th>
            <th>LogTime</th>
        
           </tr>
           <?php
           
             $query = "select *from user";
             $result = mysqli_query($connect,$query);
             
           while($row = mysqli_fetch_assoc($result))
    
          {?>
             <tr>
           <td><?php echo $row['id'];?>  </td>
             <td><?php echo $row['fname'];?></td>
             <td><?php echo $row['lname'];?></td>
             <td><?php echo $row['time_log'];?></td>
           
           </tr>
           
          <?php }?>
         
        </table>
       </div>
    </div>
  </body>
</html>



