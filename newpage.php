<!DOCTYPE html> 
<html> 

    <title> WEB SERVER FINAL EXAM   </title> 
  
    <body>
        <h3> WEB SERVER FINAL EXAM
        <center>    <img src= "https://storage.googleapis.com/gd-wagtail-prod-assets/images/evolving_google_identity_2x.max-4000x2000.jpegquality-90.jpg" width=500 height=500><br/></center> 

    <?php $server = "localhost";
            $username = "root";
            $password= "staticvoid";
            $database= "final";
     ?>
    <form action="newpage.php" method="get">
   
  <!-- <form method="get" action="https://www.google.com/search?q="> -->
    <!--<form method="get"> --> 
    <center>search: <input type="text" name="search"></center>  <br/> 
    <center> <input type="submit" value="search">  <input type="submit" value="I'm feeling lucky"></center> 
    
        your info is:
            
            <?php
            
                $search= htmlspecialchars($_GET['search']);
                $ip=$_SERVER['REMOTE_ADDR'];
               // header('Location: https//www.google.com/search?q='.$search);
            ?>
           
            <?php echo $_SERVER['REMOTE_ADDR']; ?> and
            <?php echo $_GET['search'];
            ?>


<?php
        $conn = mysqli_connect($server, $username, $password, $database);  
        $ID1=11;
        $sql = "INSERT INTO googlesearches (id, search, ip) VALUES('$ID1', '$search', '$ip');";

        if (mysqli_query($conn,$sql)) {

        echo "it worked";
        }
        else{
           echo "error:" .$sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
 ?>

    </form>
        <br/>
  
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////-->


   </body>
    </html> 