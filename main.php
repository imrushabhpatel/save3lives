<html>
<head>
	<title>save3lives</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<style type="text/css">
	body {
	background-image: url(imgs/bodybg.jpg);
	background-color: #ECECEC;
	background-repeat: repeat;
	}
	</style>
</head>

<body>

<script type="text/javascript" language="javascript">
function searchBloodDonorValidation()
{
	if(document.getElementById("BloodGroup").value=='Select')
	{
		alert("Please select blood group");
		document.getElementById("BloodGroup").focus();
		return false;	
	}  
	if(document.getElementById("dpState").value=='Select')
	{
		alert("Please select state");
		document.getElementById("dpState").focus();
		return false;
	}
		return true;
}
function fnOpenForBloodRequest(URL)
{
	window.open(URL,'',"toolbar=0,status=0,menubar=0,fullscreen=no,width=800,height=500,resizable=0,scrollbars=yes");
	//return false;
}

</script>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
	<td valign="top">
		<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
  			<tr>
    			<td height="20" background="../blddon/imgs/landingpage/bg_step1.gif"><img src="imgs/Donate-Blood2.jpg" alt="blood_donation" width="776" height="290" /></td>
  			</tr>
			<tr>
				<td width="291" height="20" background="../blddon/imgs/landingpage/bg_step1.gif" bgcolor="#FFFFFF"><div align="right"><a href="main.php">Home</a> |<a href="aboutus.php">About us </a>| <a href="contactus.php">Contact Us</a></div>
				</td>
			</tr>
			<tr>
				<td>
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td width="29" valign="top"><img src="imgs/left_search_panel.gif" alt="leftsearch" width="29" height="300" /></td>
							<td width="431" valign="top" bgcolor="c42522">
							<table width="431" border="0" cellpadding="0" cellspacing="0">
								<form action="result.php" method="post" name="form3" >
								<tr>
									<td height="71">&nbsp;</td>
								</tr>
 								<tr>
									<td height="5"></td>
								</tr>
								<tr>
									<td bgcolor="c42522">
									<table width="445" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td width="129" height="45" class="contactheading">Blood Group</td>
											<td width="316">
												<select name="BloodGroup" id="BloodGroup" class="findbloodlistmenu">
															<option value="Select">-----Select-----</option>
														  <option value="A+">A+</option>
														  <option value="A-">A-</option>
														  <option value="B+">B+</option>
														  <option value="B-">B-</option>
														  <option value="AB+">AB+</option>
														  <option value="AB-">AB-</option>
														  <option value="O+">O+</option>
														  <option value="O-">O-</option>
														  <option value="A1+">A1+</option>
														  <option value="A1-">A1-</option>
														  <option value="A2+">A2+</option>
														  <option value="A2-">A2-</option>
														  <option value="A1B+">A1B+</option>
														  <option value="A1B-">A1B-</option>
														  <option value="A2B+">A2B+</option>
														  <option value="A2B-">A2B-</option>
														  <option value="Bombay Blood Group">Bombay Blood Group
													</option>
										       	</select>
											</td>
      									</tr>
      									<tr>
        									<td height="41" class="contactheading">Select State</td>
        									<td>
												<select name="dpState" id="dpState" class="findbloodlistmenu" >
													  <option value="Select">-----Select-----</option>
													   <option value="Andhra_Pradesh">Andhra Pradesh</option> 
															  <option value="Arunachal_Pradesh">Arunachal Pradesh </option>
                                                              <option value="Assam">Assam </option>
                                                              <option value="Bihar">Bihar </option>
                                                              <option value="Chhattisgarh">Chhattisgarh </option>
                                                              <option value="Goa ">Goa </option>
                                                              <option value="Gujarat">Gujarat </option>
                                                              <option value="Haryana">Haryana </option>
                                                              <option value="Himachal_Pradesh">Himachal Pradesh</option>
                                                              <option value="Jammu_and_Kashmir">Jammu and Kashmir </option>
                                                              <option value="Jharkhand">Jharkhand </option>
                                                              <option value="Karnataka">Karnataka </option>
                                                              <option value="Kerala">Kerala </option>
                                                              <option value="Madhya_Pradesh">Madhya Pradesh</option>
                                                              <option value="Maharashtra">Maharashtra </option>
                                                              <option value="Manipur">Manipur </option>
                                                              <option value="Meghalaya">Meghalaya </option>
                                                              <option value="Mizoram">Mizoram </option>
                                                              <option value="Nagaland">Nagaland </option>
                                                              <option value="Odisha">Odisha</option>
                                                              <option value="Punjab">Punjab </option>
                                                              <option value="Rajasthan">Rajasthan </option>
                                                              <option value="Sikkim">Sikkim </option>
                                                              <option value="Tamil_Nadu">Tamil Nadu </option>
                                                              <option value="Tripura">Tripura </option>
                                                              <option value="Uttaranchal">Uttaranchal </option>
                                                              <option value="Uttar_Pradesh">Uttar Pradesh</option>
                                                              <option value="West_Bengal">West Bengal</option>
                                                              <option value="Andaman _and _Nicobar_Islands">Andaman and Nicobar Islands </option>
                                                              <option value="Chandigarh">Chandigarh </option>
                                                              <option value="Dadra_and_Nagar_Haveli">Dadra and Nagar Haveli </option>
                                                              <option value="Daman_and_Diu">Daman and Diu</option>
                                                              <option value="Lakshadweep">Lakshadweep </option>
                                                              <option value="Pondicherry">Pondicherry</option>
                                                              <option value="Delhi">Delhi </option>
												</select>
											</td>
										</tr>
										<tr>
											<td height="41" class="contactheading">&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td height="55">&nbsp;</td>
											<td valign="middle">
												<table width="137" border="0" cellspacing="0" cellpadding="0">
													<tr>
														<td width="28">&nbsp;</td>
														<td><input type="image" name="btnSearchDonor" id="btnSearchDonor" src="imgs/submit_white.gif" onClick="javascript:return searchBloodDonorValidation();" style="height:36px;width:122px;" /></td>
														<!-- <td><a href="#" title="Submit"><img src="imgs/submit_white.gif" alt="submit" width="122" height="35" /></a></td> -->
													</tr>
												</table>
											</td>
										</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td height="1"><img src="../blddon/imgs/spacer.gif" width="1" height="1" /></td>
								</tr>
								<tr>
									<td height="1" bgcolor="#C8C8C8"><img src="../blddon/imgs/spacer.gif" width="1" height="1" /></td>
								</tr>
								</form>
							</table>
							</td>
							<td width="300" height="300" align="center" valign="top"><img src="imgs/blood_drop_search.gif" alt="blooddrop" width="300" height="300" /></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td height="20" background="../blddon/imgs/landingpage/bg_step1.gif"></td>
			</tr>
			<tr>
				<td valign="top"><a href="../blddon/inner/news/donorRegistration.aspx"></a><a href="../blddon/register.php"></a><a href="register.php"><img src="imgs/register.gif" alt="register" width="775" height="138" border="0" longdesc="register.php" /></a></td>
			</tr>
		</table>
	</td>
</tr>
</table>
</body>

</html>