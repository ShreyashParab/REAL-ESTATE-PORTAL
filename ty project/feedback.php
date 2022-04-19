<?php

    include 'config.php';
  
    if(isset($_POST['submit']))
   {
       if(!empty($_POST['comment']))
       {
            $comment = $_POST['comment'];
            $sql = "INSERT INTO `feedback` (`comment`) VALUES ('$comment')";
            $result = mysqli_query($conn, $sql) or die(mysqli_error());
            if($result)    
            {
               echo "the record has been recorded succesfuly";
            }
            else{
                echo "something went wrong";
            }
       }    
   }
   else{
       echo "something went wrong";
   }

?>