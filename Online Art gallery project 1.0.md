+ Vendor Homepage: https://github.com/projectworldsofficial
+ Software Link: https://github.com/projectworlds32/Art-Gallary-php/archive/master.zip
+ Version: 1.0
+ Tested on: Windows 10, XAMPP
+ vuln : Arbitrary File Upload cause RCE
+ influence path : http://localhost/artg/admin/adminHome.php

You can upload files arbitrarily under the "Slider Content" item on this page. If you upload malicious php, you can perform arbitrary operations on the remote machine
![image](https://github.com/Trinity-SYT-SECURITY/arbitrary-file-upload-RCE/assets/96654161/46f4ba70-462a-4307-9165-3f2e7ef05a27)

## POC :
https://github.com/Trinity-SYT-SECURITY/arbitrary-file-upload-RCE/assets/96654161/c7bf0edb-95b8-471b-9536-3450f863cd1c

