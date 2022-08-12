<?php 
// op = Operation
if($_GET['op']=='createOrder'){
    createOrder();
}
if($_GET['op']=='checkLogin'){
    checkLogin($_POST['email'],$_POST['password']);
}
if($_GET['op']=='logout'){
    logout();
}

function isStaff(){
    return isset($_SESSION['email']);
}

function checkLogin($email, $password){
    $staffEmail = "admin@gemstore.com";
    $staffPassword = "1234";

    if($email == $staffEmail && $password == $staffPassword){
        // Approved as an admin role
        session_start();
        $_SESSION['email'] = $email;

        header("Location: /allOrders.php");
    } else{
        header("Location: /login.php");
    }
}

function createOrder(){
    /* echo $_POST['gem_id']."<br>";
    echo $_POST['name']."<br>";
    echo $_POST['email']."<br>";
    echo $_POST['quantity']."<br>";
    echo date('Y-m-d H:i:s')."<br>"; */
    
    // Save orders:
    // "a" = append
    // "\r\n" = Enter key
    $myfile = fopen("data.csv", "a") or die("Not able to open file");
    $data = $_POST['gem_id'].','.$_POST['name'].','.$_POST['email'].','.$_POST['quantity'].','.date('Y-m-d H:i:s')."\r\n";
    fwrite($myfile, $data);
    fclose($myfile);

    // Change page:
    header("Location:/order-completed.php");
}

function logout(){
    session_start();
    session_destroy();
    header("Location: /");
}


?>
