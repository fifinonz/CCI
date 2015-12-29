<html>
<?php
if (isset($this->session->userdata['logged_in'])) {
    header("location: http://localhost/login/index.php/relay/user_login_process");
}
?>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="main">
    <div class="main-container fixer-container login_form" id="login">
        <h2 style="color: #2b0171;text-align: center">User Registration</h2>
        <hr/>
        <?php
        echo "<div class='error_msg'>";
        echo validation_errors();
        echo "</div>";
        echo form_open('relay/new_user_registration');

        echo form_label('Create Username  *');
        echo"<br/>";
        echo form_input('username');
        echo "<div class='error_msg'>";
        if (isset($message_display)) {
            echo "<div class='message'>";
            echo $message_display;
            echo "</div>";
        }
        echo "</div><br/>";
        echo"<br/>";
        echo form_label('Email  *');
        echo"<br/>";
        $data = array(
            'type' => 'email',
            'name' => 'email_value'
        );
        echo form_input($data);
        echo"<br/>";
        echo"<br/>";
        echo form_label('Password  *');
        echo"<br/>";
        echo form_password('password');
        echo"<br/>";
        echo"<br/>";
        echo form_submit('submit', 'Sign Up');
        echo form_close();
        ?>
        <a style="color: #800080" href="<?php echo base_url() ?>site/relay/log_in">For Login Click Here</a>
    </div>
</div>
</body>
</html>