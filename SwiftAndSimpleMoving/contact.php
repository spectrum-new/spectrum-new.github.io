<!DOCTYPE html>
<html>
<head>
<title>LUXURY Lash and Browtique Contact - Ottawa</title>
<link rel="stylesheet" type="text/css" href="main.css?">
<link href="https://fonts.googleapis.com/css?family=Cutive+Mono|Source+Sans+Pro" rel="stylesheet"><script>
$(function () {
    $('.fadein img:gt(0)').hide();
    setInterval(function () {
        $('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');
    }, 2000);
});
</script>

</head>
<body>
<center>
<?php require 'header.php'; ?>

<p> 
&nbsp;<a href="https://www.instagram.com/luxurylashandbrowtique/"><img border="0" alt="Instagram" src="images/instalogo.png" width="30" height="30">
&nbsp;<a href="https://www.facebook.com/luxurylashandbrowtique/"><img border="0" alt="Facebook" src="images/facebooklogo.png" width="30" height="30">
</p>

<p> <a style="color:#000000";> PHONE (CALL OR TEXT): (613) 291-1120 </a></p>

<table class="contable">
	<tr>
		<td>
		<iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=393%20Fairlakes%20Way+(Luxury%20Lash%20and%20Browtique)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" width="500" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
		</td>
		<td>
			<form name="contactform" method="post" action="contacted.php">
				<table class="formtable" width="450px">
					<tr>
						<td>
							<label for="first_name">First Name</label>
						</td>
						<td>
					<input type="text" name="first_name" maxlength="50" size="30">
						</td>
					</tr>
					<tr>
						<td>
							<label for="last_name">Last Name</label>
						</td>
						<td>
					<input type="text" name="last_name" maxlength="50" size="30">
						</td>
					</tr>
					<tr>
						<td>
							<label for="email">Email Address</label>
						</td>
						<td>
					<input type="text" name="email" maxlength="80" size="30">
						</td>
					</tr>
					<tr>
						<td>
							<label for="telephone">Telephone Number</label>
						</td>
						<td>
					<input type="text" name="telephone" maxlength="30" size="30">
						</td>
					</tr>
					<tr>
						<td>
							<label for="comments">Comments</label>
						</td>
						<td>
					<textarea name="comments" maxlength="1000" cols="25" rows="6"></textarea>
						</td>
					</tr>
					<tr>
					<td colspan="2" style="text-align:center">
					<input type="submit" value="Submit">
						</td>
					</tr>
				</table>
			</form>
		</td>
	</tr>
</table>
<?php require 'footer.php'; ?>




</center>
<body>
</html>