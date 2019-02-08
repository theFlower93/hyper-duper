<?php

function math($symbol, $n)
{
	$symbol = htmlspecialchars($symbol);

	if( (int)$n < 0 )
		echo "Error: N must be >= 0"."<hr />";
	else {
		if( $symbol === "+" ){
			echo "<table border='1' cellpadding='10' cellspacing='0'><tr>";
				for( $i = 1; $i <= $n; $i++ ){
					echo '<td>';
					for( $j = 1; $j <= $n; $j++ ){
						echo $i . $symbol . $j . ' = ' . ($i + $j) . '<br />';
					}
					echo '</td>';
				}
			echo "</tr></table><hr />";
		} elseif( $symbol === "-" ){
			echo "<table border='1' cellpadding='10' cellspacing='0'><tr>";
				for( $i = 1; $i <= $n; $i++ ){
					echo '<td>';
					for( $j = 1; $j <= $n; $j++ ){
						echo $i . $symbol . $j . ' = ' . ($i - $j) . '<br />';
					}
					echo '</td>';
				}
			echo "</tr></table><hr />";
		} elseif( $symbol === "*" ){
			echo "<table border='1' cellpadding='10' cellspacing='0'><tr>";
				for( $i = 1; $i <= $n; $i++ ){
					echo '<td>';
					for( $j = 1; $j <= $n; $j++ ){
						echo $i . $symbol . $j . ' = ' . ($i * $j) . '<br />';
					}
					echo '</td>';
				}
			echo "</tr></table><hr />";
		} elseif( $symbol === "/" ){
			echo "<table border='1' cellpadding='10' cellspacing='0'><tr>";
				for( $i = 1; $i <= $n; $i++ ){
					echo '<td>';
					for( $j = 1; $j <= $n; $j++ ){
						echo $i . $symbol . $j . ' = ' . ($i / $j) . '<br />';
					}
					echo '</td>';
				}
			echo "</tr></table><hr />";
		} else
			echo 'Error: Symbols only: "+", "-", "*", "/"' . '<hr />';
	}
}

// testing
math("+", 5);
math("-", -8);
math("/", 4);


function calc($OP, $N)
{
	$OP = htmlspecialchars($OP);

	if( (int)$N < 0 )
		echo "Error: N must be >= 0" . "<hr />";
	else {
		if( $OP === "+" ){
			echo "<table border='1' cellspacing='0' cellpadding='10'>";
				echo "<tr>" . "<td>" . '+' . "</td>";
					for( $i = 0; $i <= $N; $i++ )
						echo "<td>$i</td>";
				echo "</tr>";
			for( $tr = 0; $tr <= $N; $tr++ ){
				echo "<td>$tr</td>";
				for( $td = 0; $td <= $N; $td++ ){
					echo "<td>" . ($tr + $td) . "</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		} elseif( $OP === "-" ){
			echo "<table border='1' cellspacing='0' cellpadding='10'>";
				echo "<tr>" . "<td>" . '-' . "</td>";
					for( $i = 0; $i <= $N; $i++ )
						echo "<td>$i</td>";
				echo "</tr>";
			for( $tr = 0; $tr <= $N; $tr++ ){
				echo "<td>$tr</td>";
				for( $td = 0; $td <= $N; $td++ ){
					echo "<td>" . ($tr - $td) . "</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		} elseif( $OP === "*" ){
			echo "<table border='1' cellspacing='0' cellpadding='10'>";
				echo "<tr>" . "<td>" . '*' . "</td>";
					for( $i = 0; $i <= $N; $i++ )
						echo "<td>$i</td>";
				echo "</tr>";
			for( $tr = 0; $tr <= $N; $tr++ ){
				echo "<td>$tr</td>";
				for( $td = 0; $td <= $N; $td++ ){
					echo "<td>" . ($tr * $td) . "</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		} elseif( $OP === "/" ){
			echo "<table border='1' cellspacing='0' cellpadding='10'>";
				echo "<tr>" . "<td>" . '/' . "</td>";
					for( $i = 0; $i <= $N; $i++ )
						echo "<td>$i</td>";
				echo "</tr>";
			for( $tr = 0; $tr <= $N; $tr++ ){
				echo "<td>$tr</td>";
				for( $td = 0; $td <= $N; $td++ ){
					echo "<td>" . @round(($tr / $td), 2) . "</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		} else
			echo 'Error: Symbols only: "+", "-", "*", "/"' . '<hr />';
	}
}

// testing
calc('/', 3);
