<?php
    
	$name 	= ucwords($_POST['name']);
	$email 	= $_POST['email'];
    $pno 	= $_POST['pno'];
    $query 	= $_POST['query'];
    
/////////////////////******* Mail For User *********/////////////////////////////

$to      = "info@redmall.co.in";
$subject = "Order placed by ".$name;

$message="<body>
<table border='0' width='500' style=' font-color:red; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:13px'>

<tr height='8'>
<td width='29%'></td>
</tr>
<tr>
<td align='left' colspan='3'>User Details</td>
</tr>

<tr>
<td colspan='3'>&nbsp;&nbsp;&nbsp;&nbsp;User details listed below for Redmall:-</td>
</tr>

  <tr>
    <td colspan='3' align='left'><span style='font-size:14px; color:#000099; font-weight:bold;'>User Detail</span></td>
  </tr>
  <tr>
    <td width='29%' align='left'><strong>Name</strong> </td>
    <td width='6%' align='left'><strong>:</strong></td>
	<td width='65%' align='left'>$title $name $lname</td>
  </tr>
  <tr>
  <td width='29%' align='left'><strong>Email-ID</strong></td>
    <td width='6%' align='left'><strong>:</strong></td>
	<td align='left'>$email</td>
  </tr>
  <tr>
  <td align='left'><strong>Phone No</strong></td>
    <td align='left'><strong>:</strong></td>
	 <td align='left'>$pno</td>
  </tr>
 <tr>
   <td align='left'><strong>Enquiry</strong></td>
    <td align='left'><strong>:</strong></td>
	<td align='left'>$query</td>
  </tr>
 </table>
</body>";

$headers = "Content-type: text/html; charset=iso-8859-1\n";
$headers .= 'From:info@redmall.co.in' . "\r\n" .
	'Reply-To: $email' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
echo "<script>alert('Your Request Sent Successfully');location.href='index.html';</script>";
?>