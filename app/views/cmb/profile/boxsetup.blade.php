@extends("cmb.layout")

@section("class")
customer {{ Session::get('member_type'); }} profile
@stop

@section("jumbotron")
@stop


@section("top-content")

	<div class="avatar margin-bottom-lg">
			<img class="profile-img-card" src="./img/avatar.png">
			<div class="content">
				<h3>{{ Auth::customer()->get()->name }}</h3>
				<h4>{{ Auth::customer()->get()->member_type }}</h4>
				<p>	Balance : TT$ 53,024.41</p>
			</div>
	</div>


    <ul class="nav nav-tabs profile-tabs">
      <li class=""><a href="./cmb/profile" data-toggle="tab">Profile</a></li>
      <li><a href="./cmb/profile/password"  data-toggle="tab">Password</a></li>
      @if(!Session::get('is_related'))
      	<li><a href="./cmb/profile/coshare" data-toggle="tab">coShare</a></li>
      @endif
      <li><a href="./cmb/profile/notifications"  data-toggle="tab">Notifications</a></li>
      <li><a href="./cmb/profile/boxsetup" class="active" data-toggle="tab">Box Setup</a></li>
    </ul>
    
    
    <div id="myTabContent" class="tab-content">



      <div class="tab-pane fade" id="boxsetup">
    	<form id="tab2">

		  <div class="form-group">

                	<p align="center"><b>!!!!!! IMPORTANT TERMS &amp; CONDITIONS !!!!!!</b></p>
					<ol>
						<li>Any items that are not checked off on this list or 
						that are not listed in the field provided will be 
						considered approved to ship. This means you the customer 
						will be liable to pay the freight on any mail received 
						that is not on this list. </li>
						<li>This list can be updated and modified at your 
						leisure, in the event you wish to change the choices you 
						have made. </li>
						<li>Mail will be accumulated, sorted and shipped on a 
						weekly basis and delivered as a package. </li>
						<li>Refusal to accept mail packages will result in 
						cancellation of your mail room privileges. No more mail 
						will be sorted or shipped to your address and any mail 
						received by our Miami Branch will be returned to the 
						Post Office or dumped. </li>
						<li>In order to provide you with a better mail service 
						we have opted to package your mail in envelopes and box 
						mailers to prevent damage. A small charge will be added 
						to your AWB of $0.18 ($1.13 ttd) for envelopes and $.50 
						($3.15 ttd) for box mailers. The additional charge for 
						the mailers is not per pound, but is a charge for the 
						packaging. </li>
						<li>All mail will be delivered to the address that was 
						provided upon opening your Classic Mail Box account. If 
						your address has changed please notify our local office 
						and they will make the changes on your account. </li>
						<li>Please be advised that you can change your address 
						only once a year. This is done to prevent any confusion 
						from arising during delivery. </li>
						<li>Our delivery schedules are tailored around the 
						addresses that are provided on the accounts, therefore 
						any mail that needs to be delivered to another 
						destination other than what is recorded on your account 
						will be charged a $30.00 fee for delivery. </li>
						<li>Any special handling information for your mail will 
						have to be submitted via a shipper's instructions form. 
						No verbal or email instructions are accepted. </li>
						<li>Upon delivery mailers cannot be opened unless the 
						driver has received payment. </li>
					</ol>
					<p>The use of this form signifies your agreement to the 
					above terms and conditions. We look forward to your 
					cooperation in this venture and will be happy to assist you 
					in any way to make your experience at Jsl Speedpak Services 
					better. </p>
					<p>Thank you for choosing Classic Mail Box and God Bless</p>
                  	<p class="regtext" align="justify"><br>
                   	</p><p align="center"><b>Classic Mail Box Mail Room Form</b></p>
					<p>As you are aware here at JSL we are constantly trying to 
					improve our customers experience with our service. Therefore 
					we created this form as an attempt to make improvements to 
					our mail room. In addition to additional drivers for mail 
					packages, we believe this will make receiving your mail a 
					synch. </p>
					<p><b>Why complete this form?<br>
					</b>In the US it is a custom for companies to advertise 
					using flyers, mailers and catalogs that would usually be 
					considered 'Junk Mail' if you are not interested in the 
					product. This 'junk mail' is then shipped to you and 
					delivered only to be thrown away, but the reality is you've 
					paid freight on mail you intend to junk. This is where our 
					mail room comes in to save the day. In order to assist us 
					with sorting and delivering your mail we will need your 
					help. Once you fill out the form below checking all the 
					common items on the list you consider to be 'junk mail', 
					those items will be removed from your mail before it is 
					shipped to you. This will drastically reduce your mail's 
					shipping weight and freight charges. Now what can you do if 
					the items you want to remove are not on this list? Don't 
					worry, to the bottom of this form is an open field where you 
					can type in any items you may want to also exclude from your 
					mail before shipping.<br>
					This process is simple and benefits you long term.</p>
	    
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">JUNK MAIL : </label><br>
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> Jc Penny catalogs with 'Your Name' or 'Current Address' as the recipient. 	<br>
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> Victoria Secret catalogs with 'Your Name' or 'Current Address' as the recipient. 	<br>
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> Oriental Trading catalogs with 'Your Name' or 'Current Address' as the recipient. 	<br>
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> Any magazine or catalog with 'Your Name' or 'Current Address' as the recipient. 	<br>
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> Dell Promotional flyers. Rooms To Go promotional flyers. 	<br>
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> Office Depot promotional flyers. 	<br>
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> Office Max Promotional flyers. 	<br>
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> Huggies Store samples. 	<br>
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> Oil of Olay Store samples. 	<br>
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> Sephora Store samples. 	<br>
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> Any type of store sample. 	<br>
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> Credit Card Application letters. 	<br>
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> AOL promotional software (CD). 	<br>
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> Any internet provider promotional software (CD). 	<br>
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> TV Guide. Geico Insurance applications. 	<br>
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> Assurity Direct Insurance applications. 	<br>
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> Progressive Insurance applications. 	<br>
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> Newspapers eg (SD Times). 	<br>
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> DVD/Music Club Offers. 	<br>
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> Kmart coupon booklets. 	<br>
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> CVS Pharmacy coupon booklets.<br> 	
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> Walgreens coupon booklets. 	<br>
					<input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> Other items not listed.<br>
		    
		  </div>


          <button class="btn btn-lg btn-success">Change</button>
    	</form>
      </div>



@stop


