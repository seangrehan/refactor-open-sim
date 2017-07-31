#!/bin/bash
 echo "Content-type: text/html"
 echo

 OWNER=$(echo $QUERY_STRING | cut -d"&" -f1 | cut -d"=" -f2)
 OWNER=$(echo $OWNER | sed s/"+"/" "/g)
 OWNER=$(echo $OWNER | sed s/"%40"/"@"/g)

 DATE=$(date)

 echo "<html><title>Mail Script</title>"
 echo "<body bgcolor="#FFFFFF">"
 echo "<font face="arial" color="#FF3399"> $DATE </font>"
 echo "<p><b><font face="arial" color="blue">Thank-you for your message</b>"
 echo "</body></html>"


 echo "$QUERY_STRING" | mail $OWNER -s "Message from website"