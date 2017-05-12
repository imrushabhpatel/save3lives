<html>
<head>
<title>Be a Donor</title>
<style type="text/css">
body {
	background-image: url(imgs/bodybg.jpg);
	background-repeat: repeat;
}
</style>

<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body>
<div>
	<table cellspacing="0" cellpadding="0" width="900" align="center" border="0">
		<tr>
			<td>
				<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr bgcolor="#FFFFFF">
						<td valign="top">
							<table width="900" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td width="432" height="77" valign="top" bgcolor="#FFFFFF"><img src="../../imgs/main_logo.gif" width="384" height="77" border="0" usemap="#Map"/>
										</td>
										<td width="235" bgcolor="#FFFFFF">
											<div align="right">
												<table width="230" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
													<tr>
														<td width="250" bgcolor="#FFFFFF">
															<div align="right">
																<a href="main.php">Home</a> |<a href="aboutus.php">About us </a>| <a href="contactus.php">Contact Us</a>
															</div>
														</td>
														<td width="10">&nbsp;
														</td>
													</tr>
												</table>
											</div>
										</td>
									</tr>
							</table>
						</td>
					</tr>
					<tr bgcolor="#FFFFFF">
						<td height="59" valign="top">
							<table width="925" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td width="204"><a href="register.php"><img src="imgs/inner_newuser.gif" alt="register" width="204" height="59" longdesc="register.php" /></a></td>
									<td width="7"><img src="imgs/inner_links_partition.gif" width="7" height="59" /></td>
									<td width="214"><a href="find.php"><img src="imgs/inner_findblooddonor.gif" alt="find" width="214" height="59" border="0" /></a></td>
									<td width="7"><img src="imgs/inner_links_partition.gif" width="7" height="59" /></td>
									<td bgcolor="#FFFFFF"><a href="facts.php"><img src="imgs/facts.gif" alt="facts" width="235" height="59" border="0" longdesc="facts.php"></a></td>
									<td><img src="imgs/inner_links_partition.gif" alt="panel" width="7" height="59" /></td>
									<td bgcolor="#FFFFFF"><a href="can_cant.php"><img src="imgs/can_cant.gif" alt="can_cant" width="214" height="59" border="0"></a><a href="../NGO/inner/default_NGO.aspx"></a></td>
								</tr>
							</table>
							<table cellspacing="0" cellpadding="0" width="688" border="0">
								<tr>
									<td background="../../imgs/bg_head_inner.gif" height="32"><p><img src="imgs/bg_head_inner.gif" alt="head" width="901" height="41" /></p>
									</td>
								</tr>
								<tr>
								  <td background="../../imgs/bg_middle_inner.gif">
										<table cellspacing="0" cellpadding="5" width="895">
											<tr>
												<td width="883" height="2">												
												</td>
											</tr>
											<tr bgcolor="#FFFFFF">
											  <td valign="top">
													Please fill the following information to register as voluntary blood donor and become part of save3lives vision. Kindly update your date of donatoin once done, so that your name will be hidden automatically till next 3 Months. Also please update your profile/information if in case you relocate in future.
													  <p align="center" class="heading_white">
													<strong>REGISTRATION FORM</strong>													
													</p>
											        <table cellspacing="1" cellpadding="3" width="70%" align="center">
                                                      <form action="thanku.php" method="post" name="form1" onSubmit="MM_validateForm('FullName','','R','DOB','','R','MobileNumber','','RisNum','AlernativetNumber','','NisNum','EmailId','','RisEmail');return document.MM_returnValue" >
                                                        <tr>
                                                          <td colspan="3" align="center"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="107" style="width: 115px"><strong>Full Name</strong> </td>
                                                          <td width="30" height="30"><strong>:</strong> </td>
                                                          <td width="307" style="width: 327px"><input name="FullName" type="text" maxlength="100" />                                                          
														  </td>
                                                        </tr>
                                                        <tr bgcolor="#ffffff">
                                                          <td style="width: 107px"><strong>Blood Group</strong> </td>
                                                          <td height="30"><strong>:</strong> </td>
                                                          <td style="width: 327px"><select name="BloodGroup" id="dpBloodGroup" class="textarea">
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
                                                              <option value="Bombay Blood Group">Bombay Blood Group</option>
                                                            </select>                                                          </td>
                                                        </tr>
                                                        <tr>
                                                          <td style="width: 107px"><strong>Gender</strong> </td>
                                                          <td height="30"><strong>:</strong> </td>
                                                          <td style="width: 327px"><select name="dpGender" id="dpGender" class="textarea">
                                                              <option value="M">Male</option>
                                                              <option value="F">Female</option>
                                                            </select>                                                          </td>
                                                        </tr>
                                                        <tr bgcolor="#ffffff">
                                                          <td style="width: 107px"><strong>Date Of Birth<br>
                                                                <font color="#ff0000" size="1">(MM/DD/YYYY)</font> </strong> </td>
                                                          <td height="30"><strong>:</strong> </td>
                                                          <td style="width: 327px"><input name="DOB" type="text" maxlength="10" id="DOB" class="textarea"  />
                                                          </td>
                                                        </tr>
                                                        <tr bgcolor="#e5e5e5">
                                                          <td height="30" colspan="3"><strong>Contact Information</strong> </td>
                                                        </tr>
                                                        <tr bgcolor="#ffffff">
                                                          <td style="width: 107px"><strong>Mobile Number<br />
                                                          </strong> </td>
                                                          <td height="30"><strong>:</strong> </td>
                                                          <td style="width: 327px"><input name="MobileNumber" type="text" maxlength="10" />                                                          </td>
                                                        </tr>
                                                        <tr bgcolor="#ffffff">
                                                          <td style="width: 107px"><strong>Alternative Number<br>
                                                          </strong> </td>
                                                          <td height="30"><strong>:</strong> </td>
                                                          <td style="width: 327px"><input name="AlernativetNumber" type="text" maxlength="12" >                                                          </td>
                                                        </tr>
                                                        <tr>
                                                          <td style="width: 107px"><strong>Select State</strong> </td>
                                                          <td height="30"><strong>:</strong> </td>
                                                          <td style="width: 327px"><select name="dpState" id="dpState" class="textarea">
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
                                                            </select>                                                          </td>
                                                        </tr>
                                                        <tr bgcolor="#ffffff">
                                                          <td style="width: 107px"><strong>E-Mail ID</strong> </td>
                                                          <td height="30"><strong>:</strong> </td>
                                                          <td style="width: 327px"><input name="EmailId" type="text" maxlength="100" >                                                          </td>
                                                        </tr>
                                                        
														
														
																<tr bgcolor="#ffffff">
                                                          <td style="width: 107px"><strong>Permanent Address<br>
                                                          </strong> </td>
                                                          <td height="30"><strong>:</strong> </td>
                                                          <td style="width: 327px">
														  <textarea name="PermanentAddress"></textarea></td>
                                                        </tr>
														<tr  bgcolor="#ffffff">>
                                                                <td style="width: 107px">                                                                
																</td>
                                                                <td valign="top" height="30">&nbsp;</td>
                                                                <td style="width: 327px">
                                                                    I authorise the website to display my telephone number, e-mail ID and mailing address so that the needy could contact me, as and when there is an emergency.
                                                                </td>
                                                        </tr>
															
                                                        <tr bgcolor="#ffffff">
                                                          <td colspan="3" height="30"><div align="center"> &nbsp;
                                                                  <input type="submit" name="Submit" value="Submit">
                                                          </div></td>
                                                        </tr>
                                                      </form>
									            </table></td>
											</tr>
										</table>
									    <p><img src="imgs/DCA-make-a-gift.jpg" alt="donate" width="901" height="265"></p></td>
								</tr>
							</table>
						</td>
					</tr>	
				</table>
				
			</td>
		</tr>
	</table>
</div>


</body>
</html>
