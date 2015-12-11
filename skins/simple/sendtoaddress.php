<?php
/*
  Bitcoin Webskin - an open source PHP web interface to bitcoind
  Copyright (c) 2011 14STzHS8qjsDPtqpQgcnwWpTaSHadgEewS
*/
?><?php $this->template('header'); ?>
<div class="tab-text bg-light lter b-b padder flex h">
  <h3 class="text-primary no-padder inline m-t-b-a">Send Paycoins</h3>
  <div class="available-balance inline w-md m-t-b-a m-l-sm"><span class="inline m-r-sm">Balance:</span><span class="font-bold inline">
    <?php if( $this->wallet_is_open ) {
        print $this->info['balance'];
      } else {
        print 'Unavailable';
      }
    ?></span></div>
</div>
<div class="wrapper">
  <form class="send">
    <div class="form-group">
      <div class="input-group w-full"><span id="payee" class="input-group-addon w-xs">Pay To</span>
        <input type="hidden" name="a" value="sendtoaddress">

        <input id="payee" type="text" placeholder="Enter a Paycoin Address" name="address" value="<?php print $this->address; ?>" class="form-control"/>
      </div>
    </div>
    <div class="form-group">
      <div class="input-group w-full"><span id="amount" class="input-group-addon w-xs">Label</span>
        <input id="label" type="text" placeholder="Enter a label for this address to save it to your address book" name="label" class="form-control"/>
      </div>
    </div>
    <div class="form-group">
      <div class="input-group w-full"><span id="amount" class="input-group-addon w-xs">Amount</span>
        <input id="amount" type="text" placeholder="Enter an Amount to Send" name="amount" value="<?php print $this->amount; ?>" class="form-control"/>
      </div>
    </div>
    <div class="form-group">
      <div class="available-balance inline w-md"><span class="inline m-r-md">Total:</span>
        <h4 class="font-bold inline"></h4>
      </div>
      <?php
      if( isset($_GET['preview']) && $this->address && $this->amount ) {
        print '<button id="submit" type="submit" class="btn btn-default w-md pull-right inline">Send Coins</button>
        <input type="hidden" name="ok" value="1">';
      } else { 
        print '<button id="submit" type="submit" class="btn btn-default w-md pull-right inline">Preview</button>
        <input type="hidden" name="preview" value="1">';
      }

      ?>
    </div>

    
  </form>





<?php 

   if( !$this->ok ) { 
    ?>
<pre>
PREVIEW:

Validating Address: <?php print $this->address; ?> 
<?php print_r(@$this->validateaddress); ?> 

Amount: <?php print @$this->num( $this->amount ); ?> Coins
    
</pre>
<?php

  }


  if( isset( $this->sendtoaddress ) ) {
    print '<pre>Send Result:<br />'; 
    print_r($this->sendtoaddress); 
    print '<p><a href="./?a=gettransaction&txid=' . urlencode($this->sendtoaddress) 
    . '">gettransaction( ' . $this->sendtoaddress . ' )</a>';
    print '</pre>';
  }
    
?> 
</div>

<?php $this->template('footer'); ?>
