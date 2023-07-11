+  Vendor Homepage: https://www.sourcecodester.com/php/16166/online-pizza-ordering-system-php-free-source-code.html
+ Software Link: https://www.sourcecodester.com/sites/default/files/download/oretnom23/php-opos.zip
+ Version: v1.0
+ Tested on: XAMPP + win10 + kali
+ vuln : arbitrary file upload cause RCE
+ Affected position : http://localhost/opos/admin/index.php?page=site_settings
+ cve id: CVE-2023-37151
+ CVSS v3.1 `AV:A/AC:H/PR:H/UI:R/S:C/C:H/I:H/A:H/E:F/RL:W/RC:R/CR:H/IR:H/AR:H/MAV:A/MAC:H/MPR:H/MUI:R/MS:C/MC:H/MI:H/MA:L`

![image](https://github.com/Trinity-SYT-SECURITY/arbitrary-file-upload-RCE/assets/96654161/2922f8d3-f54d-48eb-977e-ca93a4af72ad)

There is an option to upload pictures under this webpage. There is already a problem report of CVE-2023-2246, which is the problem of uploading arbitrary files. You can use this to upload malicious PHP to achieve RCE
![image](https://github.com/Trinity-SYT-SECURITY/arbitrary-file-upload-RCE/assets/96654161/2604c109-a34a-45ce-b3a3-63ee422d65be)

## POC

https://github.com/Trinity-SYT-SECURITY/arbitrary-file-upload-RCE/assets/96654161/2ed02cde-9a9e-4746-8312-cd8f83842456

