<?php

if (!isset($_SESSION["USERNAME"])){
        header("location:login.php?error=accessdismissed");
        exit();
}
?>
<div class="home">
        <div class="message">
                <h1>HELLO <?php echo strtoupper($_SESSION["USERNAME"])?></h1>
                <p>Welcome to our bike shop, your haven for all things cycling and the
                place where your cycling journey finds its home. Step inside and discover
                a world of two-wheeled wonders, where your passion for biking can flourish
                and your dreams can take flight. Get ready to embark on extraordinary rides and
                create unforgettable memories.<br> Welcome to your cycling sanctuary.</p>
        </div>
                <div class="slide">
                        <img class="slideshow" src="img/bb.jpg">
                        <img class="slideshow" src="img/pedal.jpg">
                        <img class="slideshow" src="img/cassete.jpg" >
                        <img class="slideshow" src="img/deore1.jpg" >
                        <img class="slideshow" src="img/crankarm.jpg" >
                        <script src="js/slideshow.js"></script>
                </div>
</div>