<?php


echo "Problem : Find the number of islands";
echo PHP_EOL; 


$rows = readline('Enter total rows: ');
$cols = readline('Enter total columns: ');
 
$input = [];

for($row=0; $row<$rows; $row++)
{
	for($col=0; $col<$cols; $col++)
	{
		$input[$row][$col] = readline("Enter value for ". $row . " row, " . $col . " column: ");
	}
}


echo PHP_EOL; 
echo "Given Input : ".PHP_EOL;
for($row=0; $row<$rows; $row++){ 
    for($col=0; $col<$cols; $col++) { 
    	echo $input[$row][$col] . " ";
    } 
echo PHP_EOL; 
} 


$count = 0; 
for($row=0; $row<$rows; $row++){ 
    for($col=0; $col<$cols; $col++) { 
        if($input[$row][$col] == 1) { 
            $count++; 
            makeZero($input, $row, $col);
        }
    } 
} 
echo PHP_EOL; 
echo "Total Islands " . $count; 
echo PHP_EOL; 


function makeZero(&$input, $row, $col)
{ 
    if($row < 0 || $row >= count($input) || 
        $col < 0 || $col >= count($input[$row])
        || $input[$row][$col] == 0) { 
            return;
        } 

        $input[$row][$col] = 0; 
        makeZero($input, $row - 1, $col); 
        makeZero($input, $row + 1, $col); 
        makeZero($input, $row, ($col - 1));             
        makeZero($input, $row, ($col + 1)); 
} 
