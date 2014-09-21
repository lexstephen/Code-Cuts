<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Week 3</title>
    </head>
	
	<style>
		body	{background-color: #00ace0;
					color: #000;
					font-size: 16pt;
					text-align: center;}
		input	{padding: 20px; margin: 20px;}
		input[type="submit"] {background-color: #ff0;}
		form span {display: block;}
	</style>
    <body>
        
        <form>
            <span>desired number of entries in list:</span> 
			<input type="text" name="input">
            <input type="submit">           
        </form>
        
        <span><?php
        
        $input = isset($_GET['input']) && is_numeric($_GET['input']) ? $_GET['input'] : 10;
        
        for ($i = 1; $i <= $input; $i++)
        {
            echo "$i";
			if ($i != $input) {
				echo " | ";
			}
        }
        ?></span>
        
    </body>
</html>
