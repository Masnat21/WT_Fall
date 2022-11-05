<?php   include "Controllers\myphpform.php" ; ?>

<!DOCTYPE html>
<html>
<head>
<title>Customer Registration Form </title>
</head>
<body>
	<h1>Please Fill Up Registration Form</h1>
	<fieldset>
		<legend>General</legend>
<table>
	<thead></thead>
	<tbody>

<form action=""target="_blank" method="post">
<tr>
<td> Customer Name </td>
<td>
	<select name="Customer Name">
    <option value="mr">Mr.</option>
    <option value="mr.s">Mrs.</option>
	<input type="text"  placeholder="enter your name"name="name"> <?php echo $Name; ?> </td>
</tr>

<tr>
<td> Gender : </td>
<td>
<input type="radio" name="gender" value="Male"> Male 
<input type="radio" name="gender" value="Female"> Female 
<input type="radio"  name="gender" value="Other"> Other <br> <?php echo $validateradio; ?><br>
</td>
</tr>
</tbody>
			</table>
</fieldset>
<br><br>
<fieldset>
	<legend>Contact</legend>
	<table>
	<thead></thead>
	<tbody>

<tr>
<td> Email :  </td>
<td><input type="text" placeholder="enter your mail name" name="email"> <?php echo $validateemail; ?> </td>
</tr>


<tr>
<td>Password :  </td>
<td><input type="password" placeholder="enter your Password" name="password"> <?php echo $validatepassword; ?></td>
</tr>




<tr>
<td><lable for="mobile">mobileno:- </lable></td>   
<td><input type="text" name="mobile" placeholder="enter number"> <?php echo $validatemobileno; ?></td>

</tr>



</tbody>
			</table>
</fieldset>
<br><br>
<fieldset>
	<legend>Address</legend>
<table>
	<thead></thead>
	<tbody>

<tr>
<td>House</td>
<td><label for="House"></label>
<input type="text" name="house"> <?php echo $validatehouse; ?>
</td>
</tr>
</tbody>
</table>
</fieldset>	
<br><br>
<fieldset>
	<legend>Customer Info</legend>
	<table>
	<thead></thead>
	<tbody>

<tr>
<td><lable for="nid">NID:- </lable></td>   
<td><input type="text" name="nid" placeholder="enter nid number"> <?php echo $validatenid; ?>
</td></td>
</tr>

<tr>
<td><lable for="dob">DOB:- </lable></td>   
<td><input type="date" name="dob" > <?php echo $validatedob; ?></td>
</tr>

<tr>
<td>Comment :</td>
<td><textarea rows="5" cols="30" name="comment"></textarea> <?php echo $validatecomment; ?></td>
</tr>

</tbody>
</table>
</fieldset>

<tr>
<td> <input type="submit" name="Submit"> 
<input type="reset" name="Reset">
</td>
</tr>

</form>
</table>

</body>
</html>
