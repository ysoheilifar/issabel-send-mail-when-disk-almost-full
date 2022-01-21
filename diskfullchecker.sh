 #!/bin/bash  
 CURRENT=$(df / | grep / | awk '{ print $5}' | sed 's/%//g')  
 THRESHOLD=90
 TO=y.soheilifar@gmail.com  
   
 if [ "$CURRENT" -gt "$THRESHOLD" ] ; then  
   ./phpmailer.php $TO "Email from issabel" "Disk is Full" 
 fi
 echo $?