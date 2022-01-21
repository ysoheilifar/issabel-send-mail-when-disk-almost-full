# issabel Send Mail When Disk Almost Full

1. Copy all downloaded file in `/usr/share/php` directory on issabel

2. Set `775` or `777` permission to all downloaded files
``` bash script

cd /usr/share/php
chmod 777 phpmailer.php
chmod 777 diskfullchecker.sh

```
3. Open and edit below parameters on `phpmailer.php` 
```php

$mail->Username = "decat.router@gmail.com";     // SMTP username
$mail->Password = "decat102030@";              // SMTP password

$mail->From = "decat.router@gmail.com";

```
