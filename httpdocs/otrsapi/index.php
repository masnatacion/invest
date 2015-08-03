<?PHP
error_reporting(E_ALL);

# Please define the connection information here:
$url      = "http://dev2.adm.jslspeedpak.com/otrs/rpc.pl";
$username = "from_cmb_site";
$password = "Ss5VDrjcxxsRUuSg";
$title    = "My Test Ticket via SOAP and PHP";
$from     = "info@denacom.com";


echo "<html>\n";
echo "<head>\n";
echo "<title>Test SOAP-Interface</title>\n";
echo "</head>\n";
echo "<body>\n";
echo "<h1>Test SOAP-interface of OTRS</h1>\n";

# Set up a new SOAP connection:
$client = new SoapClient(null, array('location'  =>	$url,
                                     'uri'       => "Core",
                                     'trace'     => 1,
                                     'login'     => $username,
                                     'password'  => $password,
                                     'style'     => SOAP_RPC,
                                     'use'       => SOAP_ENCODED));

$read_ticket = '2015070810000202';

if (!$read_ticket){

	# Create a new ticket. The function returns the Ticket ID.
	$TicketID = $client->__soapCall("Dispatch", array($username, $password,
			"TicketObject", "TicketCreateNumber", 
	));
	
	print "<p>TicketID : $TicketID</p>";
	
	# A ticket is not usefull without at least one article. The function
	# returns an Article ID. 
	$ArticleID = $client->__soapCall("Dispatch", 
	array($username, $password,
			"TicketObject",   "TicketCreate",
			"TN",       $TicketID,
			"Title" , 'Some Ticket Title',
			"Queue" , 'Postmaster', 
			"Lock" , 'unlock',
			"PriorityID" , 2, 
			"State" , 'new',
			"CustomerUser" , '***@example.com',
			"OwnerID" , 1,
			"ResponsibleID" , 1, 
			"UserID" , 1,
	
	));
}else{
	$TicketID = 	$read_ticket;
}


# Use the Ticket ID to retrieve the Ticket Number.
$TicketNr = $client->__soapCall("Dispatch", 
	array($username, $password,
	"TicketObject",   "TicketGet",
	"TicketID",       $TicketID,
));



# Make sure the ticket number is not displayed in scientific notation
# See http://forums.otrs.org/viewtopic.php?f=53&t=5135
#$big_integer = 1202400000; 
#$Formatted_TicketNr = number_format($TicketNr, 0, '.', ''); 

# Print the info to the screen.
echo "<p>You have just created ticket id $TicketID  : <br>";
	print "NOTICE: Ticket Number is: $TicketNr[TicketNumber]<br>";
	print "NOTICE: Ticket State is: $TicketNr[State]<br>";
	print "NOTICE: Ticket Queue is: $TicketNr[Queue]<br>";
	echo "<pre>".print_r($TicketNr, true)."</pre>";
echo "</body>\n";
echo "</html>\n";

//
//<pre>
//	
//	
//		"Title",        $title, 
//		"Queue",        "Postmaster", 
//		"Lock",         "Unlock", 
//		"PriorityID",   2, 
//		"State",        "new", 	
//			"CustomerUser", $from, 
//		"OwnerID",      1, 
//		"UserID",       1,
//		"ArticleType",    "webrequest",
//		"SenderType",     "customer",
//		"HistoryType",    "WebRequestCustomer",
//		"HistoryComment", "created from PHP",
//		"From",           $from,
//		"Subject",        $title,
//		"ContentType",    "text/plain; charset=ISO-8859-1",
//		"Body",           "This is the body",
//		"UserID",         1,
//		"Loop",           0,
//		"AutoResponseType", 'auto reply',
//		"OrigHeader", array(
//		        'From' => $from,
//		        'To' => 'Postmaster',
//		        'Subject' => $title,
//		        'Body' => "This is the body"
//		    ),
//
//# create a new ticket number
//my $TicketNumber = $RPC->Dispatch($SOAP_User, $SOAP_Pass, 'TicketObject',
//'TicketCreateNumber');
//print "NOTICE: TicketObject->TicketCreateNumber() = $TicketNumber\n";
//print "NOTICE: TicketObject->TicketCreate()\n";
//my $TicketId = $RPC->Dispatch($SOAP_User, $SOAP_Pass, 'TicketObject', 'TicketCreate',
//	TN => $TicketNumber,
//	Title => 'Some Ticket Title',
//	Queue => 'Postmaster', # or QueueID => 123,
//	Lock => 'unlock',
//	PriorityID => 2, # or PriorityID => 2,
//	State => 'new', # or StateID => 5,
//	CustomerUser => '***@example.com',
//	OwnerID => 1, # new owner
//	ResponsibleID => 1, # new responsible
//	UserID => 1,
//);
//print "NOTICE: New Ticket id is: $TicketId\n";
//
//if ($TicketId) {
//	# get ticket attributes
//	print "NOTICE: TicketObject->TicketGet(TicketID => $TicketId)\n";
//	my %Ticket = $RPC->Dispatch($SOAP_User, $SOAP_Pass, 'TicketObject', 'TicketGet',
//	TicketID => $TicketId);
//	print "NOTICE: Ticket Number is: $Ticket{TicketNumber}\n";
//	print "NOTICE: Ticket State is: $Ticket{State}\n";
//	print "NOTICE: Ticket Queue is: $Ticket{Queue}\n";
//}


?>