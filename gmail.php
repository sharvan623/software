<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "shravank@vtechsolution.us";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:giet13aei015@gmail.com \r\n";
         $header .= "Cc:giet13aei016@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail($to,$subject,$message,$header);
         
         if( $retval == false ) {
            echo "Message could not be sent...";
         }else {
            echo "Message sent successfullyt...";
         }
      ?>
      
      
   </body>
</html>