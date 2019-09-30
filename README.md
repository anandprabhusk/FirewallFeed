You can read more about it in www.firewallfeed.com. 

GitHub - https://github.com/anandprabhusk/FirewallFeed

***About Firewall Feed***

Firewall Feed is a web based tool that you can use to build your own bad IP address feed in your local network for your firewall/IPS appliances. 

The tool facilitates maintaining IP addresses in a text file.

Most Next Generation firewalls support reading of such text files on regular intervals, so you can further enforce in firewall security policies to either allow or block traffic to these IP addresses. 

Hence you don’t need to make configuration change or commit on the firewall every time.

Yes, you are right. Firewall Feed is similar to spamhaus and other blocklists available on internet, but Firewall Feed is your own IP address feed that is running on your local LAN.


***Installation***

All you need is 
- a Web server supporting PHP (of any version). No database is needed. No special folder permission needed.
- extract files and copy to a web server folder.
That's it. 
Try accessing your web url in Internet browser and you must see our home page.


***How to use?***

* Use "Add IP to Feed" page, as and when you add IP addresses, it gets appended to a text file.

* Use "Remove IP from Feed" page, you can delete mistakenly added IP address from text file.

* Use "View Feed" page to view text file entries. "View Feed" page url is the one that you need to configure in firewall appliance to read on regular interval.
