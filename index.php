<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'script.php';



?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Dashboard</title>
<!-- CSS Style Sheets-->
</head>
    
<body>    
    
    <?php 
    //include 'inc/header.php';
    ?>
    <div class="contaner">
        <?php while ($row = mysqli_fetch_array($result)) {?>
        <div class="post" id="post">
            <div class="img">
                <img src="img/<?php echo $row['img_name'];?>" />
            </div>
            <div class="text">
                <p>
                  <?php echo $row['info']; ?>  
                </p>
            </div>
        </div>
        <?php }?>
    </div>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="jquery-2.1.4.js" type="text/javascript"></script>
    <script src="jscroll-master/jquery.jscroll.js" type="text/javascript"></script>
    <script>
    $(document).scroll(function(){
    if ($(window).scrollTop() + $(window).height() == $(document).height()) {
        jscroll();
       alert('scroll touch');
    }
});
</script>



</html>

