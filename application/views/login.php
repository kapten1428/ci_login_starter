<!DOCTYPE html>
<html>
<head>
    <base href="<?php echo base_url(); ?>">
    <title>Login</title>
    <link href="assets/css/login.style.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="login-box center-block">
            <img src="assets/img/folder_home.png" class="login__logo center-block" alt="">
            <div class="text-center caption-login">Lamu Property Sign In</div>

            <?php $attributes = (['id' => 'login_form']); ?>
            <?php echo form_open('login/login_user', $attributes) ?>

            <div class="login__form">
                <div class="form-group">
                    <label class="login__form-label">Username</label>
                    <?php
                    $input = ([
                        'class' => 'form-control',
                        'name' => 'username'
                    ]);
                    echo form_input($input);
                    ?>
                </div>
                <div class="form-group">
                    <label class="login__form-label">Password</label>
                    <?php
                    $input = ([
                        'class' => 'form-control',
                        'name' => 'password'
                    ]);
                    echo form_input($input);
                    ?>
                </div>
                <div class="form-group">
                    <?php
                    $submit = ([
                        'class' => 'btn login__form-btn',
                        'name' => 'submit',
                        'value' => 'Masuk'
                    ]);
                    echo form_submit($submit);
                    ?>
                </div>
                <div class="pull-right">
                    <p><?php echo anchor('', 'Lupa password?',array('class'=>'login__link')); ?></p>
                </div>
            </div>
            <?php echo form_close() ?>

        </div>
    </div>
</div>

</body>
</html>
