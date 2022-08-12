<?php include('header.php'); ?>

    <h1>Gem Pre-Order</h1>
    <h2>Discount Offers in <?php echo date('M Y')?></h2>

    <?php
    // Show gem products
    foreach($gems as $key => $gem){
        echo '<img src="/images/'.$gem['image'].'"/>
        <p>
        Name: '.$gem['name'].'<br>
        Price: $'.$gem['price'].'<br>
        <a href="/order.php?gem_id='.$gem['gem_id'].'" 
        class="buyBtn">Pre-order'.$gem['name'].'</a><br>';

    }
    ?>

<?php include('footer.php');?>