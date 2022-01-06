<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>E-Event.IO!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;800&display=swap" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="view\css\index.css" rel="stylesheet" type="text/css"/>
    <link href="view\css\style.css" rel="stylesheet" type="text/css"/>
  </head>

    <body>
        <?php Vue::montrer('standard/header'); ?>
        <?php echo $A_vue['body'] ?>
        <?php Vue::montrer('standard/footer'); ?>
    </body>
</html>