<! DOCTYPE html >
 < html > 
  < head > 
    < título > PHP Store </ title > 
  </ head > 
  < body > 
    <? Php 
    $ name = "PHP Store";
    $ credit = 1000;
    // Usando dos barras diagonales, creamos comentarios en php. 
    // Dentro de la etiqueta php, podemos insertar valores en nuestro HTML. 
   echo "<h1>Welcome to ".$ name."!</h1>";
   echo "<h2>You have $".$ credit." in your wallet.</h2>";
   
   
    $ productos ['Computadora'] = 750; 
    $ productos ['Auto'] = 15000; 
    $ productos ['iPhone'] = 1000; 
    $ productos ['Tostadora'] = 75; 
      
   echo "A car costs $".$ products['Car']."</p>";
   foreach ( $ productos  as  $ key => $ value ) {
   echo "<p> El" . $ key . "cuesta" . $ value . "</p>" ;
   }
   echo "<h2>Items you can afford</h2>";
   
   foreach($ products as $ key => $ value){
   if($ value <= $ credit ){
   echo "<p>".$ key."</p>"; 
   }
   }
   ?>
  </body> 
</html >