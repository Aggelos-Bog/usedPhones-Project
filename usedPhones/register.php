<?php
        session_start();
        require('header1.php');
        require('msg.php');
?>
<main>
    <div class="logIn_box">
        <form action="con_register.php" method="POST" onsubmit="return validate_form();">
            <h2>Register</h2>
            <?php echo_msg() ?>
                 <div class="log_input">
                      <input class="username" type="text" name="username" id="username" size="25" maxlength="25" placeholder="username" />
                 </div>
                 
                 <div class="log_input">
                      <input class="password" type="password" name="password" id="password" size="25" maxlength="25" placeholder="password"/>
                 </div>
                 
                 <div class="log_input">
                      <input class="email" type="text" name="email" id="email" size="30" maxlength="100" placeholder="email"/>
                 </div>
                 <button type="Submit">Register</button>
            <p>If you already have an account<a href="log-in.php"> Log in NOW!</a></p>
        </form>
    </div>
</main>
<?php
        require('footer.php'); 
?>
<script src="validation.js"></script>