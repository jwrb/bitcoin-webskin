<?php
/*
  Bitcoin Webskin - an open source PHP web interface to bitcoind
  Copyright (c) 2011 14STzHS8qjsDPtqpQgcnwWpTaSHadgEewS
*/
?><?php $this->template('header'); ?>

<p>Server Information:</p>

<table><?php 

  while( list($name,$val) = @each($this->getinfo) ) {
    print "<tr><td>$name</td><td>$val</td></tr>";
  }
    

  print_r($this->xpy_getbestheight);
?></table>


<?php $this->template('footer'); ?>