<?php
/*
  Bitcoin Webskin - an open source PHP web interface to bitcoind
  Copyright (c) 2011 14STzHS8qjsDPtqpQgcnwWpTaSHadgEewS
*/
?><?php $this->template('header'); ?>
<div class="tab-text bg-light lter b-b padder flex h">
  <h3 class="text-primary no-padder m-t-b-a col-sm-9">Receive Paycoins</h3><a href="/?a=getnewaddress&account=" class="btn btn-dark m-sm col-sm-3 m-r-none flex-wrap">
    <font-thin class="m-t-b-a">Generate Address</font-thin></a>
</div>

<div class="wrapper bg-light">
  <table class="table table-condensed">
    <tbody>
      <?php


      while( list(,$x) = @each($this->listreceivedbyaddress) ) {
        if($x['account'] == ""){
          $x['account'] = "[no label]";
        }
        print '<tr><td class="account">' .'<a href="?a=listtransactions&account=' . urlencode($x['account']) . '">' 
        . $x['account'] . '</a></td>'
        . '<td>' . $x['address'] .'</td>';
      }

      ?>
    </tbody>
  </table>
<?php $this->template('footer'); ?>
