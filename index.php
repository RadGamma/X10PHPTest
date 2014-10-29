<!DOCTYPE HTML>
<?php
    if (isset($_POST['ButtonA1On']))
    {
    	$set = "A1";
      $switch = false;	
      shell_exec('sudo ./Lights_A1.sh'. ' ' .$set. ' ' .$switch);
      print_r($switch);		
    }
    
    if (isset($_POST['ButtonA1Off']))
    {
    	$set = "A1";
    	$switch = true;
      shell_exec('sudo ./Lights_A1.sh'. ' ' .$set. ' ' .$switch);
      print_r($switch);	
    }
    
    if (isset($_POST['ButtonA2On']))
    {    
      $set = "A2";
      $switch = false;	
      shell_exec('sudo ./Lights_A1.sh'. ' ' .$set. ' ' .$switch);
      print_r($switch);		
    }
    
    if (isset($_POST['ButtonA2Off']))
    {
    	$set = "A2";
    	$switch = true;
      shell_exec('sudo ./Lights_A1.sh'. ' ' .$set. ' ' .$switch);
      print_r($switch);	
    }
    
    if (isset($_POST['ButtonA3On']))
    {    
      $set = "A3";
      $switch = false;	
      shell_exec('sudo ./Lights_A1.sh'. ' ' .$set. ' ' .$switch);
      print_r($switch);		
    }
    
    if (isset($_POST['ButtonA3Off']))
    {
    	$set = "A3";
    	$switch = true;
      shell_exec('sudo ./Lights_A1.sh'. ' ' .$set. ' ' .$switch);
      print_r($switch);	
    }
?>    

<html>
 <head>
   <title>PHP X10 Test</title>
 </head>
 <body>
 
 <?php 
 $ip = $_SERVER['REMOTE_ADDR'];
 
 $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
 
 if ($details) {
    print_r($details);
 }
 ?>
 
 <form method="post">
 <p>
  		<button name="ButtonA1On">A1 ON</button>
 </p>
 </form>
 
 <form method="post">
 <p>
  		<button name="ButtonA1Off">A1 OFF</button>
 </p>
 </form>
 
 <form method="post">
 <p>
  		<button name="ButtonA2On">A2 ON</button>
 </p>
 </form>
 
 <form method="post">
 <p>
  		<button name="ButtonA2Off">A2 OFF</button>
 </p>
 </form>
 
 <form method="post">
 <p>
  		<button name="ButtonA3On">A3 ON</button>
 </p>
 </form>
 
 <form method="post">
 <p>
  		<button name="ButtonA3Off">A3 OFF</button>
 </p>
 </form>
 
 </body>
</html>
