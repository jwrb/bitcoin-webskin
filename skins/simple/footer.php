<?php
/*
  Bitcoin Webskin - an open source PHP web interface to bitcoind
  Copyright (c) 2011 14STzHS8qjsDPtqpQgcnwWpTaSHadgEewS
*/
?>
<?php 

  if( isset($this->info['error']) && $this->info['error'] ) {
    print 'ERROR: ' . $this->info['error'] . '<pre><hr size="1" /><br /></pre>';
  }
?> 
</div>
</body>
</html>