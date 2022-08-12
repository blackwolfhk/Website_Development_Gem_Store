<?php include 'header.php'; ?>

<form action="/functions.php?op=createOrder" method="post">

  <label for="gem_name">Pre-order Product Name </label>
  <input type="hidden" id="gem_id" name="gem_id" value="<?php echo $_GET['gem_id'];?>">

  <!-- As gem_id index start from 0, we need to use "-1" to indicate relevant product-->
  <h2><?php echo $gems[$_GET['gem_id']-1]['name'];?></h2>

  <label for="name">Your name:</label>
  <input type="text" id="name" name="name"><br/>

  <label for="email">Your email:</label>
  <input type="email" id="email" name="email" require><br/>

  <label for="quantity">Purchased quantity:</label>
  <input type="number" id="quantity" name="quantity" min="1" max="5" value="1">
  
  <br>
  <input class="buyBtn" type="submit" value="Submit Order">
</form> 

<?php include 'footer.php';?>