<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
}
$amount = $_POST['amount'];
$name = $_POST['name'];
$donor_email = $_POST['donor_email'];
$phone = $_POST['phone'];


//Validate first
if(IsInjected($donor_email))
{
    echo "Invalid email value!";
    exit;
}

$email_from = "$donor_email";//<== update the email address
$email_subject = "Confirmation of Payment Method for $name ";
$email_body = "THANK YOU for your payment, this confirms the completion of the payment process! \n \n".
	"Donor: $name \n".
    "Payment Method Chosen: Mail \n".
    "Donation amount: $ $amount \n".
    "Email: $donor_email \n".
    "Phone: $phone \n \n".

    "Please refer to the email \"Receipt of Donation to Future Educational Films, Inc.\" for details on your donation and for tax information. Once again, thank you for supporting our project.\n \n".

	"Sincerely,\n \n".
	"The Camino Documentary Team \n".
	"Future Educational Films, Inc.\n".
	"1327 SE Tacoma St. #208\n".
	"Portland, OR, USA 97202\n".
	"1-503-206-4968\n".
	"\n ";
    

$to = "$donor_email";//<== update the email address
$headers = "From: caminodoc@gmail.com \r\n";
$headers .= "Reply-To: caminodoc@gmail.com \r\n";
$headers .= "Bcc: caminodoc@gmail.com \r\n"; 
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
     echo('  
    <div class="content">
    <h1>Thank You...</h1> 
    <p><strong>...for your generous support.
    Your donation brings us that much closer to finishing the film. </strong></p>
    
    <p>Please remember to complete the donation of your committed amount, <strong style="color:#334d77; font-size:1.15em">$'.$amount.'</strong>, by addressing and mailing your check to: </p>
    <p>
	<em>Future Educational Films, Inc.<br />
    Attn: Fund Development<br />
    1327 SE Tacoma St. #208<br />
    Portland, OR 97202</em>
    </p>
    
    <p>You will also receive two <span style="color:#993322">email confirmations</span> from us: one containing the details of your donation, which you may print for your records and tax purposes; and another containing the above mailing information.
	</p>
    <p style="font-size:.85em;">The Camino Documentary is an independent production of Future Educational Films, Inc. - a 501(c)(3) non-profit. Any individual donation amount above the cost to create your gift(s) is tax-deductible to the donor as a charitable income tax deduction in the United States, to the extent allowed by law.  
</p>
	<p><a href="get_involved.php">Return to the Get Involved page</a></p>
  </div>
'."\n");


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 
