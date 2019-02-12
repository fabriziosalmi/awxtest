<?php
  $to_email = "fabrizio.salmi@gmail.com";
  $subject = "Ansible AWX mail test";
  $body = "This is just a test..";
  $from_email = "ansible@fabriziosalmi.com";
  mail($to_email, $subject, $body, "From: $from_email rn")
?>
