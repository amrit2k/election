<?php
	 $string_file1 = file_get_contents('http://www.prsindia.org/mptrack/15loksabha/meenasingh');
	 $match1 = preg_match_all('/<td class="tdata">(.*)<\/td>/', $string_file1, $title1);
	 $i1 = 0;
	 $stVal1 = array();
	 foreach ($title1[1] as $t1) {
		 $i1++;
	 	$stVal1[$i1] = $t1;
		if($i1 == 6)
		break;
	}
	//$res = array();
	//$res[1] = $stVal1[1];
     echo @$stVal1[6];
?>