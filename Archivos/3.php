<center>  <?php

$username=$_POST['user'];
$password=$_POST['password'];



// Otro código de tu sistema aquí... 

if (strlen($_POST['user']) < 8) 
{ 
    echo "User length needs to be above 8 chars"; 
    echo "<meta http-equiv=Refresh content=3;url=index_en.php>";
} 



//$id_user=1;
//$id_group=3;
//$active=1;
//$callingcard_pin=rand(1,999999);
$email=$_POST['email'];
$idioma=$_POST['idioma'];
$plan=$_POST['plan'];

$tariff_id=2;

$credit=0.000000000000000;
$clientid="";
$agreement_number=0000000001;
//$agreement_date=DATE

$taxation_country=105;
$vat_number="";
$address_id=38;
$accounting_number="";
//$uniquehash=ALEATORIOO
$send_invoice_types=18;

$recordings_email="";
$recording_hdd_quota=0;
$tax_id=42;
$invoice_zero_calls=0;

$pbx_pool_id=1;
$comment="";


$conexion=mysql_connect("localhost","mor","mor") or die ("Connection troubles");
	mysql_select_db("mor",$conexion) or die ("Troubles in database selection");
	$consulta=mysql_query("select * from devices order by id DESC limit 1",$conexion) 
	or die ("Problemas al buscar.".mysql_error());
	while ($reg=mysql_fetch_array($consulta))
{
$indicativo=$reg['id'];
}
	mysql_close($conexion);
$super=$indicativo+1;
$primary_device_id=$super;
if (!$username)
{
echo "Username needed";
echo "<meta http-equiv=Refresh content=3;url=index_en.php>";
}
else{

	if (!$password)
	{
	echo "Password needed";
	echo "<meta http-equiv=Refresh content=3;url=index.php>";
	}else{

		if (!$idioma)
		{
		echo "Language needed";
		echo "<meta http-equiv=Refresh content=3;url=index.php>";
		}else{

			if (!$email)
			{
			echo "E-mail needed";
			echo "<meta http-equiv=Refresh content=3;url=index.php>";
			}else{

				if (!$plan)
				{
				echo "Plantype needed";
				echo "<meta http-equiv=Refresh content=3;url=index.php>";
				}
				else{
				
	$conexion=mysql_connect("localhost","mor","mor") or die ("Connection troubles");
	mysql_select_db("mor",$conexion) or die ("Troubles in database selection");
	$registros=mysql_query("insert into users (username,password,tariff_id,primary_device_id,credit,clientid,agreement_number,taxation_country,vat_number,address_id,accounting_number,send_invoice_types,recordings_email,recording_hdd_quota,tax_id,invoice_zero_calls,pbx_pool_id,comment) values ('$username','$password','$tariff_id','$primary_device_id','$credit','$clientid','$agreement_number','$taxation_country','$vat_number','$address_id','$accounting_number','$send_invoice_types','$recordings_email','$recording_hdd_quota','$tax_id','$invoice_zero_calls','$pbx_pool_id','$comment')",$conexion) 
	or die ("Problemas al guardar.".mysql_error());
	mysql_close($conexion);

$conexion=mysql_connect("localhost","mor","mor") or die ("Connection troubles");
	mysql_select_db("mor",$conexion) or die ("Troubles in database selection");
	$consulta=mysql_query("select * from users order by id DESC limit 1",$conexion) 
	or die ("Problemas al buscar.".mysql_error());
	while ($reg=mysql_fetch_array($consulta))
{
$ids=$reg['id'];
}
	mysql_close($conexion);


$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
$cad = "";
for($i=0;$i<12;$i++) {
$cad = substr($str,rand(1,62),10);
}
$str2 = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
$cad2 = "";
for($i=0;$i<12;$i++) {
$cad2 = substr($str,rand(1,62),10);
}
$str3 = "1234567890";
$cad3 = "";
for($i=0;$i<12;$i++) {
$cad3 = substr($str,rand(1,62),10);
}

$description="Device_user".$username;
$name=$cad;
$secret=$cad2;
$context="mor_local";	
$ipaddr="";	
$port=5060;
$accountcode=$primary_device_id;	
$callerid="";	
$extension=$cad;
$username=$cad;
$device_type="SIP";	
$user_id=$ids;
$nat="yes";
$qualify="1000";
//$devicegroup_id???
$progressinband="no";
$pin=$cad3;	
$recording_keep=0;
$recording_email="";
$language="en";	
$calleridpres="";
$reg_status="UNKNOWN";	
$forward_did_id=-1;
$control_callerid_by_cids="";
$subscribemwi="no";	
$proxy_port=5060;	
$custom_sip_header="";	
$defaultuser="user";	
$comment="";








	$conexion=mysql_connect("localhost","mor","mor") or die ("Connection troubles");
	mysql_select_db("mor",$conexion) or die ("Troubles in database selection");
	$registros=mysql_query("insert into devices (description,name,secret,context,ipaddr,port,accountcode,callerid,extension,username,device_type,user_id,nat,qualify,progressinband,pin,recording_keep,recording_email,language,calleridpres,reg_status,forward_did_id,control_callerid_by_cids,subscribemwi,proxy_port,custom_sip_header,defaultuser,comment) values ('$description','$name','$secret','$context','$ipaddr','$port','$accountcode','$callerid','$extension','$username','$device_type','$user_id','$nat','$qualify','$progressinband','$pin','$recording_keep','$recording_email','$language','$calleridpres','$reg_status','$forward_did_id','$control_callerid_by_cids','$subscribemwi','$proxy_port','$custom_sip_header','$defaultuser','$comment')",$conexion) 
	or die ("Problemas al guardar2.".mysql_error());
	mysql_close($conexion);



$conexion=mysql_connect("localhost","mor","mor") or die ("Connection troubles");
	mysql_select_db("mor",$conexion) or die ("Troubles in database selection");
	$consulta=mysql_query("select * from devices order by id DESC limit 1",$conexion) 
	or die ("Problemas al buscar.".mysql_error());
	while ($reg=mysql_fetch_array($consulta))
{
$id2=$reg['id'];
}
	mysql_close($conexion);


$conexion=mysql_connect("localhost","mor","mor") or die ("Connection troubles");
	mysql_select_db("mor",$conexion) or die ("Troubles in database selection");
	$registros=mysql_query("insert into voicemail_boxes (mailbox,device_id) values ('$name','$id2')",$conexion) 
	or die ("Problemas al guardar3.".mysql_error());
	mysql_close($conexion);







echo "Succesfully charged";
				}
			}
		}		
}




}


?>


