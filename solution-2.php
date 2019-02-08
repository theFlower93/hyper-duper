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
						echo $i.$symbol.$j.' = '.($i+$j).'<br />';
					}
					echo '</td>';
				}
			echo "</tr></table><hr />";
		} elseif( $symbol === "-" ){
			echo "<table border='1' cellpadding='10' cellspacing='0'><tr>";
				for( $i = 1; $i <= $n; $i++ ){
					echo '<td>';
					for( $j = 1; $j <= $n; $j++ ){
						echo $i.$symbol.$j.' = '.($i-$j).'<br />';
					}
					echo '</td>';
				}
			echo "</tr></table><hr />";
		} elseif( $symbol === "*" ){
			echo "<table border='1' cellpadding='10' cellspacing='0'><tr>";
				for( $i = 1; $i <= $n; $i++ ){
					echo '<td>';
					for( $j = 1; $j <= $n; $j++ ){
						echo $i.$symbol.$j.' = '.($i*$j).'<br />';
					}
					echo '</td>';
				}
			echo "</tr></table><hr />";
		} elseif( $symbol === "/" ){
			echo "<table border='1' cellpadding='10' cellspacing='0'><tr>";
				for( $i = 1; $i <= $n; $i++ ){
					echo '<td>';
					for( $j = 1; $j <= $n; $j++ ){
						echo $i.$symbol.$j.' = '.($i/$j).'<br />';
					}
					echo '</td>';
				}
			echo "</tr></table><hr />";
		} else
			echo 'Error: Symbols only: "+", "-", "*", "/"'.'<hr />';
	}
}

// testing
math("+", 5);
math("-", -8);
math("/", 5);


function calc($symbol, $n)
{
	$symbol = htmlspecialchars($symbol);

	if( (int)$n < 0 )
		echo "Error: N must be >= 0"."<hr />";
	else {
		if( $symbol === "+" ){
			echo "<table border='1' cellspacing='0' cellpadding='10'>";
				echo "<tr>"."<td>".'+'."</td>";
					for( $i=1; $i<=$n; $i++ )
						echo "<td>$i</td>";
				echo "</tr>";
			for( $tr=1; $tr<=$n; $tr++ ){
				echo "<td>$tr</td>";
				for( $td=1; $td<=$n; $td++ ){
					echo "<td>".($tr+$td)."</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		} elseif( $symbol === "-" ){
			echo "<table border='1' cellspacing='0' cellpadding='10'>";
				echo "<tr>"."<td>".'-'."</td>";
					for( $i=1; $i<=$n; $i++ )
						echo "<td>$i</td>";
				echo "</tr>";
			for( $tr=1; $tr<=$n; $tr++ ){
				echo "<td>$tr</td>";
				for( $td=1; $td<=$n; $td++ ){
					echo "<td>".($tr-$td)."</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		} elseif( $symbol === "*" ){
			echo "<table border='1' cellspacing='0' cellpadding='10'>";
				echo "<tr>"."<td>".'*'."</td>";
					for( $i=1; $i<=$n; $i++ )
						echo "<td>$i</td>";
				echo "</tr>";
			for( $tr=1; $tr<=$n; $tr++ ){
				echo "<td>$tr</td>";
				for( $td=1; $td<=$n; $td++ ){
					echo "<td>".($tr*$td)."</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		} elseif( $symbol === "/" ){
			echo "<table border='1' cellspacing='0' cellpadding='10'>";
				echo "<tr>"."<td>".'/'."</td>";
					for( $i=0; $i<=$n; $i++ )
						echo "<td>$i</td>";
				echo "</tr>";
			for( $tr=0; $tr<=$n; $tr++ ){
				echo "<td>$tr</td>";
				for( $td=0; $td<=$n; $td++ ){
					echo "<td>".@round(($tr/$td), 2)."</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		} else
			echo 'Error: Symbols only: "+", "-", "*", "/"'.'<hr />';
	}
}

// testing
calc('/', 3);
