
<!DOCTYPE html>

<html lang="da">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<form action="form/form.php" method="post">
    <input name="name" type="text" placeholder="Indtast Navn">
    <input name="email" class="email" type="text" placeholder="Indtast Email">
    <button type="submit" class="btn_email">Send</button>
</form>
   
<?php include 'form.php';?>
    
</body>

</html>