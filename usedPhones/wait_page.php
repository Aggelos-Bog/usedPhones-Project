<?php
        session_start();
        require('header1.php');
        require('msg.php');
?>
<main>
    
    <div class="logIn_box">
        <form method="post" action="con_wait_page.php">
            <p id="waitp">You have loged in succesfully!!!</p>
            <h2 id="waith2">We are waiting for </h2>
            <h2 id="waith2">email validation</h2>
            <p id="waitp">Check your email</p>
                 <?php echo_msg() ?>
                 <div class="log_input">
                      <input name="verification_code" type="text" size="30" maxlength="5" placeholder="verification code"/>
                 </div>
                 <button type="Submit">Submit</button>
        </form>
    </div>  
</main>
<?php
        require('footer.php'); 
?>
<script src="validation.js"></script>