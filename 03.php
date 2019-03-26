
<?php
    require('dbconect.php');
    $email = $_POST["email"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $address2 = $_POST["address2"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $terms = $_POST["terms"]=='on' ? true: false;

    $newConn=new dbconect();
    $sql="INSERT INTO usuario(email,address,address2,city,state,zip,





)";

$newConn->openConn();
    if($newConn->executeQuery($sql)){
        echo"<script>
        alert('ok')
            </script>";
    }
    else{
        echo"<script>
        alert('error')
        </script>";
    }
    $newConn->closeConn();

    echo"<script>
//window.location.href='03_Form.html;'

</script>";

    ?>


