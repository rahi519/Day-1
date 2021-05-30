<?php

echo "<table border='1'>";
for($i=0;$i<=1000;$i++){
	echo"<tr>";
	if($i%2==0){
		echo "<td bgcolor='pink'>$i</td>";
		}else {	
			echo "<td bgcolor='orange'>$i</td>";
		}
	
	echo "</tr>";
}
echo "</table>";