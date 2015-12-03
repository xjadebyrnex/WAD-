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


<html>
    <body>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript">
            $(function(){
                $("rss").load("rss.php");
            });
            
        </script>
        <script>
		
        var XMLHttpRequestObject = false;
            if(window.XMLHttpRequest){
                XMLHttpRequestObject = new XMLHttpRequest();
            }
            else if(window.ActiveXObject){
                XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
            }
            
       function getData(datasource,divID){
                if(XMLHttpRequestObject){
                    var obj = document.getElementById(divID);
                    XMLHttpRequestObject.open("GET",datasource,true);
                    XMLHttpRequestObject.onreadystatechange = 
                    function(){
                        if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200){
                            obj.innerHTML=XMLHttpRequestObject.responseText;
                        }
                    }
                    XMLHttpRequestObject.send(null);
                }
            }
        </script>
        
 
    </body>
</html>