<?php
    require_once 'config/db-acc.php';
?>

<?php
require "public/header.php"
?>

<head>
    <link rel="stylesheet" href="./css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/admin.css">
    <title>Document</title>
</head>
<?php
    if(isset($_GET['page_layout'])){
        switch($_GET['page_layout']){
            case 'danhsach':
                require_once 'account/danhsach.php';
                break;

            case 'xoa':
                require_once 'account/xoa.php';
                break;
            
            default:
                require_once 'account/danhsach.php';
                break;
        }
    }
    else{
        require_once 'account/danhsach.php';
    }
?>

<body>

</body>

</html>