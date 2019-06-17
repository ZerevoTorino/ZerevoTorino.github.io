<?php

try
{

    if(isset($_POST['submit']))
    {
      $form_name= $_POST['form_name'];
      $form_lastname=$_POST['form_lastname'];
      $form_email=$_POST['form_email'];
      $form_message=$_POST['form_message'];

      $mail_to="alessandra.amosso@edu.unito.it";
      $headers="From: " .$form_email;
      $txt="Hai ricevuto un messaggio da: " .$form_name " " .$form_lastname "\n\n" .$form_message;

      mail($mail_to, $form_message, $txt, $headers);
      header("Location: index.php?mailsend")

    }
            
   