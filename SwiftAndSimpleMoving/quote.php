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

<table class="contable">
	<form name="contactform" method="post" action="contacted.php">
		<table class="formtable" width="450px">
			<tr><td><b>Contact Info</b></td></tr>
			<tr>
				<td><label for="first_name">First Name</label></td>
				<td><input type="text" name="first_name" maxlength="50" size="40"></td>
			</tr>
			<tr>
				<td><label for="last_name">Last Name</label></td>
				<td><input type="text" name="last_name" maxlength="50" size="40"></td>
			</tr>
			<tr>
				<td><label for="telephone">Daytime Phone Number</label></td>
				<td><input type="text" name="telephone" maxlength="30" size="40"></td>
			</tr>
			<tr>
				<td><label for="email">Email Address</label></td>
				<td><input type="text" name="email" maxlength="80" size="40"></td>
			</tr>
<tr><td colspan="2"><hr></td></tr>
			<tr><td><b>Move Info</b></td></tr>
			<tr>
				<td><label for="move_date">Move Date</label></td>
				<td><input type="text" name="move_date" maxlength="50" size="40"></td>
			</tr>
			<tr>
				<td><label for="alt_date">Alternative dates, if applicable</label></td>
				<td><input type="text" name="alt_date" maxlength="50" size="40"></td>
			</tr>
			<tr>
				<td><label for="night_telephone">Evening Telephone Number</label></td>
				<td><input type="text" name="night_telephone" maxlength="30" size="40"></td>
			</tr>
			<tr>
				<td><label for="item_list">General Item List</label></td>
				<td><textarea name="item_list" maxlength="1000" cols="41" rows="6"></textarea></td>
			</tr>
<tr><td colspan="2"><hr></td></tr>
			<tr><td><b>Moving from</b></td></tr>
			<tr>
				<td><label for="from_street">Street Address</label></td>
				<td><input type="text" name="from_street" maxlength="50" size="40"></td>
			</tr>
			<tr>
				<td><label for="from_suite">Apt, Suite, Bldg. (optional)</label></td>
				<td><input type="text" name="from_suite" maxlength="50" size="40"></td>
			</tr>
			<tr>
				<td><label for="from_city">City</label></td>
				<td><input type="text" name="from_city" maxlength="30" size="40"></td>
			</tr>
			<tr>
				<td><label for="from_province">State/Province/Region</label></td>
				<td><input type="text" name="from_province" maxlength="80" size="40"></td>
			</tr>
			<tr>
				<td><label for="from_postalcode">Postal / Zip Code</label></td>
				<td><input type="text" name="from_postalcode" maxlength="80" size="40"></td>
			</tr>
			<tr>
				<td><label for="from_country">Country</label></td>
				<td><input type="text" name="from_country" maxlength="80" size="40"></td>
			</tr>
			<tr>
				<td><label for="from_unit_type">Type</label></td>
				<td>
					<select name="from_unit_type" cols="3">
						<option value="Unspecified">--Please select unit type--</option>
						<option value="Apartment">Apartment</option>
						<option value="Bachelor">Bachelor</option>
						<option value="Duplex">Duplex</option>
						<option value="High-Rise">High-Rise</option>
						<option value="House">House</option>
						<option value="Other">Other</option>
						<option value="Storage Facility">Storage Facility</option>
						<option value="Studio">Studio</option>
						<option value="Townhouse">Townhouse</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="from_floor">Floor # or Stories</label></td>
				<td><input type="text" name="from_floor" maxlength="80" size="40"></td>
			</tr>
			<tr>
				<td><label for="from_bedrooms">Bedrooms</label></td>
				<td><input type="text" name="from_bedrooms" maxlength="80" size="40"></td>
			</tr>
<tr><td colspan="2"><hr></td></tr>
			<tr><td><b>Moving to</b></td></tr>
			<tr>
				<td><label for="to_street">Street Address</label></td>
				<td><input type="text" name="to_street" maxlength="50" size="40"></td>
			</tr>
			<tr>
				<td><label for="to_suite">Apt, Suite, Bldg. (optional)</label></td>
				<td><input type="text" name="to_suite" maxlength="50" size="40"></td>
			</tr>
			<tr>
				<td><label for="to_city">City</label></td>
				<td><input type="text" name="to_city" maxlength="30" size="40"></td>
			</tr>
			<tr>
				<td><label for="to_province">State/Province/Region</label></td>
				<td><input type="text" name="to_province" maxlength="80" size="40"></td>
			</tr>
			<tr>
				<td><label for="to_postalcode">Postal / Zip Code</label></td>
				<td><input type="text" name="to_postalcode" maxlength="80" size="40"></td>
			</tr>
			<tr>
				<td><label for="to_country">Country</label></td>
				<td><input type="text" name="to_country" maxlength="80" size="40"></td>
			</tr>
			<tr>
				<td><label for="to_unit_type">Type</label></td>
				<td>
					<select name="to_unit_type" cols="3">
						<option value="Unspecified">--Please select unit type--</option>
						<option value="Apartment">Apartment</option>
						<option value="Bachelor">Bachelor</option>
						<option value="Duplex">Duplex</option>
						<option value="High-Rise">High-Rise</option>
						<option value="House">House</option>
						<option value="Other">Other</option>
						<option value="Storage Facility">Storage Facility</option>
						<option value="Studio">Studio</option>
						<option value="Townhouse">Townhouse</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="to_floor">Floor # or Stories</label></td>
				<td><input type="text" name="to_floor" maxlength="80" size="40"></td>
			</tr>
			<tr>
				<td><label for="to_bedrooms">Bedrooms</label></td>
				<td><input type="text" name="to_bedrooms" maxlength="80" size="40"></td>
			</tr>
<tr><td colspan="2"><hr></td></tr>			
			<tr><td><b>Additional Info</b></td></tr>

			<tr>
				<td><label for="comments">Comments</label></td>
				<td><textarea name="comments" maxlength="1000" cols="41" rows="6"></textarea></td>
			</tr>
			
			<td colspan="2" style="text-align:center">
			<input type="submit" value="Submit">
				</td>
			</tr>
		</table>
	</form>
</table>
<?php require 'footer.php'; ?>




</center>
<body>
</html>