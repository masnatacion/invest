#!/usr/bin/perl -w
# SOAP Config
use SOAP::Lite( 'autodispatch', proxy => 'http://dev2.adm.jslspeedpak.com/otrs/rpc.pl' );
my $SOAP_User = 'from_cmb_site';
my $SOAP_Pass = 'Ss5VDrjcxxsRUuSg';
 
# getting TicketID
use Getopt::Std;
my %opts;
getopts( 'm:', \%opts );
if ( !$opts{m} ) {
    print STDERR "ERROR: Need -m Maximum Queues\n";
    exit 1;
}
# SOAP script
my $RPC = Core->new();
 


# create a new ticket number
my $TicketNumber = $RPC->Dispatch($SOAP_User, $SOAP_Pass, 'TicketObject',
'TicketCreateNumber');
print "NOTICE: TicketObject->TicketCreateNumber() = $TicketNumber\n";
print "NOTICE: TicketObject->TicketCreate()\n";
my $TicketId = $RPC->Dispatch($SOAP_User, $SOAP_Pass, 'TicketObject', 'TicketCreate',
	TN => $TicketNumber,
	Title => 'Some Ticket Title',
	Queue => 'Postmaster', # or QueueID => 123,
	Lock => 'unlock',
	PriorityID => 2, # or PriorityID => 2,
	State => 'new', # or StateID => 5,
	CustomerUser => '***@example.com',
	OwnerID => 1, # new owner
	ResponsibleID => 1, # new responsible
	UserID => 1,
);
print "NOTICE: New Ticket id is: $TicketId\n";

if ($TicketId) {
	# get ticket attributes
	print "NOTICE: TicketObject->TicketGet(TicketID => $TicketId)\n";
	my %Ticket = $RPC->Dispatch($SOAP_User, $SOAP_Pass, 'TicketObject', 'TicketGet',
	TicketID => $TicketId);
	print "NOTICE: Ticket Number is: $Ticket{TicketNumber}\n";
	print "NOTICE: Ticket State is: $Ticket{State}\n";
	print "NOTICE: Ticket Queue is: $Ticket{Queue}\n";
}


exit 0;