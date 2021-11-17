<?php
if(ISSET($_POST))
{
	$name=$_POST['name'];
	$street1=$_POST['street1'];
	$street2=$_POST['street2'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$zipcode=$_POST['zipcode'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$radio1=$_POST['radio1'];
	$date=$_POST['date'];
	$stay=$_POST['stay'];
	$radio2=$_POST['radio2'];
	$property1=$_POST['property1'];
	$property2=$_POST['property2'];
	$property3=$_POST['property3'];
	$property4=$_POST['property4'];
	$property5=$_POST['property5'];
	$location=$_POST['location'];
	$budget=$_POST['budget'];
	$message=$_POST['message'];
	$message1=$_POST['message1'];
	
	
	
  $field1="<b>Have you visited the State previously:</b> ".$radio1."<br>"." <b>When are you planing on visiting?:</b> ".$date."<br>"."<b> How long are you planing to stay?:</b> ".$stay."<br>"." <b>Can we help you make travel arrangements?: </b>".$radio2."<br>"."<b>What kind of property are you interested in?:</b> ".$property1.",".$property2.",".$property3.",".$property4."<br>"."<b>What kind of location are you interested in?:</b> ".$location."<br>"."<b>Budget:</b> ".$budget."<br>"."<b>Include any listing numbers or properties of interest here:</b> ".$message."<br>"."<b>Details/Comments:</b> ".$message1."<br>"."<b>Address: </b>"."<br>"."Street1: ".$street1."<br>"."Street2: ".$street2."<br>"."City: ".$city."<br>"."State: ".$state."<br>"."Zip Code: ".$zipcode;
  
}
else
{
echo "Thanks";	
exit();	
}
$Token_Key='#'; // Located in admin section under setup
$WebURL='#'; // CRM Url like https://www.abc.com/crm-folder
//Lead Fields
$post_data=array('name'=>$name,'phone'=>$phone,'email'=>$email, 'field_1'=>$field1);
$PHPCRM = curl_init();
curl_setopt_array($PHPCRM, array(
  CURLOPT_URL=>$WebURL.'/index.php/crm_api/leads/add_lead/'.$Token_Key,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $post_data,
));

$response = curl_exec($PHPCRM);
curl_close($PHPCRM);
header("Location:thanks.php");
//echo $response;
?>
exit();