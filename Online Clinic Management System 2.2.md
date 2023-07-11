# Exploit Title: Online Clinic Management System 2.2 - RCE
+ Vendor Homepage: https://bigprof.com
+ Software Download Link : https://bigprof.com/appgini/applications/online-clinic-management-system# 
+ Tested on: XAMPP / Windows 10
+ cause vuln : "..\ocms\admin\images"、"..\ocms\images" Uploading malicious php under this directory location can cause RCE
+ cve id: CVE-2023-36120
+ CVSS v3.1: `AV:A/AC:L/PR:H/UI:R/S:C/C:H/I:H/A:H/E:F/RL:W/RC:R/CR:H/IR:H/AR:H/MAV:A/MAC:L/MPR:H/MUI:R/MS:C/MC:H/MI:H/MA:L`

![image](https://github.com/Trinity-SYT-SECURITY/arbitrary-file-upload-RCE/assets/96654161/66cf7dac-6492-43f9-91d9-f68906181cb3)


vuln detailed : 
When an application allows users to upload files to the target server's image directory, it is typically expected to accept only image files.

However, if the application does not perform proper file type validation and filtering, an attacker can upload malicious files such as executable script files (e.g., PHP, Python) or files containing malicious code.

Since these non-image files are located within the image directory, and servers usually perform certain operations on files in that directory, such as generating thumbnails, an attacker can exploit this by crafting specific malicious filenames or leveraging vulnerabilities in the application to execute unexpected operations, including remote code execution.

By executing malicious code, the attacker can gain complete control over the server, access sensitive data, modify files, perform arbitrary operations on the server, and pose a significant threat to the system and the application.

POC:
+ whoami
+ ipconfig
+ mkdir book
+ dir

https://github.com/Trinity-SYT-SECURITY/arbitrary-file-upload-RCE/assets/96654161/805de3b7-5b19-4db8-a2e1-f56e7038651f

