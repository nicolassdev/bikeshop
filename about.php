<?php

if (!isset($_SESSION["USERNAME"])) {
    header("location:login.php?error=accessdismissed");
    exit();
}
?>
<div class="about">
    <div class="aboutus">
        <h1>ABOUT</h1>
        <p>This website is about the tools and equipment that a bicycle requires
            and uses. In addition, this website has many different class items that can be purchased at a decent price. In a nutshell,
            everything that is used in a bicycle is available on this website.</p>
    </div>
</div>