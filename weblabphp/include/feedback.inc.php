<?php

     $fname = $_POST['f__name'];
     $femail = $_POST['f__email'];
     $tfeedback = $_POST['text__feedback'];

     $message = "Name: $fname\nEmail: $femail\nFeedback: $tfeedback";

     if (mail("diazsaiful85@gmail.com", "You Have Recieved Feedback", "Information Requested:\n\n$message", "From: $femail"))
     {
          header("location: ../thanks.php");
     }
     else
     {
          header("location: ../failfeed.php");
     }

?>