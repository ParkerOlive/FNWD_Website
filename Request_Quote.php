<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Request a Quote - Fresh Northwest Design</title>
		<meta name="keywords" content="fresh northwest design, fresh nw design" />
		<meta name="description" content="Fresh Northwest Design specializes in custom etched wine bottles" />
		<meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="favicon.ico" />
	</head>
	
	<body>
		<?php include ('includes/header.php'); ?><?php include ('includes/nav-main.php'); ?>
	
		<div class="wrapper">
			<div id="content">
				<h1>Request a Quote</h1>
	
				<p>Interested in ordering custom bottles or other supplies? Please complete this form and we'll get you a quote within one business day. Minimum order size may apply.</p>
				<p class="strong pwb-ad">Looking for a single <a href="http://www.personalwinebottles.com" title="Personalized Wine Bottles">personalized wine bottle</a>? We recommend: <a href="http://www.personalwinebottles.com" title="Personalized Etched Wine Bottles">PersonalWineBottles.com</a>.</p>
				
				<!--  Beginning of Form-->
				<form method="post" action="cgi-bin/request-a-quote.pl" id="request-quote">
					<input type="hidden" name="recipient" value="info@freshnwdesign.com" />
					<input type="hidden" name="subject" value="Website Quote Request" />
					<input type="hidden" name="env_report" value="REMOTE_HOST,HTTP_USER_AGENT" />
					<input type="hidden" name="required" value="name,email,phone" />
					<input type="hidden" name="redirect" value="http://www.freshnwdesign.com/thanks.php" />
					<input type="hidden" name="From" value="email" /><input name="print_config" type="hidden" value="email" />
					<p class="strong">NOTE: Bold fields are required!</p>
					<fieldset>
						<legend>Contact Details</legend>
						<ol class="reqform">
							<li>
								<label for="name" class="reqd">Name:</label>
								<input id="name" name="name" class="text" type="text" />
							</li>
		
							<li>
								<label for="email" class="reqd">E-mail:</label>
								<input id="email" name="email" class="text" type="text" />	  
							</li>
		
							<li>
								<label for="phone" class="reqd">Phone:</label>
								<input id="phone" name="phone" class="text" type="text" />	  
							</li>
		
							<li>
								<label for="address">Address:</label>
								<input id="address" name="address" class="text" type="text" />
							</li>
						</ol>
					</fieldset>
					<fieldset>
						<legend>Order Details</legend>
						<ol class="reqform">
							<li>
								<label for="NumBottles">Number of bottles:</label>
								<input id="NumBottles" name="Number of Bottles" class="text" type="text" />	  
							</li>
			
							<li>
								<label for="bottleSize">Size of bottles:<br />(standard, 1.5L, etc.)</label>
								<input id="bottleSize" name="Size of Bottles" class="text" type="text" />	  
							</li>
							
							<li>
								<label for="deliveryDate">Requested delivery date:</label>
								<input id="deliveryDate" name="Delivery Date" class="text" type="text" />	  
							</li>
						
							<li>
								<fieldset>
									<legend>Do you have wine or do you need help getting it?:</legend>
									<ol>
										<li>
											<input id="haveWine1" name="Customer supplies wine" class="checkbox" type="checkbox" value="checked" />
											<label for="haveWine1">We'll supply the wine</label>
										</li>
										<li>
											<input id="haveWine2" name="FNWD supplies wine" class="checkbox" type="checkbox" value="checked" />
											<label for="haveWine2">Fresh Northwest will help supply the wine</label>
										</li>
									</ol>
								</fieldset>
							</li>
						
							<li>
								<fieldset>
									<legend>Do you have artwork (PDF, Adobe Illustrator, EPS file or other?):</legend>
									<ol>
										<li>
											<input id="haveArt1" name="Customer has artwork" class="checkbox" type="checkbox" value="checked" />
											<label for="haveArt1">We have artwork</label>
										</li>
										<li>
											<input id="haveArt2" name="FNWD to create artwork" class="checkbox" type="checkbox" value="checked" />
											<label for="haveArt2">Fresh Northwest will create the artwork</label>
										</li>
									</ol>
								</fieldset>  
							</li>
						
							<li>
								<label for ="specialReqs">Comments: </label>
								<textarea id="specialReqs" name="specialReqs" cols="20" rows="5"></textarea>	  
							</li> 
						</ol>
					</fieldset>
					<fieldset class="submit">
						<input class="submit" type="submit" value="Submit" />
					</fieldset>
				</form>
				<!--  End of form-->
			</div><?php include ("includes/nav-sub-order.php"); ?><?php include("includes/footer.php"); ?>
		</div><?php include('includes/analytics.php'); ?>
	</body>
</html>