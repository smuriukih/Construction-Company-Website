<?php

$msg='';
if (isset($_POST['submit'])){

    require_once 'vendor/autoload.php';
    require_once 'infor.php';

    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
      ->setUsername(EMAIL)
      ->setPassword(PASS)
    ;
    
    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);
    
    // Create a message
    $message = (new Swift_Message('New Inquiry From the Website'))
      ->setFrom([EMAIL => 'RIPANA Contractors and Designers Ltd'])
      ->setTo(['smuriukih@gmail.com'])
      ->setBody('Name: '.$_POST['firstname'].' &nbsp; '.$_POST['lastname'] .
     '<br> Email: '.' &nbsp; '.$_POST['email'] . '<br> Subject: '.' &nbsp; '.$_POST['subject']
      . '<br> Message: '.' &nbsp; '.$_POST['message'], 
      'text/html')
      ;
    
    // Send the message
    $result = $mailer->send($message);

    if(!$result){

        $msg='<div class="alert alert-danger text-center">

        Something went Wrong! Please Try again
        </div>';

    }
    else{

       // $msg='<div class="alert alert-success text-center">

        //Message Sent Successfully! Our Team will contact you soon
        //</div>';
        
        
       


        //$url="Location:contacts.php";
       // header($url);
        //exit;

        echo "<script type='text/javascript'>
        alert('Message Sent Successfully! Our Team will contact you soon');
        window.location.href = 'contact.php';
        </script>";

        
    }


}




?>