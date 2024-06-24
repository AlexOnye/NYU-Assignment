# @(#)local.login 1.5     98/10/03 SMI
stty -istrip 
# setenv TERM `tset -Q -`

#
# if possible, start the windows system.  Give user a chance to bail out
#
if ( "`tty`" == "/dev/console" ) then

	if ( "$TERM" == "sun" || "$TERM" == "sun-color" || "$TERM" == "AT386" ) then

		if ( ${?OPENWINHOME} == 0 ) then	 
			setenv OPENWINHOME /usr/openwin
		endif			    

		echo ""
		echo -n "Starting OpenWindows in 5 seconds (type Control-C to interrupt)"
		sleep 5
		echo ""
		$OPENWINHOME/bin/openwin
		clear		# get rid of annoying cursor rectangle
		logout		# logout after leaving windows system

	endif

endif
# DO NOT REMOVE THIS LINE - this allows for cgi-bin links
# if cgi-bin dir does not exist, create it
if !( -d ~/`/usr/bin/whoami`-bin ) then
   mkdir ~/`/usr/bin/whoami`-bin
endif

