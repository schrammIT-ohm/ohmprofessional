<?php
  // Search-Form:
  // TODO styling -> use bootstrap - e.g.:  http://getbootstrap.com/components/#input-groups-buttons
?>
<div>
    <form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
    	<div class="row">
    		<div class="col-xs-2 col-sm-1 col-md-3">
    			<input type="submit" value="">
    		</div>
    		<div class="col-xs-10 col-sm-11 col-md-9">
    			<input placeholder="Suchbegriff eingeben" type="text" value="" name="s">
    		</div>
    	</form>
    </div>
