<?php include('Control.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Body Size</title>
	<link rel="stylesheet" href="assets/css/body.css">
</head>
<body>
  <div style="position: absolute; left: 30px; top: 40px;">
    <h6>N.B:If you don't know how to messurment your size for yourself then please see the video</h6>
    <iframe width="500" height="315" src="https://www.youtube.com/embed/74MwrDCzeBU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div> 
  
<div class="wrapper">
    <form action="" method="post">
      <div class="title">
      Body size
    </div>
    <?php bodysize(); ?>
    <div class="form">
       <div class="inputfield">
          <label>Collar</label>
          <input type="text" name="collar" placeholder="Collar" class="input">
       </div>  
        <div class="inputfield">
          <label>Length</label>
          <input type="text" name="length" placeholder="Length" class="input">
       </div>  
       <div class="inputfield">
          <label>Sleeve length</label>
          <input type="Sleeve length" name="sleeve" placeholder="Sleeve length" class="input">
       </div>  
      <div class="inputfield">
          <label>Shoulders</label>
          <input type="Shoulders" name="shoulders" placeholder="Shoulders" class="input">
       </div> 
       
       
        <div class="inputfield">
          <label>chest</label>
          <input type="text" name="chest" placeholder="Chest" class="input">
       </div> 
      <div class="inputfield">
          <label>tummy</label>
          <input type="text" name="tummy" placeholder="Tummy" class="input">
       </div> 
      <div class="inputfield">
          <label>hips</label>
          <input type="text" name="hips" placeholder="Hips" class="textarea" >
       </div> 
      <div class="inputfield">
          <label>cuff</label>
          <input type="text" name="cuff" placeholder="Cuff" class="input">
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>All ok</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Submit" name="orderSize" class="btn">
        <a href="payment.html" style="display: block;outline: none; border: none; background-color: #382aff; color: #fff;text-align:center;text-decoration: none; #ddd; width: 180px; padding: 8px 12px;">place Order</a>
      </div>
    </div>

    </form>
</div>	
	
</body>
</html>
