<?php
    if (isset ($_POST['email'])) {
        // Email Information
       $admin_email = "fleexinnovations@gmail.com";
       $name = $_POST['email'];
       $email = $_POST['phone'];
       $message = $_POST['message'];

        // Send email
        mail ($admin_email, "New Form Submission", $message .'
        - ' .$phone, "From:" .$email);

        header ('Location: http://fleexinnovations.com/success.html');
    }