# issabel Send Mail When Disk Almost Full

1. Copy all downloaded file in `/usr/share/php` directory on issabel

2. Set `775` or `777` permission to all downloaded files
``` bash script

cd /usr/share/php
chmod 777 phpmailer.php
chmod 777 diskfullchecker.sh

```
3. Open and edit these parameters on `phpmailer.php` (set an gmail account for issabel to send email)
```php

$mail->Username = "issabel_Gmail_account@gmail.com";     // SMTP username
$mail->Password = "issabel_Gmail_password";              // SMTP password

$mail->From = "issabel_Gmail_account@gmail.com";         // SMTP username

```

4. Open and edit these parameters on `diskfullchecker.sh` (set admin gmail account)
```bash script

TO=admin_Gmail_account@gmail.com

```
