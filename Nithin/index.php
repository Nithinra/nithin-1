<?php


		$myfile = fopen("location_data.txt", "r") or die("Unable to open file!");
		$items=fread($myfile,filesize("location_data.txt"));
		$item=explode(",",$items);
		$length=count($item);
		for($i=0;$i<count($item)-1;$i++)
		{
			    $address =$item[$i];
        		$address = str_replace(" ", "+", $address);
        		echo $item[$i];
        		?>

        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
        <?php
	}?>