+ Vendor Homepage: https://github.com/projectworldsofficial
+ EXPLOIT-AUTHOR : Noflag(CHT Security)
+ Software Link: https://github.com/projectworlds32/Art-Gallary-php/archive/master.zip
  + https://www.freeprojectz.com/project-source-code-database-download/online-art-gallery-project
+ Version: 1.0
+ Tested on: Windows 10, XAMPP
+ vuln : Arbitrary File Upload cause RCE
+ influence path : http://localhost/artg/admin/adminHome.php
+ cve id: CVE-2023-37152
+ CVSS 3.1 /AV:N/AC:L/PR:N/UI:N/S:U/C:H/I:H/A:H
+ CVSS 9.8
+ https://feedly.com/cve/CVE-2023-37152
+ https://nvd.nist.gov/vuln/detail/CVE-2023-37152


You can upload files arbitrarily under the "Slider Content" item on this page. If you upload malicious php, you can perform arbitrary operations on the remote machine

![image](https://github.com/Trinity-SYT-SECURITY/arbitrary-file-upload-RCE/assets/96654161/46f4ba70-462a-4307-9165-3f2e7ef05a27)

## POC :
https://github.com/Trinity-SYT-SECURITY/arbitrary-file-upload-RCE/assets/96654161/c7bf0edb-95b8-471b-9536-3450f863cd1c

