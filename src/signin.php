<?php
    include( '../config/database.php' );

    session_start();

    if(isset($_SESSION['user_id' ])){
        header('Refres:0; url=http://localhost/schoolar/src/home.php');
    }

    $correo electrónico = $_POST [ 'correo_electrónico' ];
    $passw = $_POST [ 'p_sswd' ];
    $enc_pass = sha1($passwd);

    $sql = "
    SELECT 
        id,
        COUNT(id) as total
 FROM   
    user
WHERE
    email ='$email' and 
    password = '$enc_pass' and
    status = true
GROUP BY
    id
 " ;

    $res = pg_query ( $conn , $sql );

    if ( $res ){
        $row = pg_fetch_assoc ( $res );
        if ( $row [ 'total' ] > 0 ) {
            //echo "Login Ok";
            $_SESSION
            header('Refres:0; url=http://localhost/schoolar/src/home.php');
 } else {
            eco "Login failed" ;
      }
    }
 ?>