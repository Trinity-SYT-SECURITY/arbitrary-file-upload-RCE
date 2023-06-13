# Exploit Title: Online Clinic Management System 2.2 - RCE
+ Vendor Homepage: https://bigprof.com
+ Software Download Link : https://bigprof.com/appgini/applications/online-clinic-management-system# 
+ Tested on: XAMPP / Windows 10
+ cause vuln : "..\ocms\admin\images" Uploading malicious php under this directory location can cause RCE

POC:
> whoami
> ipconfig
> mkdir book
> dir

https://github.com/Trinity-SYT-SECURITY/arbitrary-file-upload-RCE/assets/96654161/a60b4606-ff38-4319-b52c-337208cd33ae

