


<html>
<head><title>Search Result</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /><style type="text/css">
<!--
body {
	background-image: url(imgs/bodybg.jpg);
	background-repeat: repeat;
}
-->
</style></head>
<body>
<div>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td><table width="900" border="0" align="center" cellpadding="0" cellspacing="0"><tr><td height="20"><img src="../imgs/spacer.gif" width="1" height="1"></td>
</tr>
<tr>
 <td valign="top"><table width="900" border="0" cellspacing="0" cellpadding="0">
<tr>
 <td width="432" height="77" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
<td width="233" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
<td width="235" bgcolor="#FFFFFF"><div align="right">
<table width="230" border="0" cellspacing="0" cellpadding="0">
<tr>
 <td width="220"><div align="right">
<a href="main.php">Home</a>|<a href="aboutus.php">About Us</a>| <a href="contactus.php">Contact Us</a>
</div></td>
<td width="10">&nbsp;</td>
</tr>
</table>
</div></td>
</tr>
</table></td>
</tr>
<tr>
<td height="10" bgcolor="#FFFFFF"><img src="../imgs/spacer.gif" width="1" height="1"></td>
</tr>
<tr>
 <td height="1" valign="top" bgcolor="#ff0000"><img src="../imgs/spacer.gif" width="1" height="1"></td>
      </tr>
      <tr>
        <td height="59" valign="top" bgcolor="#F0F0F0"><table width="900" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="204"><a href="register.php"><img src="imgs/inner_newuser.gif" alt="register" width="204" height="59" border="0" longdesc="register.php" /></a></td>
            <td width="7"><img src="imgs/inner_links_partition.gif" alt="panel" width="7" height="59" /></td>
            <td width="214"><a href="find.php"><img src="imgs/inner_findblooddonor.gif" alt="find" width="214" height="59" border="0" /></a></td>
            <td width="7"><img src="imgs/inner_links_partition.gif" alt="panel" width="7" height="59" /></td>
            <td width="235" bgcolor="#FFFFFF"><a href="facts.php"><img src="imgs/facts.gif" alt="facts" width="235" height="59" border="0" longdesc="facts.php"></a></td>
            <td width="7"><img src="imgs/inner_links_partition.gif" alt="panel" width="7" height="59" /></td>
            <td width="226" bgcolor="#FFFFFF"><a href="can_cant.php"><img src="imgs/can_cant.gif" alt="can_cant" width="214" height="59" border="0"></a><a href="../NGO/inner/default_NGO.aspx"></a></td>
          </tr>
        </table>
          <table width="900" border="0" cellspacing="0" cellpadding="0">
        <tr>
        <td height="1" valign="top" bgcolor="#ff0000"><img src="../imgs/spacer.gif" width="1" height="1"></td>
      </tr>
        </table>

	    </td>
		</tr>
				<tr>
					<td height="10" bgcolor="#FFFFFF"></td>
				</tr>
				<tr>
					<td><table width="900" border="0" cellspacing="0" cellpadding="0">
			  <tr>
								<td width="10" bgcolor="#FFFFFF">&nbsp;</td>
								<td width="688" valign="top" bgcolor="#FFFFFF"><table width="688" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td height="32" valign="middle" background="../imgs/bg_head_inner.gif" bgcolor="#FFFFFF" style="HEIGHT: 32px"><img src="imgs/bg_h20.gif" alt="result" width="879" height="41"></td>
                                  </tr>
                                  <tr>
                                    <td background="../imgs/bg_middle_inner.gif" bgcolor="#FFFFFF">&nbsp;
                                      <table id="Table1" cellspacing="0" cellpadding="5" width="885">
                                          <tr>
                                            <td valign="top" bgcolor="#FFFFFF"><p>
                                              <?php
$con=mysqli_connect("localhost","root","123456","save3lives");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT txtFullName, dpBloodGroup, dpGender, txtDOB, txtMobileNumber, dpState, txtEmailId  FROM details WHERE dpBloodGroup='$_POST[BloodGroup]'  AND dpState='$_POST[dpState]'") or die("Error: ".mysqli_error($con));
echo "<table border='1'>
<tr>
<th>Full Name</th>
<th>Blood Group</th>
<th>DOB</th>
<th>Mobile No</th>
<th>State</th>
<th>Email ID</th>
</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['txtFullName'] . "</td>";
  echo "<td>" . $row['dpBloodGroup'] . "</td>";
  echo "<td>" . $row['txtDOB'] . "</td>";
  echo "<td>" . $row['txtMobileNumber'] . "</td>";
  echo "<td>" . $row['dpState'] . "</td>";
  echo "<td>" . $row['txtEmailId'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>
                                              <br />
                                              <br />
                                              </p>
                                            </td>
                                          </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td height="9" background="../imgs/bg_bottom_inner.gif"><img src="imgs/8977332515_a68bdeea90_z.jpg" alt="ballons" width="878" height="305"></td>
                                  </tr>
                                </table></td>
				</tr>
						</table>				  </td>
				</tr>
			</table>
    </form>
</body>
</html>
