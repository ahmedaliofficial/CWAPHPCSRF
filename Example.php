<?php
    require_once('./CWA_Plugins/CsrfGenrate.php');
    if(isset($_POST['formsub'])){
    
        if($CSRF->Check($_POST['CsrfFormField'])){
            echo "access done";
        }
        else{
            echo "not access";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="hidden" name="CsrfFormField" value="<?php echo $CSRF->Create() ?>">
        <button type="submit" name="formsub" >Submit</button>
    </form>
</body>
</html>