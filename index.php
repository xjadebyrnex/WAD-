<!DOCTYPE html>
  <?php
  
        if($_GET["nameBox"] || $_GET["textarea"])
        {
        
            echo $GET['nameBox']."<br/>";
            echo $_GET['textarea'];
            
            exit();
        }
        ?>

<?php
   if( $_POST["nameBox"] || $_POST["textarea"] )
   {
      if (preg_match("/[^A-Za-z'-]/",$_POST['nameBox'] ))
      {
         die ("invalid name and name should be alpha");
		}
      echo "The user ". $_POST['nameBox']. "<br />";
      echo "thinks ". $_POST['textarea'];
      
      exit();
   }
?>

<html>
    <body>

        <h1>My first PHP page</h1>
        
 
    </body>
</html>