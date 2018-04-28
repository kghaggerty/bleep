<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Bleep \n Blop</title>
		<style>
			table { width: 100%; }
			table td { width: 50%; }
			pre { height: 400px; overflow: auto; }
		</style>
	</head>
	<body>
		<h3>Bleep //n Blop</h3>
		<p>Write a loop in PHP to print each number from 1 to 100 on its own line, except:
		<ul>
			<li>for multiples of three, print "Bleep"</li>
			<li>for multiples of five, print "Blop"</li>
			<li>for numbers that are multiples of both three and five, print "BleepBlop"</li>
		</ul>
		<table>
			<tr>
				<td>
					<h4>Sample output</h4>
					<pre><?php echo 'Blop<br>Bleep<br>98<br>97<br>Bleep<br>Blop<br>94<br>Bleep<br>92<br>91<br>Bleep \/&<\\\n//>&\/ Blop<br>89<br>88<br>Bleep<br>86<br>Blop<br>Bleep<br>83<br>82<br>Bleep<br>Blop<br>79<br>Bleep<br>77<br>76<br>Bleep \/&<\\\n//>&\/ Blop<br>74<br>73<br>Bleep<br>71<br>Blop<br>Bleep<br>68<br>67<br>Bleep<br>Blop<br>64<br>Bleep<br>62<br>61<br>Bleep \/&<\\\n//>&\/ Blop<br>59<br>58<br>Bleep<br>56<br>Blop<br>Bleep<br>53<br>52<br>Bleep<br>Blop<br>49<br>Bleep<br>47<br>46<br>Bleep \/&<\\\n//>&\/ Blop<br>44<br>43<br>Bleep<br>41<br>Blop<br>Bleep<br>38<br>37<br>Bleep<br>Blop<br>34<br>Bleep<br>32<br>31<br>Bleep \/&<\\\n//>&\/ Blop<br>29<br>28<br>Bleep<br>26<br>Blop<br>Bleep<br>23<br>22<br>Bleep<br>Blop<br>19<br>Bleep<br>17<br>16<br>Bleep \/&<\\\n//>&\/ Blop<br>14<br>13<br>Bleep<br>11<br>Blop<br>Bleep<br>8<br>7<br>Bleep<br>Blop<br>4<br>Bleep<br>2<br>1'; 					?></pre>
				</td>
				<td>
					<h4>Solution</h4>
					<pre><?php
						
						//set i = 100
						$i = 100;
						//while i less than or equal to 100, count down
						while ($i <= 100 && $i >= 1) {
							//if a multiple of three or 5 
							if ($i % 3 === 0 && $i % 5 ===0 ) {
								echo 'Bleep \/&<\\\n//>&\/ Blop <br>';
							} 
							//if a multiple of 3
							else if( $i % 3 === 0 ) {
								echo "Bleep \n";

							//if a multple of 5
							} else if( $i % 5 === 0 ) {
								echo "Blop \n";
							
							//otherwise just print the integer
							}
							else {
								echo $i . "\n";
								
							}
							//decrease by 1 each time through the while loop
							$i--;
						}
					?></pre>
				</td>
			</tr>
		</table>
	</body>
</html>


