<?php

	$con=mysqli_connect("localhost","root","","php_project");
  function getPro()
	{
    global $con;
    if((!isset($_GET['cat_id']))){
    $get_pro="select * from post";
    $run_pro=@mysqli_query($con,"SET NAMES utf8");
    $run_pro=@mysqli_query($con,"SET CHARACTER SET utf8");
    $run_pro=mysqli_query($con,$get_pro);
    while($row_pro=mysqli_fetch_array($run_pro))
			{
				
        $pro_title=$row_pro['title'];
				$pro_cat=$row_pro['cat_id'];
				$pro_price=$row_pro['price'];
				$pro_ppr=$row_pro['ppr'];
        $pro_image=$row_pro['image'];
        $pro_id=$row_pro['id'];
  
      }
    }
  }

  	//getting IP User
	function getIp()
	{	
		$ip=$_SERVER['REMOTE_ADDR'];
		if(!empty($_SERVER['HTTP_CLIENT_IP']))
		{
			$ip=$_SERVER['HTTP_CLIENT_IP'];
		}
		elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		{
			$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];	
		}
		return $ip;
	}
?>
