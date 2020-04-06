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
     <div class="container"> <br>
     <h1 class="text-center bg-dark text-white">Delete User By Id</h1>
        <br>
        <form id="myform" action="Back_End/AdminDeleteUser.php" method="post">
        <div class="col-lg-4 m-auto">
          <label> Id:</label>
          <input type="text" name="idn" class="form-control"><br>
          <button type="submit" name="submit" value="submit" id="submit"class="btn btn-success">Delete</button>
        
        </div>
        </form>            
     
     
     </div>


    <div>
      <h1 class="text-center bg-dark text-white" > User Information  </h1>
      <br>
       <button id="displaydata" class="btn btn-success">display</button>
       <table class="table table-triped table-bordered">
       
          <thead>
           <th>  Id </th>
           <th> Full Name </th>
           <th>  User Name  </th>
           <th>  Mobile  </th>
           <th>  Sex  </th>
           <th>   Password </th>
           <th>  Email   </th>
           <th>  Birth_date  </th>
           <th>  Address  </th>

          </thead>
         <tbody id="response">
         
         </tbody>
       </table>
    </div>

         <script src="js/AdminShowUser.js ">
         

     
    
    </script>


</body>
</html>
