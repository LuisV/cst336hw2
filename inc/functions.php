<?php
    function run($action)
    {
      //initilizing array 
        $sayings = array();
        $sayings[0]= "You're beautiful.";
        $sayings[1]= "Relax, you're doing just fine.";
        $sayings[2]= "You always look better with a smile.... so show it off.";
        $sayings[3]= "I'm proud of you.";
        $sayings[4]= "You're really amazing!";
        $sayings[5]= "You look nice.";
        $sayings[6]= "You have nice hair.";
        $sayings[7]= "You didn't kill anyone today!";
        
        //what actions to take depending on webpage
        if($action==1)
          {
            show($sayings);
            return;
          }
        $pic = rand(0,4);
        $song= rand(1,3);
        $num = rand(0,7);
      
        //plays a random song out of 3 possible
        echo "<audio autoplay loop>
        <source src = 'music/song$song.mp3' type = audio/mpeg>
        Sorry
        </audio>";
        if($num==$pic)
        {
          echo "<div id= 'special'>";
        }
        else
        {
          echo"<div>";
        }
        
      //displays picture
      echo "<img id= 'pic' src='img/pic$pic.jpg'>";
      
      shuffle($sayings);
      
         echo "<div class='say'>$sayings[$num]</div>";
      
      if($num==$pic)
        {
          
          displaySpecial();
        
        }
      
    
          echo"</div>";
          echo"<form >
              <input type='submit' value= 'Another one?'/>
          </form>";
          
    }
  
  
  function displaySpecial()
  {
    echo"<div class='say'> And you get this just for being special!</div>";
    echo"<img id= 'pic' src='./img/chicken.png'>";
    
  }
  
  function show($sayings)
  {
  
    echo "<div style='width: 100%; font-size: 40px;'> All possible pictures and sayings.</div>";
    for($i=0; $i<5; $i++)
    {
       echo"<img style= 'float: left;' id= 'pic' src='./img/pic$i.jpg'>";
    }
    echo"<div class='say'>";
    for($i=0; $i<count($sayings); $i++)
    {
      echo "$sayings[$i]<br>";
    }
    echo "</div";
    
    
  }
  
?>
  
