<!DOCTYPE html>
<!-- Matt Hines - 2013 -->

<?php
$email_to = 'EMAIL_HERE';
$allow_html = TRUE; //TRUE or FALSE
$is_mobile = isset($_GET['mobile']);
?>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Work Request</title>

	<!-- (embedded) favicon -->
	<link rel="icon" type="image/png" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAAgdEVYdFRpdGxlAEluIERldmVsb3BtZW50IGljb24gKHRpbnkpl5u5BgAAAi5JREFUOI3Fk8trE2EUxc+dzPQxNqZqlOkDA4LEBIyPpQ1E2y5aI4X6oCsXghGrQVzbvd2qf0MFKygE3AR8YFuKYMDWtGraha3U1jYh5jEznU5n5rppYmPFTRd+H9/ig/M7XM7hEjNjN0fYFf0vAyLyNjQ03O3pjU4N3o5rZ8LhN0QUIyKpRsjMOx6ArpuDt4rfvq9oP8saZwsl/pEvcOpjWot0ds4BCFS1f8Iul6v/wcNHqrZucEnTea1Q5PH3M/xycorHU5944sMXp//KQBaAd4cBgOZ7Q0OaYZqsrhu8tJrjVDrD2UKJV/IFXsrmeXE1x5nFZfNYIPCcmWszkCTpajwerxYjiSKO+NrAAFApiwFRckl9Fy/1EpG3xuB8NHrH6z24BwAcx0F9fd02mKsXAHou9JkAzorbUh9IJBItv/8CwDbAvAXXTtHS2toky/JxkYjEUCj0bGxsrLujIyxbjr2VB1e0NXBZN6DrG2hsrBdOnDp9TvT7/SPJZLJbURTZdhwwMzR9HSQIICIwAF03sLyWh2FuYn/zXhzY1wTbdtjt8bSLkUikS1EUuTo6CLLcCMuyUSypsBwHguCCr/0QHIex8HVBffr4Rd3b16/SkxPjMbjd7uvDw8Oabdu2ZdlsmJusb5hc1g3OF0v29Ozn0siT0fK12I2i3x8YBXAZgKdSPTEziOhoMBi8HwwGTx72+dpy2Vxhfn5uNp1Ov1NVdRrADIAM/2Xz6L9v4y9qpETqzLLvngAAAABJRU5ErkJggg==">

	<!-- fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

	<style type="text/css">
	html *
	{ 
		color: white;
		font-family: 'Roboto', sans-serif !important;
		border: none;
	}

	a { color: white; text-decoration:none; }

	input[type="text"], textarea
	{
		<?php 
			if ($is_mobile) echo "height: 48px;\nfont-size: 200%;";
			else echo 'height: 24px;';
		?>
		color: black;
		box-sizing: border-box;
		padding: 0 2px 0 2px;
		width: 100%;
		border-width: 1px;
		border-style: solid;
		border-color: #222222;
		border-radius: 3px;
		margin-bottom: 10px;
	}

	input[type="submit"]
	{
		<?php 
			if ($is_mobile) echo "height: 48px;\nwidth: 96px; font-size: 70%;";
			else echo 'height: 24px;';
		?>
		border-radius: 3px;
		border-style: solid;
		border-width: 1px;
		border-top-color: rgba(255, 255, 255, 0.4);
		border-left-color: rgba(255, 255, 255, 0.1);
		border-right-color: rgba(255, 255, 255, 0.1);
		border-bottom-color: rgba(48, 64, 128, 0.4);
		box-shadow: rgba(0, 0, 0, 0.6) 0 0 2px;
		border-top-width: 1px;
		background-color: #44AA66;
		color: white;
	}
	input[type="submit"]:hover { background-color: #66DD88; }
	input[type="submit"]:active { background-color: #228844; }

	.hint { color: rgba(255, 255, 255, 0.5); font-size: 80%; vertical-align: middle; }
	.footer
	{
	 	font-size: 70%;
		text-shadow: 0px 1px 5px rgba(0, 0, 0, 0.4);
		width: 100%;
		text-align: center;
		margin-top: 10px;
	}

	div.box
	{
		background-color: #444444;
		margin: auto;
		margin-top: 64px;
		
		<?php
			if ($is_mobile) echo 'width: 90%; font-size: 200%;';
			else echo 'width: 450px;';
		?>

		border-width: 1px;
		border-radius: 3px;
		border-top-color: rgba(255, 255, 255, 0.2);
		border-left-color: rgba(255, 255, 255, 0.1);
		border-right-color: rgba(255, 255, 255, 0.1);
		border-bottom-color: rgba(255, 255, 255, 0);
		border-style: solid;
		box-shadow: rgba(0, 0, 0, 0.6) 0 0 4px;
	}
	div.container
	{
		text-shadow: 0px 1px 5px rgba(0, 0, 0, 0.6);
		color: white;
		border: none;
	}
	</style>
</head>
<body style="background-color: #1a1a1a">
	<div class="box">
	<div class="container">
		<div style="font-size: 250%; margin-top: 10px; padding-left: 16px">
			<?php echo '<a href="' . $_SERVER['REQUEST_URI'] . '">'?>Work Request</a>
			<span class="hint" style="font-size: 35%; vertical-align: top">V 1.0</span>
		</div>
		<hr style="width: 95%; height: 0; margin-bottom: 10px; border-top: 1px solid rgba(255, 255, 255, 0.2); box-shadow: 0 0 2px rgba(0, 0, 0, 0.4)">
		<?php
		function ValidateEmail($field) //w3schools
		{
			//filter_var() sanitizes the e-mail
			//address using FILTER_SANITIZE_EMAIL
			$field = filter_var($field, FILTER_SANITIZE_EMAIL);

			//filter_var() validates the e-mail
			//address using FILTER_VALIDATE_EMAIL
			return filter_var($field, FILTER_VALIDATE_EMAIL);
		}
		function PrintMessage($string) //display a simple formatted message
		{
			echo "<div style='margin-left: 24px; margin-bottom: 10px'>" . $string . "</div>";
		}

		$isname = isset($_POST['name']) && strlen($_POST['name']) > 0;
		$isemail = isset($_POST['email']) && strlen($_POST['email']) > 0;
		$issubject = isset($_POST['subject']) && strlen($_POST['subject']) > 0;
		$isrequest = isset($_POST['request']) && strlen($_POST['request']) > 0;

		//if "email" is filled out, proceed
		if ($isname && $isemail && $issubject && $isrequest)
		{
			//check if the email address is invalid
			$email = ValidateEmail($_POST['email']);
			if ($email == FALSE)
				PrintMessage("Invalid email.");
			else
			{
				//send email
				$subject = '@ Work Request: ' . strip_tags($_POST['subject']);

				//html email
				if ($allow_html)
				{
					$headers = 'MIME-Version: 1.0' . "\r\n"; 
	    			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	    			$headers .= 'From: ' . $email . "\r\n";
					$headers .= 'Reply-To: ' . $email . "\r\n";

					$message = '<html><body style="margin-top: 10px"><span style="font-size: 125%; font-weight: 800; border-style: solid; border-width: 1px; border-radius: 3px; border-color: rgba(0, 0, 0, 0.5); padding: 0 4px 0 4px">';
					$message .= 'Name: ' . strip_tags($_POST['name']) . '</span><br><div style="border-style: solid; border-width: 1px; border-radius: 3px; border-color: rgba(0, 0, 0, 0.5); padding: 0 4px 0 4px; margin-top: 2px">';
					$message .= $_POST['request'];
					$message .= '</div></body></html>';

					mail($email_to, $subject, $message, $headers);
				}
				//text email
				else
					mail($email_to, $subject, strip_tags($_POST['request']));

				PrintMessage("Thank you for your request.");
			}
		}
		//new form -- (first param to check if anything was sent)
		elseif (!isset($_POST['name']) && !$isemail && !$issubject && !$isrequest)
		{
			//display form
			echo "<form action='work.php' method='post'><fieldset>
			Name<input type='text' maxlength='1024' name='name'><br>
			Email <span class='hint'>(Work will be sent via email)</span><input type='text' maxlength='1024' name='email'><br>
			Subject <span class='hint'>(Max 1024 characters)</span><input type='text' maxlength='1024' name='subject'><br>
			Request "; if ($allow_html) echo "<span class='hint'>(HTML allowed)</span>";
			echo "<textarea name='request' style='height: 200px; margin: 0 0 10px 0'></textarea><br>
			<span class='hint'>Note: there are no guarentees with this form.</span>
			<input style='float: right' type='submit' value='Submit'></fieldset></form>";
		}
		//missing information
		else
		{
			$error = 'Missing ';
			if (!$isname) $error .= 'name, ';
			if (!$isemail) $error .= 'email, ';
			if (!$issubject) $error .= 'subject, ';
			if (!$isrequest) $error .= 'request, ';
			if ($error != 'Missing ')
				PrintMessage(substr($error, 0, strlen($error) - 2) . '.');
		}
		?>
		</div>
	</div>
	<div class="footer"><a style="color: rgba(255, 255, 255, 0.08)" href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.cs.odu.edu%2F~mhines%2Fwork.php">HTML 5 Valid</a></div>
	</body>
</html>
