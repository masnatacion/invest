<div class="about-us ">
	<div class="row ">
		<div class="col-md-8">
			<h2>{{ $record->txt_title }}</h2>

			
			<div class="box">
				<div class="row margin-bottom-lg">
					<div class="col-md-3">
						<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ0LjA0Njg3NSIgeT0iNzAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTBwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4xNDB4MTQwPC90ZXh0PjwvZz48L3N2Zz4=" alt="..." class="img-thumbnail">	
					</div>
					<div class="col-md-9">

{{ $record->html_body1 }}


					<form method="POST" action="/" name="nowsee">
					   <input name="action" value="1" type="hidden">
					
					<table border="0" cellpadding="2" cellspacing="0" width="100%">
					<tbody><tr>
						<td><table bgcolor="" border="0" cellpadding="0" cellspacing="0" width="100%">
					<tbody><tr>
						<td valign="top"><font face="Arial" size="2">How did you hear about<br> our Classic Mail Box : </font></td>
						<td><input name="HearAboutUs" value="" size="60" onfocus="focusOn( this )" onblur="focusOff( this )" type="text"></td>
					</tr>
					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2">&nbsp;</td>
					</tr><tr>
						<td colspan="2"><font face="Arial" size="2"> <b>TYPE OF ACCOUNT</b> <br>
							<input name="MemberType" value="Standard" class="radio_bg" type="radio">Free (Standard)
							<input name="MemberType" value="Gold" class="radio_bg" type="radio">Gold
							<input name="MemberType" value="Platinum" class="radio_bg" type="radio">Bussiness Platinum</font></td>
					</tr><tr>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2"><font face="Arial" size="2"><b>OWNER INFO</b></font></td>
					</tr>
					<tr>
						<td nowrap="" valign="top"><font face="Arial" size="2">Principal Box Owner : </font></td>
						<td><input name="Name" value="" size="50" onfocus="focusOn( this )" onblur="focusOff( this )" type="text"></td>
					</tr>
					<tr>
						<td nowrap="" valign="top"><font face="Arial" size="2">Address : </font></td>
						<td><textarea name="Address" cols="50" rows="3" onfocus="focusOn( this )" onblur="focusOff( this )"></textarea></td>
					</tr>
					<tr>
						<td nowrap="" valign="top"><font face="Arial" size="2">City : </font></td>
						<td><input name="City" value="" size="30" onfocus="focusOn( this )" onblur="focusOff( this )" type="text"></td>
					</tr>
					<tr>
						<td nowrap="" valign="top"><font face="Arial" size="2">Country : </font></td>
						<td><input name="Country" value="" size="30" onfocus="focusOn( this )" onblur="focusOff( this )" type="text"></td>
					</tr>
					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td nowrap="" valign="top"><font face="Arial" size="2">Home Tel : </font></td>
						<td><input name="Phone" value="" size="30" onfocus="focusOn( this )" onblur="focusOff( this )" type="text"></td>
					</tr>
					<tr>
						<td nowrap="" valign="top"><font face="Arial" size="2">Office Tel : </font></td>
						<td><input name="Phone2" value="" size="30" onfocus="focusOn( this )" onblur="focusOff( this )" type="text"></td>
					</tr>
					<tr>
						<td nowrap="" valign="top"><font face="Arial" size="2">Fax Tel : </font></td>
						<td><input name="Fax" value="" size="30" onfocus="focusOn( this )" onblur="focusOff( this )" type="text"></td>
					</tr>
					<tr>
						<td nowrap="" valign="top"><font face="Arial" size="2">Cellular : </font></td>
						<td><input name="CellPhone" value="" size="30" onfocus="focusOn( this )" onblur="focusOff( this )" type="text"></td>
					</tr>
					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td nowrap="" valign="top"><font face="Arial" size="2">E-mail : </font></td>
						<td><input name="Email" value="" size="50" onfocus="focusOn( this )" onblur="focusOff( this )" type="text"></td>
					</tr>
					
					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2"><font face="Arial" size="2"><input name="Authorize1" value="on" class="checkbox_bg" type="checkbox"> 		<b>I Hereby Authorize the following Persons to share my Box</b><br></font></td>
					</tr>
					<tr>
						<td nowrap="" valign="top"><font face="Arial" size="2">Co-Share Name 1 : </font></td>
						<td><input name="User1" value="" size="50" onfocus="focusOn( this )" onblur="focusOff( this )" type="text"></td>
					</tr>
					<tr>
						<td nowrap="" valign="top"><font face="Arial" size="2">Co-Share Name 2 : </font></td>
						<td><input name="User2" value="" size="50" onfocus="focusOn( this )" onblur="focusOff( this )" type="text"></td>
					</tr>
					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2"><font face="Arial" size="2"><b>LOGIN INFO (to the CMB web site)</b></font></td>
					</tr>
					<tr>
						<td nowrap="" valign="top"><font face="Arial" size="2">Username : </font></td>
						<td><input name="UserName" value="" size="20" onfocus="focusOn( this )" onblur="focusOff( this )" type="text"> <span class="smalltext">(4 to 10 Characters)</span></td>
					</tr>
					<tr>
						<td nowrap="" valign="top"><font face="Arial" size="2">Password : </font></td>
						<td><input name="Password1" size="20" onfocus="focusOn( this )" onblur="focusOff( this )" type="password"> <span class="smalltext">(4 to 10 Characters)</span></td>
					</tr>
					<tr>
						<td nowrap="" valign="top"><font face="Arial" size="2">Password (Repeat) :</font></td>
						<td><input name="Password2" size="20" onfocus="focusOn( this )" onblur="focusOff( this )" type="password"></td>
					</tr>
					<tr>
						<td nowrap="" valign="top"><font face="Arial" size="2">RememberPhrase : </font></td>
						<td><input name="RememberPhrase" value="" size="50" onfocus="focusOn( this )" onblur="focusOff( this )" type="text"></td>
					</tr>
					
					
					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr>
					<td colspan="2"><font face="Arial" size="2"> <b>DELIVERY SERVICE REQUIRED</b> <br>
						<input name="DeliveryService" value="Hold for Pick up at JSL Office" class="radio_bg" type="radio"> Hold for Pick up at JSL Office
						<input name="DeliveryService" value="Deliver to Home" class="radio_bg" type="radio"> Deliver to Home
						<input name="DeliveryService" value="Deliver to Business" class="radio_bg" type="radio"> Deliver to Business
					</font></td>
					</tr><tr>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2"><font face="Arial" size="2"><b>INSTRUCTIONS FOR CUSTOMS CLEARANCE HANDLING IN TRINIDAD</b> <br>
						<input name="ApprovedLimit" value="Do not clear my shipments, deliver documents to my address" class="radio_bg" type="radio">Do not clear my shipments, deliver documents to my address<br>
						<input name="ApprovedLimit" value="Do not clear my shipments, Hold documents for pick up" class="radio_bg" type="radio">Do not clear my shipments, Hold documents for pick up
						<br>
						I authorise JSL to clear my shipments, pay customs duties and Vat on my behalf<br>
						<input name="ApprovedLimit" value="$1.00 - $100.00" class="radio_bg" type="radio"> $1.00 - $100.00
						<input name="ApprovedLimit" value="$101-$500.00" class="radio_bg" type="radio"> $101-$500.00
						<br>
						<input name="ApprovedLimit" value="$501.00-$1000.00" class="radio_bg" type="radio"> $501.00-$1000.00
						<input name="ApprovedLimit" value="$1000.00 - $6300.00" class="radio_bg" type="radio"> $1000.00 - $6300.00
						</font></td>
					</tr><tr>
						<td colspan="2"><font face="Arial" size="2"><font size="1">*Value of item plus freight charges up to US$1,000.00 is cleared as non-trade. Value plus freight charges over US$1,000.00 requires a Broker.</font></font></td>
					</tr>
					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr>
					<td colspan="2" height="17"><font face="Arial" size="2"><b>INSURANCE</b> </font></td>
					</tr><tr>
					<td colspan="2"><font face="Arial" size="2">
						<input name="Insurance" value="No insurance requested" class="radio_bg" type="radio"> No insurance requested <font size="1">(JSL liability is limited to US$100.00)</font>
						<br>
						<input name="Insurance" value="on all my shipments" class="radio_bg" type="radio">Request Insurance on all my shipments
						<br>
						<input name="Insurance" class="radio_bg" value="Written notice for insurance on a particular shipment will be submitted" type="radio">Written notice for insurance on a particular shipment will be submitted
						</font></td>
					</tr><tr>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2"><font face="Arial" size="2">
							<input name="Authorize2" value="on" class="checkbox_bg" type="checkbox"> 		<b>I hereby authorize J.S.L Speedpak Services Inc. to open and search my packages to comply with T.S.A. regulations.  </b><br></font></td>
					</tr>
					<tr>
					</tr><tr>
						<td colspan="2"><font face="Arial" size="2">
							<input name="Authorize3" value="on" class="checkbox_bg" type="checkbox"> 		<b>I hereby authorize J.S.L. Speedpak Services Inc. to receive and process my USPS mail and boxes to be trans-shipped to Trinidad. </b><br></font></td>
					</tr>
					<tr>
					</tr><tr>
						<td colspan="2"><font face="Arial" size="2">
							<input name="Authorize5" value="on" class="checkbox_bg" type="checkbox"> 		<b>I Hereby Agree That the Above Information is True and Accurate and I Fully Understand the Terms and Conditions Attached to this Form.</b></font></td>
					</tr>
					<tr>
						<td colspan="2"><font face="Arial" size="2">
							<input name="Authorize4" value="on" class="checkbox_bg" type="checkbox"> 		<b>I hereby agree that I have read the Classic Mail Box terms and conditions and accept them all.
								<a href="mailbox_terms.html"><img src="images/bt_terms.gif" border="0" height="20" width="200"></a></b><br></font></td>
					</tr>
					<tr>
					
					</tr><tr>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input value="Continue" class="button" type="submit">
							<input value="Reset Form" class="button" type="reset"></td>
					</tr> 
					</tbody></table></td>
					</tr>
					</tbody></table>
					</form>
{{ $record->html_body2 }}


					</div>
				</div>
			</div>

				
		</div>
	</div>
</div>
