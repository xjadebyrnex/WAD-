<!DOCTYPE html>
<html>
  <head>
    <title>comment box</title>

<?php
  
        if($GET["nameBox"] || $GET["textarea"])
        {
        
            echo $GET['nameBox']."<br/>";
            echo $GET['textarea'];
            
            exit();
        }
   
 


   if( $_POST["nameBox"] || $_POST["textarea"] )
   {
     
      echo "The user ". $_POST['nameBox']. "<br />";
      echo "thinks ". $_POST['textarea'];
   }
      exit();

      
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="comment_style.css">
<script type="text/javascript" src="jquery.js">
<script type="text/javascript">
function post()
{
  var textarea = document.getElementById("textarea").value;
  var nameBox = document.getElementById("nameBox").value;
  if(teaxtarea && nameBox)
  {
    $.ajax
    ({
      type: 'post',
      url: 'post_comment.php',
      data: 
      {
         user_comm:textarea,
	     user_name:nameBox
      },
      success: function (response) 
      {
	    document.getElementById("all_comments").innerHTML=response+document.getElementById("all_comments").innerHTML;
	    document.getElementById(" textarea").value="";
        document.getElementById("nameBox").value="";
  
      }
    });
  }
  
  return false;
}
</script>

</head>

<body>

  <h1>Instant Comment System Using Ajax,PHP and MySQL</h1>

  <form method='post' action="" onsubmit="return post();">
  <textarea id="textarea" placeholder="Write Your Comment Here....."></textarea>
  <br>
  <input type="text" id="nameBox" placeholder="Your Name">
  <br>
  <input type="submit" value="Post Comment">
  </form>

  <div id="all_comments">
  <?php
    $host="localhost";
    $username="root";
    $password="";
    $databasename="sample";

    $connect=mysql_connect($host,$username,$password);
    $db=mysql_select_db($databasename);
  
    $comm = mysql_query("select name,comment,post_time from comments order by post_time desc");
    while($row=mysql_fetch_array($comm))
    {
	  $name=$row['nameBox'];
	  $comment=$row['textarea'];
      $time=$row['post_time'];
    ?>
	
	<div class="comment_div"> 
	  <p class="name">Posted By:<?php echo $name;?></p>
      <p class="comment"><?php echo $comment;?></p>	
	  <p class="time"><?php echo $time;?></p>
	</div>
  
    <?php
    }
    ?>
  </div>

</body>
</html>