<?php
/*
  Bitcoin Webskin - an open source PHP web interface to bitcoind
  Copyright (c) 2011 14STzHS8qjsDPtqpQgcnwWpTaSHadgEewS
  Copyright (c) 2015 Joshua Baldwin
*/
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Paycoin Wallet</title>
  <meta content="" name="description">
  <meta content="width=device-width, initial-scale=1" name="viewport">

  <link href="/public/css/bootstrap.css" rel="stylesheet">
  <link href="/public/css/trendy.css" rel="stylesheet">
  <link href="/public/css/font-awesome.min.css" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <style>
  html {
  overflow: hidden;
  }
  body {
  padding: 0;
  overflow: auto;
  margin: 0;
  -webkit-overflow-scrolling: touch;
  }
  </style>
  <script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
</head>
<body>
  <div class="bg-light h-full" style="padding-top:60px;padding-bottom:22px;">
    <div class="pos-fix w-full" style="z-index:9999;top:0;">
      <div class="navbar navbar-default w-full bg-primary" role="navigation">
        <div class="navbar-header flex-wrap" style="height:60px;">
          <a href="/" class="navbar-brand m-l-sm m-r no-padder m-t-b-a" style=
          "width:128px;height:40px;">
            <div class="svg-r-container">
              <svg class="svg-r" viewbox="0 0 128 40" xmlns=
              "http://www.w3.org/2000/svg">
              <title>PayCoin Logo</title>
              <desc>
                PayCoin Wallet v5
              </desc>
              <defs></defs>
              <g fill="none" fill-rule="evenodd" id="xpy" stroke="none"
              stroke-width="1">
                <path d=
                "M55.1853616,13.0382243 C58.5958207,13.0382243 60.5663707,14.7441602 60.5663707,17.6987562 C60.5663707,20.7722722 58.5958207,22.5376681 55.1853616,22.5376681 L51.57644,22.5376681 L51.57644,26.92072 L50,26.92072 L50,13.0382243 L55.1853616,13.0382243 L55.1853616,13.0382243 Z M51.57644,21.011528 L55.1262451,21.011528 C57.6091382,21.011528 59.0490472,19.9001921 59.0490472,17.7398119 C59.0490472,15.6360603 57.6091382,14.5657802 55.1262451,14.5657802 L51.57644,14.5657802 L51.57644,21.011528 Z M62.6312256,23.4097482 L61.0941966,26.92072 L59.4178216,26.92072 L65.6095712,13.0382243 L67.2451278,13.0382243 L73.4157644,26.92072 L71.7013859,26.92072 L70.1629493,23.4097482 L62.6312256,23.4097482 Z M66.3766782,14.8446759 L63.3012126,21.883608 L69.4929623,21.883608 L66.3766782,14.8446759 Z M78.5743828,26.92072 L77.0176483,26.92072 L77.0176483,22.2219638 L71.6746427,13.0382243 L73.3116068,13.0382243 L77.7861628,20.2781879 L82.20301,13.0382243 L83.8202685,13.0382243 L78.5743828,22.1625038 L78.5743828,26.92072 Z M95.1903421,15.0230559 L94.2430706,16.232076 C93.1789736,15.1405602 91.679948,14.4865002 90.1626245,14.4865002 C87.0477479,14.4865002 84.5437419,16.9059561 84.5437419,19.9596521 C84.5437419,22.9935282 87.0477479,25.4328041 90.1626245,25.4328041 C91.679948,25.4328041 93.1592681,24.7985641 94.2430706,23.7665082 L95.2100476,24.8580241 C93.8489606,26.1477399 91.995236,27 90.0838025,27 C86.1004764,27 82.9461888,23.8854283 82.9461888,19.9596521 C82.9461888,16.073516 86.1398874,13 90.142919,13 C92.034647,13 93.8686661,13.7729801 95.1903421,15.0230559 Z M109.872347,19.9808879 C109.872347,23.8854283 106.678649,27 102.655912,27 C98.6148766,27 95.4197705,23.8854283 95.4197705,19.9808879 C95.4197705,16.053696 98.6148766,13 102.655912,13 C106.678649,13 109.872347,16.073516 109.872347,19.9808879 Z M97.0173235,19.9808879 C97.0173235,23.0345839 99.5804461,25.4724441 102.655912,25.4724441 C105.731377,25.4724441 108.255089,23.0345839 108.255089,19.9808879 C108.255089,16.9257761 105.731377,14.5063202 102.655912,14.5063202 C99.5804461,14.5063202 97.0173235,16.9257761 97.0173235,19.9808879 Z M111.757038,13.0382243 L113.334885,13.0382243 L113.334885,26.92072 L111.757038,26.92072 L111.757038,13.0382243 Z M126.384149,26.92072 L118.102209,15.776216 L118.102209,26.92072 L116.525769,26.92072 L116.525769,13.0382243 L118.161325,13.0382243 L126.443265,24.203964 L126.443265,13.0382243 L128,13.0382243 L128,26.92072 L126.384149,26.92072 Z"
                fill="#FFFFFF" id="paycoin"></path>
                <path d=
                "M19.9992945,0 C8.95473948,0 0,8.95223312 0,20 C0,25.8914838 2.54700674,31.186058 6.59964017,34.8465392 L6.59117367,22.6712764 L6.59540692,20 C6.59540692,12.6070698 12.6080361,6.59281733 19.9992945,6.59281733 C27.3919639,6.59281733 33.403182,12.6070698 33.403182,20 C33.403182,27.3929302 27.3919639,33.4043604 19.9992945,33.4043604 C17.4000776,33.4043604 14.9236251,32.6762153 12.7688997,31.2862485 L12.7688997,38.6453115 C15.0125234,39.5188034 17.4480545,40 19.9992945,40 C31.0452605,40 40,31.0449446 40,20 C40,8.95223312 31.0452605,0 19.9992945,0 Z M20.0007055,8.67282862 C13.7538364,8.67282862 8.67393375,13.7543216 8.67393375,20 C8.67393375,20.2568264 8.70215543,35.2529457 8.70215543,36.3818528 C8.96885032,36.6810132 9.78869016,37.1805546 10.2472925,37.3879913 L10.2472925,25.7489593 C12.219988,29.0834686 15.8521184,31.3257602 20.0007055,31.3257602 C26.2447525,31.3257602 31.3260663,26.2456784 31.3260663,20 C31.3260663,13.7543216 26.2447525,8.67282862 20.0007055,8.67282862 Z M20.0007055,29.7819798 C14.7966275,29.7819798 10.5422091,25.6953362 10.2472925,20.5658647 L10.2472925,19.4341353 C10.5422091,14.3032527 14.7966275,10.216609 20.0007055,10.216609 C25.3938688,10.216609 29.7823403,14.6052353 29.7823403,20 C29.7823403,25.3947647 25.3938688,29.7819798 20.0007055,29.7819798 L20.0007055,29.7819798 Z"
                fill="#FFFFFF" id="logo"></path>
              </g></svg>
            </div>
          </a>
        </div>
        <ul class="nav navbar-nav pull-right text-u-c no-select" id=
        "navigation">
          <li class="active">
            <a class="js-tab-balance padder" href="/?a=overview"><i class=
            "fa fa-home m-r-sm text-white"></i><span class=
            "text-md text-white">Overview</span></a>
          </li>
          <li>
            <a class="js-tab-transaction padder" href="/?a=listtransactions"><i class=
            "fa fa-list m-r-sm text-white"></i><span class=
            "text-md text-white">History</span></a>
          </li>
          <li>
            <a class="js-tab-address-book padder" href="/?a=listminting"><i class=
            "fa fa-usd m-r-sm text-white"></i><span class=
            "text-md text-white">Staking</span></a>
          </li>
          <li>
            <a class="js-tab-settings padder" href="#settings"><i class=
            "fa fa-gears m-r-sm text-white"></i><span class=
            "text-md text-white">Settings</span></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="pos-fix w-full" style="z-index:9999;bottom:0;height:22px;">
      <div class="menu-bar w-full bg-primary sync-status">
        <div class="row">
          <div class="col-xs-8">
            <div class="row">
              <div class="col-xs-8">
                <div class="progress bg-primary dk m-xs rounded" style=
                "height: 12px;">
                  <?php if ($this->wallet_is_open ) {
                    if ($this->info['blocks'] <= $this->wallet->xpy_getbestheight()) {
                      $width = ($this->info['blocks'] / $this->wallet->xpy_getbestheight()) * 100;
                    } else {
                      $width = 100;
                    }
                  }
                  ?>
                  <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo $width;?>"
                  class="progress-bar bg-primary dker" role="progressbar"
                  style="width: <?php echo $width;?>%;"></div>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="text-info block-height">
                  <?php if ($this->wallet_is_open ) {
                    if ($this->info['blocks'] <= $this->wallet->xpy_getbestheight()) {
                      print $this->info['blocks'] . ' / ' . $this->wallet->xpy_getbestheight() . ' Blocks';
                    } else {
                      print $this->info['blocks'] . ' / ' . $this->info['blocks'] . ' Blocks';
                    }
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-4">
            <div class="pull-right">
              <div class="title-bar-buttons inline" style="height: 22px;">
                <a class="js-refresh m-xs" data-placement="top" data-toggle="tooltip" title="Reload Wallet">
                  <i class="fa fa-refresh"></i>
                </a>
                <a class="js-stake m-xs" data-placement="top" data-toggle="tooltip" title="Not Currently Staking">
                  <i class="fa fa-cloud"></i>
                  <span class="tooltip third">Not Staking</span>
                  </a>
                <a class="encryption m-xs" data-placement="top" data-toggle="tooltip" title="Encryption Disabled">
                  <i class="fa fa-unlock-alt"></i>
                  <span class="tooltip second">Encryption Off</span>
                </a>
                <a class="js-connected-peers m-xs"data-placement="top" data-toggle="tooltip" data-trigger="hover" title="
                  <?php if ($this->wallet_is_open ) {
                    print $this->info['connections'];
                  } ?>
                  Peers Connected">
                  <i class="fa fa-signal"></i>
                </a>
              </div>
              <div class="text-info m-r-sm inline js-price">
                <?php if ($this->wallet_is_open ) {
                  if ($this->info['blocks'] < $this->wallet->xpy_getbestheight()) {
                    print '<i class="fa fa-spinner fa-spin"></i>';
                  } else {
                    print '<i class="fa fa-spinner"></i>';
                  }
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="app pos-rlt h-full">
      <div class="content h-full">

    <pre class="m-t-none m-b-none">
    <a href="./">Home</a>    <?php print date('r'); ?> 
    <?php if( $this->wallet_is_open ) {

        print 'Balance: <b>' . $this->info['balance'] . '</b>'
        . '   Blocks: ' . $this->info['blocks']     
        . '   Connections: ' . $this->info['connections'] 
        . '   Network: ' . SERVER_NETWORK . ($this->info['testnet'] ? ' Testnet' : '');

      } else {
        //if( !$this->hide_wallet_errors ) {  
          print 'Not Connected to Wallet';
        //}
      }
    ?></pre>
