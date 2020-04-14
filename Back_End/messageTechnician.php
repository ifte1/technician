

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/StyleFormessagetechnician.css">
</head>
<body>

<div class="container">

  <form id="user" class="input-group" action="" method="post">
         <h4>To:</h4>
        <input type="text" class="input-field" placeholder="User Name" name="username">
          <br><br>
          <h4>Message:</h4>                     
        <textarea name="textarea" id="message-field" cols="40" rows="5" placeholder="Write Message..."></textarea>
         <br> <br>
        <button type="submit" name="submit" class="submit-btn">Send</button>
        <button type="button" name="cancel" class="submit-btn">Cancel</button>
        <?php 
          include'messagepass.php';

        ?>
  </form>
  
</div>    


</body>
</html>



