<?php
/*
  Bitcoin Webskin - an open source PHP web interface to bitcoind
  Copyright (c) 2011 14STzHS8qjsDPtqpQgcnwWpTaSHadgEewS
*/
?><?php $this->template('header'); ?>


<div class="h-full flex-col" id="overview">
  <div class="col-sm-12 bg-primary dk flex-fill flex-col">
    <div class="row flex-fill flex-row">
      <div class="col-sm-6 m-t-b-a">
        <h2 class="m-none text-white font-thin">BALANCE</h2>
        <h1 class="m-none text-6x font-thin text-white"><?php print $this->wallet->getbalance('*','1'); ?></h1>
        <p><?php print sprintf('%0.6f', $this->info['newmint']);?> unconfirmed</p>
      </div>
      <div class="col-sm-6 text-right m-t-b-a">
        <h3 class="m-none text-white font-thin">STAKING</h3>
        <h1 class="m-none text-3x font-thin text-white"><?php print $this->info['stake']; ?></h1>
        <h2 class="m-none text-white font-thin"><?php if($this->info['stake'] > 0) { print 'currently staking ';} else { print 'not staking';};?></h2>
      </div>
    </div>
  </div>
  <div class=
  "col-sm-12 bg-dark lter flex-fill flex-row m-none no-padder">
    <div class="col-sm-6 flex-fill">
      <h3 class="m-t-xl m-b-none text-white font-thin">RECENT
      TRANSACTIONS</h3>
      <div class="row">
        <table class="col-sm-12">
          <tbody>
            <?php    
              $this->account == '*';
              $this->count == '3';
              $this->from == 0;

              print $this->count;

              /* @$value['category'] */ 
              foreach ($this->wallet->listtransactions('*','3','0') AS $key => $value) {
                print '<tr>'
                . '<td class="col-sm-1 text-3x text-center"><i class="fa fa-chevron-down"></i></td>'
                . '<td class="col-sm-7 text-white text-lg"><br>'
                . $value['category']
                . '<small style="font-size: 11px;">' . $value['status'] . '</small></td>'
                . '<td class="col-sm-4 text-lg text-right">' . round($value['amount'], 2) . ' XPY </td>'
                . '</tr>';
              } // end each transaction

            ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class=
    "col-sm-6 text-right bg-light flex-fill no-padder flex-col" id=
    "nav">
      <a class="btn btn-default w-full no-radius flex-fill flex-col"
      href="/?a=sendtoaddress">
      <div class="inner text-3x font-thin m-t-b-a">
        <i class="fa fa-arrow-right m-r-md"></i>SEND
      </div></a><a class=
      "btn btn-success w-full no-radius flex-fill flex-col" href=
      "/?a=listreceivedbyaddress&minconf=1&includeempty=true">
      <div class="inner text-3x font-thin m-t-b-a">
        <i class="fa fa-arrow-left m-r-md"></i>RECEIVE
      </div></a>
    </div>
  </div>
</div>
</div>


<table><?php 

  while( list($name,$val) = @each($this->getinfo) ) {
    print "<tr><td>$name</td><td>$val</td></tr>";
  }
    
?></table>
<?php $this->template('footer'); ?>