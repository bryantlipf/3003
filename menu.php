<?php
header('Content-Type: text/html; charset=utf-8');
?>

<style type="text/css">
html{font-family:"Calibri";} 
a:link {text-decoration:none; color: blue;}
a:visited {text-decoration:none; color: blue;}
a:hover {text-decoration:none;}
a:active {text-decoration:underline;}

table, th, td {    
    border-collapse: collapse;
}

table#t01 tr{
    background-color: #FFFFFF;
}
table#t01 th {
    color: black;
}
table#t01 td {
	height:50;
}
td#td01:hover {
    background-color: #02E9FF;
}
</style>

<table id="t01" style="width:100%">
	<tr><td height="100"><center><a href="calendar_today.php"><img src="./images/logo.png" width = "100%" length= 150></a></center></td></tr>
		
	<tr><td height="50"><center>Welcome Dr Kim<br>20 Oct 2014 - 11:20am<p></center></td></tr>
	
	<tr><td id="td01" style="cursor:pointer" onclick="location.href='calendar_today.php'">&nbsp&nbsp&nbsp&nbsp
	<img src="./images/appointment_icon.png" width = "10%" align="center"><font color="#000099">&nbsp&nbsp Calendar</font></td></tr>
	
	<tr><td id="td01" style="cursor:pointer" onclick="location.href='list_patients.php'">&nbsp&nbsp&nbsp&nbsp
	<img src="./images/health_icon.png" width = "10%" align="center"><font color="#000099">&nbsp&nbsp Patients List</font></td></tr>
	
	<tr><td id="td01" style="cursor:pointer" onclick="location.href='add_patient.php'">&nbsp&nbsp&nbsp&nbsp
	<img src="./images/doctor_icon.png" width = "10%" align="center"><font color="#000099">&nbsp&nbsp Add Patient</font></td></tr>
	
	<tr><td id="td01" style="cursor:pointer" onclick="location.href='settings.php'">&nbsp&nbsp&nbsp&nbsp
	<img src="./images/setting_icon.png" width = "10%" align="center"><font color="#000099">&nbsp&nbsp Settings</font></td></tr>
	
	<tr><td id="td01" style="cursor:pointer" onclick="location.href='change_password.php'">&nbsp&nbsp&nbsp&nbsp
	<img src="./images/change_password_icon.png" width = "10%" align="center"><font color="#000099">&nbsp&nbsp Change Password</font></td></tr>	
	
	<tr><td id="td01" style="cursor:pointer" onclick="location.href='index.php'">&nbsp&nbsp&nbsp&nbsp
	<img src="./images/logout_icon.png" width = "10%" align="center"><font color="#000099">&nbsp&nbsp Logout</font></td></tr>
</table>

