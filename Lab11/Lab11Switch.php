<?php 
    $n = $_POST['number'];
    echo "Entered text: ", $n, "<br>";
    $cop = "копій";
        switch($n / 10 % 10 == 1 ? 0 : $n % 10){
            case 1:
                $cop += "ка";
                break;
            case 2:
                case 3:
                case 4:
                $cop += "ок";
                break;
        
          default:
                $cop += "ки";
        break;
                 }

    echo "Classic switch output: ",$n, $cop, "<br>";
   
    echo "Developed by: Franchevskyy, SP-42. <br> Created on ", date("d/m/Y H:i:s", filectime("lrl11test.php")), "<br>";
    echo "Today is ", date("d/m/Y"), "<br>"; 
?>
