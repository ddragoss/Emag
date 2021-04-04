# Emag
<i>Testing the results of the game: <br> 
  -run index.php for one battle <br>
  -run arenatest.php multiple battles (you can modify the prameter of method "setNumberFights(n)" to set multiple fights between Orderus and Wild Beast)</i>  <br><br>
  
<b>Project Structure</b> <br>

<b>NAMESPACES AND CLASSES:<br></b>
<i>Project contains two namespaces(players, actions) lacated into \src:<br> </i>
  <b>players(\src\players):</b> <br> This namespace contain tree classes to describe the players of the game: <br>
    -one abstract class Hero to define the prototype of heroes; <br>
    -two classes Orderus and Beast both extends Hero - used for define the main actors of this game <br>
  <b>actions(\src\actions):</b> <br> This namespace contain tree classes to describe the action of the game: <br>
    -FactoryPlayers to generate object of concrete class based on given information<br>
    -Battle to define the battle between heroes<br>
    -Arena to define multiple battles<br>
    
 <b>UNIT TEST:<br></b>
 Few unit tests are located into \test directory and these are unfinished</br></br></br>
 
 <i>If you have any questions please contact me at ndragos.samoila@gmail.com </br></i>
 
 Thank you!
   





