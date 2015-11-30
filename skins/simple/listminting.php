<?php
/*
  Bitcoin Webskin - an open source PHP web interface to bitcoind
  Copyright (c) 2011 14STzHS8qjsDPtqpQgcnwWpTaSHadgEewS
*/
?><?php $this->template('header'); ?>

<div class="tab-text bg-light lter b-b padder flex h">
  <h3 class="text-primary no-padder inline m-t-b-a">Transaction History</h3>
</div>

<div class="wrapper">
  <table class="table">
    <thead>
      <tr>
        <th>Date</th>
        <th>Address</th>
        <th>Age</th>
        <th class="text-right">Balance</th>
        <th>Coin Day</th>
        <th>Probability</th>
      </tr>
    </thead>
    <tbody>
    <?php
      if( !count(@$this->listminting) ) {
        print '<tr><td>No Transactions Found</td></tr>';
      } else {
        foreach ($this->listminting AS $key => $value) {
          print '<tr style="font-size:16px;">'
          . '<td>' . date('d/m/Y, H:i:s', $value['time']) . '</td>'
          . '<td><p><a target="_blank" href="https://chainz.cryptoid.info/xpy/tx.dws?'
            . urlencode($value['input-txid']) . '.htm">' . substr( $value['input-txid'], 0, 36) . '...'
            . '</a>'
            . '<span style="display:block;">' . $value['address']
            . '</span></p></td>'
          . '<td>' .$value['age-in-day'] . '</td>'
          . '<td style="text-align: right;">' . number_format(($value['amount'] / 1000000), 6) . '</td>'
          . '<td>' . $value['coin-day-weight'] . '</td>'
          . '<td>' . number_format((100 * $value['minting-probability-10min']), 2) . '%</td>'
          . '</tr>';
        } // end each transaction
      } // end if transactions
    ?>
    </tbody>
  </table>
</div>

<?php $this->template('footer'); ?>
