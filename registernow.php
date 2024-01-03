<?php
include('configs/function.php');
function alertmessage1($msg){
	echo("<script language='JavaScript'>\n");
	echo("alert('$msg')\n");
	echo("</script>");
	} 
if(!empty($_POST)){
	
	$name=$_POST['name'];
    $emailid=$_POST['emailid'];
	$phoneno=$_POST['phoneno'];
	$citycountry=$_POST['citycountry'];
	$message=$_POST['message'];
	
	
	$subject='Register Now LStrategyQ';	
    $dates=date('Y-m-d');	
	$status='0';
		
	$sqls = "INSERT INTO all_query (
	name,
	form_name,
	email_id,
	mobile_no,
	message,
	dates,
	status)
	VALUES ('$name', '$subject', '$emailid', '$phoneno', '$message', '$dates', '$status')";
	$execute = mysqli_query($con,$sqls);	
	
	
	

$body ="<html><head>
<title>Register Now LStrategyQ</title>
</head>
<body>
<table width='44%' cellpadding='4' cellspacing='1' bgcolor='#000000'>
<tr>
<td bgcolor='#FFFFFF' colspan='2'><strong>Contact Detail of $name </strong></td>
</tr>
<tr>
<td width='45%' bgcolor='#FFFFFF'><strong>Name : </strong></td>
<td width='55%' bgcolor='#FFFFFF' >$name</td>
</tr>
<tr>
<td bgcolor='#FFFFFF'><strong>Email ID :</strong></td>
<td bgcolor='#FFFFFF'>$emailid</td>
</tr>
<tr>
<td bgcolor='#FFFFFF'><strong>Phone No :</strong></td>
<td bgcolor='#FFFFFF'>$phoneno</td>
</tr>
<tr>
<td bgcolor='#FFFFFF'><strong>City Country :</strong></td>
<td bgcolor='#FFFFFF'>$citycountry</td>
</tr>
<tr>
<td bgcolor='#FFFFFF'><strong>Message :</strong></td>
<td bgcolor='#FFFFFF'>$message</td>
</tr>


</table>
</body>	</html>";

		    $subject='Register Now LStrategyQ';	
			$to = "info.lstrategique@gmail.com";

	
			$headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= "From: ".$name."  <".$emailid.">" . "\r\n";
		 
		  $sendmail = mail($to, $subject,$body, $headers);
		  
		  if($sendmail!=''){
		  alertmessage1("Thank You $name, We have successfully received your details.");
		  echo"<html><body><form name='enqform' action='index.php' method='post'>
		  </form>	
		  <script language='javascript'>
		  document.enqform.submit();
		  </script></body></html>";
		  }else{
		  alertmessage1("Problem in Sending Email Please Try Again.");
		  echo"<html><body><form name='enqform' action='index.php' method='post'>
		  </form>	
		  <script language='javascript'>
		  document.enqform.submit();
		  </script></body></html>";
	}
	

}
?>