 #!/bin/bash  
 CURRENT=$(df / | grep / | awk '{ print $5}' | sed 's/%//g')  
 THRESHOLD=90
 TO=issabel_Gmail_account@gmail.com 
   
 if [ "$CURRENT" -gt "$THRESHOLD" ] ; then  
   ./phpmailer.php $TO "Email from issabel" "Disk is Full" 
 fi
 echo $?
