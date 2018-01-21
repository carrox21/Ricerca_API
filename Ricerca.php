<!DOCTYPE html>
<html>
 <head>
  <title>Carozzi API</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
   td{ 
    text-align: center;
   }
  </style>
 </head>
 <body>
  <?PHP
  $luogo=$_POST['luogo'];
  $posto=$_POST['posto']; 
  if(!isset($luogo)||!isset($posto))
  {
   print "Posto o Luogo non presenti";
  }
  $ch=curl_init();
  $url="https://api.foursquare.com/v2/venues/search?client_id=KBEQ0XGIRVVYI2ZOUPF02KFFOOIO5XFSANRVH5JFBCEKXUB5&client_secret=3KM02MN5IFBTKTDT2XMBGGQ4IJP22SE2V3KXUCIOKNJZYL35&near=$posto&query=$luogo&limit=10&v=20180101";
  $opzioni=array(
 		    CURLOPT_URL =>$url,
		    CURLOPT_RETURNTRANSFER => true);
  curl_setopt_array($ch, $opzioni);
  $ritorno=curl_exec($ch);
  $content=json_decode($ritorno,true);
  ?>
  <div class="container">
   <table class="table" text="center"> 
    <tr class="danger"><td>Nome locale</td><td>Latitudine</td><td>Longitudine</td><td>Indirizzo</td></tr>
	<?PHP
     foreach($content['response']['venues'] as $dato)
     {
      if(ISSET($dato['location']['address']))
	  {
	   print "<tr class="."info"."><td>".$dato['name']."</td><td>".$dato['location']['lat']."</td><td>".$dato['location']['lng']."</td><td>".$dato['location']['address']."</td></tr>";
	  }	  
 	  else
	  {
	   print "<tr class="."info"."><td>".$dato['name']."</td><td>".$dato['location']['lat']."</td><td>".$dato['location']['lng']."</td><td>Indirizzo non disponibile</td></tr>";
	  }
     }
     ?>
   </table>
  </div>
 </body>
</html>