<?php include('header.php'); 



// An auth checking; only allowed for admin role to access this page
// isset <-- to check whether a variable exists or not
// if(!isset($_SESSION['email']))
//     header("Location: /login.php")


if(!isStaff()) header("Location: /");

?>


<h1>All Orders</h1>
<h2>Your login email is: <?php echo $_SESSION['email'];?></h2>

<?php
// Obtain users' orders
// To obtain data from data.csv file and save it to a variable called $orderData
$orderData = file_get_contents('data.csv');
// To seprate each order
$orders = str_getcsv($orderData, "\r\n");

// Display all orders
foreach($orders as $order){

    // To seprate each detail from each order
    $singleOrder = explode(",", $order);

    echo '<div class="order"><p>';
    echo 'Client\'s name : '.$singleOrder[1].'<br/>';
    echo 'Client\'s email : '.$singleOrder[2].'<br/>';
    // gem_id is not equal to index id, therefore, we need to -1
    echo 'Client\'s pre-orders : '.$gems[$singleOrder[0]-1]['name'].' x '.$singleOrder[3].' unit(s) <br/>';
    echo 'Order time : '.$singleOrder[4].'<br/>';
    echo '</p></div>';

    // var_dump($singleOrder);

    // echo $order.'<br>';
}

?>

<?php include('footer.php'); ?>