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
print "NOTICE: TicketObject->TicketCreateNumber()\n";
my $TicketNumber = $RPC->Dispatch( $SOAP_User, $SOAP_Pass, 'TicketObject', 'TicketCreateNumber' );
print "NOTICE: New Ticket Number is: $TicketNumber\n";

# get ticket attributes
print "NOTICE: TicketObject->TicketGet(TicketID => 1)\n";
my %Ticket = $RPC->Dispatch( $SOAP_User, $SOAP_Pass, 'TicketObject', 'TicketGet', TicketID => 1 );
print "NOTICE: Ticket Number is: $Ticket{TicketNumber}\n";
print "NOTICE: Ticket State is:  $Ticket{State}\n";
print "NOTICE: Ticket Queue is:  $Ticket{Queue}\n";

exit 0;