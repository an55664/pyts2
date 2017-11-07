<?php
	if(isset($_GET['x'])){
		$x = $_GET['x'];
		$y = $_GET['y'];
		$z3 = $_GET['z3'];
			if($z3 == '1'){
				$s = $x + $y;
		    }
		    if($z3 == '2'){
				$s = $x - $y;
		    }
			if($z3 == '3'){
				$s = $x * $y;
		    }
			if($z3 == '4'){
				$s = $x / $y;
		    }
		//echo "{$x} + {$y} = {$s}";
    }
	
?>
<form>
   
   <input type='text' name='x' value='<?php 
				if(isset($x)){
					echo "$x";
				}
			?>' />
   <select name = 'z3'>
		<option value = '1' <?php 
				if(isset($z3) && $z3 == '1'){
					echo 'selected';
				}
			    ?>>+</option>
		<option value = '2' <?php 
				if(isset($z3) && $z3 == '2'){
					echo 'selected';
				}
			    ?>>-</option>
		<option value = '3' <?php 
				if(isset($z3) && $z3 == '3'){
					echo 'selected';
				}
			    ?>>x</option>
		<option value = '4' <?php 
				if(isset($z3) && $z3 == '4'){
					echo 'selected';
				}
			    ?>>/</option>
   </select>
   <input type='text' name='y' value='<?php 
				if(isset($y)){
					echo "$y";
				}
			?>' />
   <input type='submit' value='=' />
   <?php
		if(isset($s)){
			echo "$s";
		}
   ?>
</form>