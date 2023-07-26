+  Vendor Homepage: https://www.sourcecodester.com/php/16166/online-pizza-ordering-system-php-free-source-code.html
+ EXPLOIT-AUTHOR : Noflag(CHT Security)
+ Software Link: https://www.sourcecodester.com/sites/default/files/download/oretnom23/php-opos.zip
+ Version: v1.0
+ Tested on: XAMPP + win10 + kali
+ vuln : arbitrary file upload cause RCE
+ Affected position : http://localhost/opos/admin/index.php?page=site_settings
+ cve id: CVE-2023-37151
+ CVSS:3.1/AV:N/AC:L/PR:N/UI:N/S:U/C:H/I:H/A:H
+ cvss  9.8
+ https://www.tenable.com/cve/CVE-2023-37151
+ https://nvd.nist.gov/vuln/detail/CVE-2023-37151


There is an option to upload pictures under this webpage. There is already a problem report of CVE-2023-2246, which is the problem of uploading arbitrary files. You can use this to upload malicious PHP to achieve RCE
![image](https://github.com/Trinity-SYT-SECURITY/arbitrary-file-upload-RCE/assets/96654161/2604c109-a34a-45ce-b3a3-63ee422d65be)

## POC

https://github.com/Trinity-SYT-SECURITY/arbitrary-file-upload-RCE/assets/96654161/2ed02cde-9a9e-4746-8312-cd8f83842456

