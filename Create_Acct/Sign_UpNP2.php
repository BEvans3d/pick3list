<!DOCTYPE html>
<html><!--Sign-up form modified. Example: from Chap 6 page 251 of PHP&MYSQL WITH CSS-->
	<head>
		<title>Sign_UpNP2</title>
		<link rel="stylesheet" href="style1.css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:400,300" rel="stylesheet" type="text/css">
		<!--<style type="text/css">
			body {
				font-family: Arial, Verdana, sans-serif;}
		</style>-->
	</head>
	<body background="Limitless_sky2.gif">
		<form action="Sign_UpNP2.php" method="post">
		<fieldset>
		<legend>Sign up information</legend>
			
				
				<label for="name" class="title">User name:</label>
				<input type="text" id="name" name="usr_name" style="height:25px" required="required" /><br><br>
				
				<label for="email" class="title">Your email:</label>
				<input type="email" id="email" name="email" style="height:25px;width:300px" required="required" /><br><br>
								
				<label for="name" class="title">Create password:</label>
				<input type="password" id="name" name="pass_wrd" style="height:25px" required="required" /><br><br>
								
				<label for="name" class="title">Confirm password:</label>
				<input type="password" id="name" name="pass_wrd" style="height:25px" required="required" /><br><br>
				  								
				<label for="name" class="title">Cell phone:</label>
				<input type="tel" id="name" name="cell_phn" placeholder="999-999-1234" style="height:25px" required="required" /><br><br>
				
				<a id="st_view"><label>Prediction Monitor State:</label><br><select name="st_view" style="height:25px"  required="required" ></a><br>
				<optgroup label="State">
				<option value=""></option>
				<option value="California">California</option>
                <option value="Washington DC">Washington DC</option>
                <option value="Florida">Florida</option>
                <option value="Georgia">Georgia</option>
                <option value="Illinois">Illinois</option>
                <option value="Maryland">Maryland</option>
                <option value="Michigan">Michigan</option>
                <option value="New Jersey">New Jersey</option>
                <option value="New York">New York</option>    
                <option value="Pennsylvania">Pennsylvania</option>
                <option value="Virginia">Virginia</option>
				</select>
	            </optgroup><br></br>						
			
		</fieldset>
		
		<a style="font-size:large"href="../main/index.html">Back to homepage</a><br />
		
		<!--<button type="submit" style="width:200px;height:50px;font-size:x-large;font-weight:bold">Sign Up</button>-->
		<button type="reset" style="width:200px;height:50px;font-size:x-large;font-weight:bold">Clear</button>
							
		</form>
		<pre><?php var_dump($_POST); ?></pre>
	</body>
</html>
