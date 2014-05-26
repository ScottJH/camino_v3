<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$amount = $_POST['amount'];
$name = $_POST['name'];
$donor_email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$postal = $_POST['postal'];
$country = $_POST['country'];
$notes = $_POST['notes'];
$referral = $_POST['referral'];
$email_list = $_POST['email-list'];
$donate_anonymous = $_POST['donate-anonymous'];
$no_gift = $_POST['no-gift'];
$gift_listing = $_POST['gift-listing'];
$gift_viewtrailer = $_POST['gift-viewtrailer'];
$gift_viewfilm = $_POST['gift-viewfilm'];
$gift_posterdownload = $_POST['gift-posterdownload'];
$gift_dvd = $_POST['gift-dvd'];
$gift_signedposter = $_POST['gift-signedposter'];
$gift_specialthanks = $_POST['gift-specialthanks'];
$gift_imdbthanks = $_POST['gift-imdbthanks'];
$gift_thankyoucall = $_POST['gift-thankyoucall'];
$gift_calendar = $_POST['gift-calendar'];
$gift_cards = $_POST['gift-cards'];
$gift_uspremiere = $_POST['gift-uspremiere'];
$gift_spainpremiere = $_POST['gift-spainpremiere'];
$gift_premierevip = $_POST['gift-premierevip'];
$gift_feedbackgroup = $_POST['gift-feedbackgroup'];
$gift_consultantcredit = $_POST['gift-consultantcredit'];
$gift_imdbconsultant = $_POST['gift-imdbconsultant'];
$gift_skypesession = $_POST['gift-skypesession'];
$gift_screening = $_POST['gift-screening'];
$gift_flightpdx = $_POST['gift-flightpdx'];
$gift_nightstay = $_POST['gift-2nightstay'];
$gift_execproducer = $_POST['gift-execproducer'];
$gift_imdbexecproducer = $_POST['gift-imdbexecproducer'];


//Validate first
if(empty($amount)) 
{
    echo "Please enter a donation amount";
    exit;
}

if(empty($name)||empty($donor_email)||empty($phone)||empty($address)||empty($city)||empty($state)||empty($postal)||empty($country)) 
{
    echo "Name, email, phone number and address are mandatory!";
    exit;
}

if(empty($referral)) 
{
    echo "Please let us know how you heard about the film/campaign";
    exit;
}

if(IsInjected($donor_email))
{
    echo "Invalid email value!";
    exit;
}

$email_from = "$donor_email";//<== update the email address
$email_subject = "Confirmation/Receipt of Donation to Future Educational Films, Inc.";
$email_body = "Donation Receipt for: $name \n".
    "Donation amount: $ $amount \n".
    "Email: $donor_email \n".
    "Phone: $phone \n".
    "Street Address: $address \n".
    "City: $city \n".
    "State/Province/Region: $state \n".
    "Postal/Zip Code: $postal \n".
    "Country: $country \n \n".
    "Donor gifts chosen: $no_gift \n $gift_listing $gift_viewtrailer $gift_viewfilm $gift_posterdownload $gift_dvd $gift_signedposter $gift_specialthanks $gift_imdbthanks $gift_thankyoucall $gift_calendar $gift_cards $gift_uspremiere $gift_spainpremiere $gift_premierevip $gift_feedbackgroup $gift_consultantcredit $gift_imdbconsultant $gift_skypesession $gift_screening $gift_flightpdx $gift_nightstay $gift_execproducer $gift_imdbexecproducer \n \n".
    "Special Notes: $notes \n".
    "How did you hear about us? $referral \n".
    "$email_list \n".
    "$donate_anonymous \n".
	"\n ";
    
$to = "agzabel@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $donor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
     echo('  

        <h3><font style="color:#6b6a66;">Step 1: Your donation and contact information</font>
            <br />&nbsp;&nbsp;&nbsp;Step 2: Payment method</h3>
		<h2>Donation Amount: $'.$amount.'</h2>
		<p>Please select one of the three donation methods below. You may give via Paypal (no account required), by bank (transfer or direct-deposit), or by mailing us a check.</p>
		<strong>Paypal:</strong>
		<form target="_top" action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<input type="hidden" name="cmd" value="_cart">
		<input type="hidden" name="business" value="info@caminodocumentary.org">
		<input type="hidden" name="lc" value="US">
		<input type="hidden" name="item_name" value="Donation">
		<input type="hidden" name="amount" value="'.$amount.'">
		<input type="hidden" name="currency_code" value="USD">
		<input type="hidden" name="button_subtype" value="products">
		<input type="hidden" name="no_note" value="0">
		<input type="hidden" name="add" value="1">
		<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
		<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
		<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>

		<form target="_top" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<a href="get_involved.php?page=donation-form/confirm_bank.php"><img src="../images/btn_donate-bank.gif" width="190" heighth="30" border="0"></a>
		</div>
		<div id="donate-mail" target="dynamic">
			<a href="get_involved.php?page=donation-form/confirm_mail.php"><img src="../images/btn_donate-mail.gif" width="190" heighth="30" border="0"></a>
		</div>
            <p style="font-size:.8em;">The Camino Documentary is an independent production of Future Educational Films, Inc. - a 501(c)(3) non-profit. Any individual donation amount above the cost to create your gift(s) is tax-deductible to the donor as a charitable income tax deduction in the United States, to the extent allowed by law.  
</p>
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