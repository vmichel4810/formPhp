
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <?php
    include"header.html"; 
   ?>
    <p>Tu as bien envoyer ton formulaire <?= $_POST['name'].' '. $_POST['lname']?>tu es né le <?= $_POST['date']?></p>
    
</body>
</html>