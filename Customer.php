<?php   include "Control\myphpform.php" ; ?>

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
<td>Mobile No: </td>
<td><input type="number"  placeholder="enter your mobile num"name="number"></td>
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
<td>Street/House/Road</td>
<td><label for="Street/House/Road"></label>
<input type="text" name="road">
</td>
</tr>

<tr>
	<td>Country</td>
	<td>
		<select name="Country" placeholder="select your country"id="Country">
			<option value="Bangladesh">Bangladesh</option>
			<option value="India">India</option>
			<option value="Pakistan">Pakistan</option>
		</select>
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
<td><input type="text" name="nid" placeholder="enter nid number"></td>
</tr>

<tr>
<td><lable for="dob">DOB:- </lable></td>   
<td><input type="date" name="dob" ></td>
</tr>

<tr>
<td>Comment :</td>
<td><textarea rows="5" cols="30" name="comment"></textarea> <?php echo $validatecomment; ?></td>
</tr>

<tr>
<td> <label for="file ">Please Choose a File : </label> </td>
<td><input type="file" id="file"></td>
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
