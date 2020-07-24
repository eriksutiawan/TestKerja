<?php

function testOne(int $val){
	$tamp = true;
	$cek = true;
	if($val < 0){
		echo("Inputan harus positif");
		return;
	}
	for($i=0; $i<$val; $i++)
	{
		for($j=0; $j<$val; $j++)
	  	{
	   		if($i%2 != 0)
	   		{
		 		if($j==0 or $j==$val-1)
		  			echo("@");
		 		else
		  			echo(" ");
		 		$cek = false;
	   		}
	   		else
	   		{
		 		$cek = true;
		 		if(($tamp and $j==1) or (!$tamp and $j==$val-2))
	   			{
		 			echo(" ");
	   			}
	 			else
				{
	  				echo("@");
	 			}
	  		}
	 	}
	  	$tamp = $cek ? !$tamp : $tamp;
		echo("</br>");
	}
}

testOne(14);