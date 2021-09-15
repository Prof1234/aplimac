<?php  

      
 
if(isset($_POST['submit'])){ 
    
      $msg_Name =  $_POST['message_Name'];
      $msg_Email =  $_POST['message_Email'];
      $msg_Message =   $_POST['message_Message'];
      $to = "info@aplimac.co.zw";
      $headers = "From address: ". $msg_Email;
      $subject = "Enquiries from ". $msg_Name;
      mail($to, $subject, $msg_Message, $headers);                          
      echo "<script> alert('Successfully send an enquiry') </script>";  
      echo "<script> window.location.href = '../contact.html' </script>";

 
     } else{
             
      echo '<script>';
      echo 'window.location.href = "../404.php"</script>'; 
      exit();
 } 

 
            
?>


