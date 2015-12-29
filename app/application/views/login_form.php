
<?php
if (isset($this->session->userdata['logged_in'])) {

    header("location: http://localhost/login/index.php/user_authentication/user_login_process");
}
?>
<head>
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="main">


    <div class="main-container fixer-container login_form" id="login">

        <h2 style="color: #2b0171;text-align: center">USER LOGIN</h2>
        <hr/>

        <?php echo form_open('relay/user_login_process'); ?>
        <?php
        echo "<div class='error_msg'>";
        if (isset($error_message)) {
            echo $error_message;
        }

        if (isset($logout_message)) {
            echo "<div class='message'>";
            echo $logout_message;
            echo "</div>";
        }
        ?>
        <?php
        if (isset($message_display)) {
            echo "<div class='message'>";
            echo $message_display;
            echo "</div>";
        }
        echo validation_errors();
        echo "</div>";
        ?>
        <br/>
        <label>Username <span>*</span></label>
        <input type="text" name="username" id="name" placeholder="username"/><br /><br />
        <label>Password  <span>*</span></label>
        <input type="password" name="password" id="password" placeholder="**********"/><br/><br />
        <input type="submit" value=" Login " name="submit"/><br />
        <a style="color: #800080" href="<?php echo base_url() ?>site/relay/user_registration_show"><strong>To Sign Up Click Here</strong> </a>
        <?php echo form_close(); ?>
    </div>
</div>
</body>
</html>