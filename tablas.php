<html>
	<head>
		<title>tablas 1-10</title>
	</head>
	<body bgcolor="cyan">
		<center><h2> tablas del 1 al 10</h2></center>
	  <table border="1" align="center" style="font-size: 25;" bgcolor="white">
       <?php
            echo "<tr>";
            for ($cabecera="0";$cabecera<=10;$cabecera++){
                        echo "<th>";
                        echo "<td>$cabecera</td>";
                        echo "</th>";
            }
            echo "</tr>";
            for ($x = 1; $x <=10; $x++){
                       echo "<tr>";
                       echo "<th>$x</th>";
                            for ($y=1;$y<=10;$y++){                      
                                    
                                   switch ($x) {
                                   	case '1':
                                   		echo "<th >";
                                   		  $multiplicacion=$x*$y;                   
                                    echo "<td bgcolor='red'>";                      
                                    echo $multiplicacion;                      
                                    echo "</td>"; 
                                   		break;
                                   	case '2':
                                   		echo "<th >";
                                   		  $multiplicacion=$x*$y;                   
                                    echo "<td bgcolor='blue'>";                      
                                    echo $multiplicacion;                      
                                    echo "</td>";    
                                   		break;
                                   	case '3':
                                   		echo "<th >";
                                   		  $multiplicacion=$x*$y;                   
                                    echo "<td bgcolor='green'>";                      
                                    echo $multiplicacion;                      
                                    echo "</td>";    
                                   		break;
                                   	 case '4':
                                   		echo "<th >";
                                   		  $multiplicacion=$x*$y;                   
                                    echo "<td bgcolor='red'>";                      
                                    echo $multiplicacion;                      
                                    echo "</td>";    
                                   		break;
                                   	case '5':
                                   		echo "<th >";
                                   		  $multiplicacion=$x*$y;                   
                                    echo "<td bgcolor='blue'>";                      
                                    echo $multiplicacion;                      
                                    echo "</td>";    
                                   		break;
                                   	case '6':
                                   		echo "<th >";
                                   		 $multiplicacion=$x*$y;                   
                                    echo "<td bgcolor='green'>";                      
                                    echo $multiplicacion;                      
                                    echo "</td>";    
                                   		break;
                                   	case '7':
                                   		echo "<th>";
                                   		  $multiplicacion=$x*$y;                   
                                    echo "<td bgcolor='red'>";                      
                                    echo $multiplicacion;                      
                                    echo "</td>";    
                                   		break;
                                   	case '8':
                                   		echo "<th >";
                                   		  $multiplicacion=$x*$y;                   
                                    echo "<td bgcolor='blue'>";                      
                                    echo $multiplicacion;                      
                                    echo "</td>";    
                                   		break;
                                   	case '9':
                                   		echo "<th >";
                                   		  $multiplicacion=$x*$y;                   
                                    echo "<td bgcolor='green'>";                      
                                    echo $multiplicacion;                      
                                    echo "</td>";    
                                   		break;

                                   	default:
                                   		echo "<th >";
                                   		  $multiplicacion=$x*$y;                   
                                    echo "<td bgcolor='red'>";                      
                                    echo $multiplicacion;                      
                                    echo "</td>";    
                                   		break;
                                   }
                                            
                            }              
                    echo "</th>";          
          }          
     ?>      
    </table>
    <h5>por tadeo cordova</h5>
	</body>
</html>