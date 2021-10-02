<?
	php session_start();
	error_reporting(1);
?>
<title>My mail server</title>
<style>
	a:hover
	{
		color:#00FF66;
	}
	a
	{
		font-size:18px;
		margin-left:5%;
	}
	table,td
	{
		padding:5px;
		broder-radius:5px;
	}
</style>

<body>
<table width="975" border="1" align="center" style="background-image:url('slide-image/bkgrnd_greydots.png');">
<tr>
<td height="135" colspan="2">
	<img src="slide-image/food1.png" name="slide" border="0" width="100%" height="200">
<style>
.button 
{
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

.button span 
{
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after 
{
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span 
{
  padding-right: 25px;
}

.button:hover span:after 
{
  opacity: 1;
  right: 0;
}
</style>
</td>
</tr>
<tr>
<td height="60" colspan="2">
	<a class="button" href="index.php">HOME</a> 
	<a class="button" href="index.php?chk=login">LOGIN </a>
	<a class="button" href="index.php?chk=registraion">NEW USER</a>
	<a class="button" href="index.php?chk=about">ABOUT US</a>
	<a href="index.php?chk=5"></a>
</td>
</tr>
<tr>
<td height="613" valign="top" style="padding:10px">
<?php
	@$chk=$_REQUEST['chk'];
	if($chk=="")
	{
?>
<h3 align="center">Email Server Features</h3>
<pre>
<p> The Email Server Supports STMP Protocols and Delivers Solid Performance From Its Features and User-Friendly Design </p>
<li> Email Server </li>
<li> Email Security </li>
<li> Email Encryption </li>
<li> Instant Messenger </li>

</pre>
<?php
	}
	if($chk=="registraion")
	{
		include_once('regis.php');
	}
	if($chk=="login")
	{
		include_once('login.php');
	}
	if($chk==5)
	{
		include_once('welcome.php');
	}
	if($chk=="about")
	{
		include_once('aboutus.php');
	}
	if($chk=="contact")
	{
		include_once('contactus.php');
	}
	if($chk=="7")
	{
		include_once('latestupdDisp.php');
	}
?>	 
</tr>
</table>
</body>
