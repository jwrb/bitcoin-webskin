<?php
/*
  Bitcoin Webskin - an open source PHP web interface to bitcoind
  Copyright (c) 2011 14STzHS8qjsDPtqpQgcnwWpTaSHadgEewS
  Copyright (c) 2015 Joshua Baldwin
*/
?>
<html>
  <head>
    <title>Bitcoin Webskin</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
  </head>
  <body>
  <div class="container">
    <pre>
    <a href="./">Home</a>    <?php print date('r'); ?> 
    <?php if( $this->wallet_is_open ) {

        print 'Balance: <b>' . $this->info['balance'] . '</b>'
        . '   Blocks: ' . $this->info['blocks']     
        . '   Connections: ' . $this->info['connections'] 
        . '   Network: ' . SERVER_NETWORK . ($this->info['testnet'] ? ' Testnet' : '')    
          //. ' Pay Tx Fee: ' . $this->num($this->info['paytxfee']) 
            //. ' Oldest key: ' . $this->info['keypoololdest_date']
        ;

      } else {
        //if( !$this->hide_wallet_errors ) {  
          print 'Not Connected to Wallet';
        //}
      }
    ?></pre>
