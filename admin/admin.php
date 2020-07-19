<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php

        if(isset($_GET['page'])) {
            switch ($_GET['page']) {
                case 'list-product':
                    $controller->getAllProduct();
                    break;
                case 'add-product':
                    $controller->addProduct();
                break;
                case 'login':
                    include_once('src/View/login.php');
                break;
    
                case "edit-product":
                    $controller->editProduct();
                    break;   
            }
        } else{
            $controller->getAllProduct();
        }
 
    ?>
</body>
</html>

