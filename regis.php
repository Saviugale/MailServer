<?php
include_once('connection.php');
error_reporting(1);
$y=$_POST['y'];
$m=$_POST['m'];
$d=$_POST['d'];
$dob=$y."-".$m."-".$d;
$imgpath=$_FILES['f']['name'];
$eid=$_POST['eid'];
if($_POST['reg'])
{
	if($_POST['eid']=="" || $_POST['pwd']=="")
	{
	$err="Fill All Details Properly";
	}
	else
	{

	$r=$conn->query("SELECT * FROM userinfo where emailid='{$_POST['eid']}'");
	$t=$r->num_rows;
		if($t==1)
		{
		$err="User Already Exis";
		}
		else
		{

		$conn->query("INSERT INTO userinfo values('{$_POST['eid']}','{$_POST['pwd']}','{$_POST['fname']}','{$_POST['gen']}','{$_POST['mob']}','$dob',
		'$imgpath')");
		mkdir("userImages/$eid");
		move_uploaded_file($_FILES["f"]["tmp_name"], "userImages/$eid/" . $_FILES["f"]["name"]);
		$_SESSION['sname']=$_POST['un'];
		//header('location:index.php?chk=5');
		echo "<script>window.location='index.php?chk=5'</script>";
		}
	}
}

?>

 <style>
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 10px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<style>
	table{padding:5px;border-radius:5px}
	td{padding:10px}
</style>
<form method="post" enctype="multipart/form-data">
<table width="90%" border="1" align="center">
  <font color="#FF0000"><?php echo $err; ?></font>
  <tr>
    <td width="204" height="47">Enter Your Email: </td>
    <td width="218"><input type="text" name="eid" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/></td>
  </tr>
  <tr>
    <td height="39">Enter Your Password </td>
    <td><input type="password" name="pwd" required/></td>
  </tr>
  <tr>
    <td height="39">Enter Your Full Name </td>
    <td><input type="text" name="fname" required/></td>
  </tr>

  <tr>
    <td height="33">Select Your Gender </td>
    <td>
		Male<input  type="radio" name="gen" value="m"/>
		Female<input type="radio" name="gen" value="f"/>
	</td>
  </tr>
  <tr>
    <td height="47">Enter Your Mobile </td>
    <td><input type="text" name="mob" pattern="^\d{10}$" required/></td>
  </tr>
  
  <tr>
    <td height="38">Select Your DOB </td>
    <td>
		<select name="y" required>
			<option value="">Year</option>
			<?php
			for($i=1900;$i<=2013;$i++)
			{
			echo "<option value='$i'>$i</option>";
			}
			?>
		</select>
		<select name="m" required>
			<option value="">Month</option>
			<?php
			for($i=1;$i<=12;$i++)
			{
			echo "<option value='$i'>$i</option>";
			}
			?>
		</select>
		<select name="d" required>
			<option value="">Date</option>
			<?php
			for($i=1;$i<=31;$i++)
			{
			echo "<option value='$i'>$i</option>";
			}
			?>
		</select>
	</td>
  </tr>
<tr>
    <td height="39">Upload Your Photo</td>
    <td><input type="file" name="f"/></td>
</tr>
</td>
  
  <tr>
    <td align="center" colspan="2">
	<input class="button" type="submit" name="reg" value="Register"/>
	<input class="button" type="reset"  value="Reset"/>
	</td>
  </tr>
</table>
</form>
