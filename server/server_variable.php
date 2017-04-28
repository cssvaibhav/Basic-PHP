<?php

/**
 * ------------------------------------------------------
 * Code to demonstrate use of $_SERVER global variable
 * ------------------------------------------------------
 * Author : Vaibhav Kishorsingh Pardeshi
 * Date   : 28/4/2017
 * ------------------------------------------------------
 */
print_r($_SERVER);

/**
 * --------------------------------------------------------
 *  Output :
 * --------------------------------------------------------
 Array
(
    [MIBDIRS] => C:/xampp/php/extras/mibs
    [MYSQL_HOME] => \xampp\mysql\bin
    [OPENSSL_CONF] => C:/xampp/apache/bin/openssl.cnf
    [PHP_PEAR_SYSCONF_DIR] => \xampp\php
    [PHPRC] => \xampp\php
    [TMP] => \xampp\tmp
    [HTTP_HOST] => localhost
    [HTTP_CONNECTION] => keep-alive
    [HTTP_CACHE_CONTROL] => max-age=0
    [HTTP_UPGRADE_INSECURE_REQUESTS] => 1
    [HTTP_USER_AGENT] => Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36
    [HTTP_ACCEPT] => text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,;q=0.8
    [HTTP_ACCEPT_ENCODING] => gzip, deflate, sdch, br
    [HTTP_ACCEPT_LANGUAGE] => en-US,en;q=0.8
    [PATH] => C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;C:\ProgramData\ComposerSetup\bin;C:\Program Files\nodejs\;C:\xampp\php;C:\Users\a\AppData\Roaming\Composer\vendor\bin;C:\Program Files (x86)\Microsoft VS Code\bin;C:\Users\a\AppData\Roaming\npm;C:\Users\a\AppData\Roaming\Composer\vendor\bin;
    [SystemRoot] => C:\Windows
    [COMSPEC] => C:\Windows\system32\cmd.exe
    [PATHEXT] => .COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC
    [WINDIR] => C:\Windows
    [SERVER_SIGNATURE] => <address>Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/5.6.30 Server at localhost Port 80</address>

    [SERVER_SOFTWARE] => Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/5.6.30
    [SERVER_NAME] => localhost
    [SERVER_ADDR] => ::1
    [SERVER_PORT] => 80
    [REMOTE_ADDR] => ::1
    [DOCUMENT_ROOT] => C:/xampp/htdocs
    [REQUEST_SCHEME] => http
    [CONTEXT_PREFIX] => 
    [CONTEXT_DOCUMENT_ROOT] => C:/xampp/htdocs
    [SERVER_ADMIN] => postmaster@localhost
    [SCRIPT_FILENAME] => C:/xampp/htdocs/server/second.php
    [REMOTE_PORT] => 50121
    [GATEWAY_INTERFACE] => CGI/1.1
    [SERVER_PROTOCOL] => HTTP/1.1
    [REQUEST_METHOD] => GET
    [QUERY_STRING] => r=120
    [REQUEST_URI] => /server/second.php?r=120
    [SCRIPT_NAME] => /server/second.php
    [PHP_SELF] => /server/second.php
    [REQUEST_TIME_FLOAT] => 1493378037.854
    [REQUEST_TIME] => 1493378037
)
 */