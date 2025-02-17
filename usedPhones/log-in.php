<?php
        session_start();
        require('header1.php');
        require('msg.php');
?>
<main>
    <div class="logIn_box">      
        <form method="post" action="con_login.php" onsubmit="return validate_form();">         
            <h2>Log In</h2>
            <?php echo_msg()?>

                 <div class="log_input">
                      <input class="username" type="text" name="username" id="username" size="25" maxlength="25" placeholder="username" />
                 </div>
                 
                 <div class="log_input">
                      <input class="password" type="password" name="password" id="password" size="25" maxlength="25" placeholder="password"/>
                 </div>
                 <button type="Submit">log in</button>
            <p>You dont have an account yet?<a href="register.php"> Register NOW!</a></p>
        </form>
    </div>
</main>
<?php
        require('footer.php'); 
?>
<script src="validation.js"></script>