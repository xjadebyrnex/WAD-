<?php
  
        if($GET["nameBox"] || $GET["textarea"])
        {
        
            echo $GET['nameBox']."<br/>";
            echo $GET['textarea'];
            
            exit();
        }
        ?>
 <?php
     


   if( $_POST["nameBox"] || $_POST["textarea"] )
   {
      if (preg_match("/[^A-Za-z'-]/",$_POST['nameBox'] ))
      {
        alert("no you not moving fix it") ;
		}
      echo "The user ". $_POST['nameBox']. "<br />";
      echo "thinks ". $_POST['textarea'];
   }
      exit();
      ?>
