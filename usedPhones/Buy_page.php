<?php
        session_start();
        require('header1.php');
        require('msg.php');
?>
<main>
    <div class="buy_box">     
        <div class="cards"> 
            <?php require('con_Buy_page.php'); ?>            
        </div>
    </div>
</main>
<?php
        require('footer.php'); 
?>
<script src="validation.js"></script>