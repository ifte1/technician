<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>



    <br><br><div>
      <h1 class="text-center bg-dark text-white" > Technicians </h1>
      
      
       
       <table class="table table-striped table-bordered">
       
          <thead class="text-center bg-primary text-white">
           <th>  Id </th>
           <th> Full Name </th>
           <th>  Username </th>
           <th>  Mobile  </th>
           <th>  gender  </th>
           <th>   Password </th>
           <th>  Email   </th>
           <th>  Birth   </th>
           <th>  Experience </th>
           <th>  Category   </th>
           <th>  Address  </th>
           <th>  File  </th>
          </thead>
         <tbody>
         
         <?php 
            include 'dbControl/db.php';
             $connection = new db();
             $conobj=$connection->OpenCon();

             $query= "select * from technician";
             $queryd= mysqli_query($conobj,$query);
             while($result= mysqli_fetch_array($queryd))
             {
            ?>
                <tr>
                <td>  <?php echo $result['id']; ?> </td>
                <td>  <?php echo $result['Fullname']; ?> </td>
                <td>  <?php echo $result['username']; ?> </td>
                <td>  <?php echo $result['mobile']; ?> </td>
                <td>  <?php echo $result['gender']; ?> </td>
                <td>  <?php echo $result['password']; ?> </td>
                <td>  <?php echo $result['email']; ?> </td>
                <td>  <?php echo $result['birth']; ?> </td>
                <td>  <?php echo $result['experience']; ?> </td>
                <td>  <?php echo $result['category']; ?> </td>
                <td>  <?php echo $result['address']; ?> </td>
                <td> <img src="  <?php echo $result['file']; ?>"height="100px"width="100px"> </td>

                </tr>


             <?php

             }

             $connection->CloseCon($conobj);


         
         ?>
         

         </tbody>
       </table>
    </div>
</body>
</html>
