<?php
  // Search-Form:
  // TODO styling -> use bootstrap - e.g.:  http://getbootstrap.com/components/#input-groups-buttons
?>
<div class="search">
<img src="<?php echo get_bloginfo('template_directory')?>/img/suchen.PNG."
    <form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
        <input placeholder="Suchbegriff eingeben" type="text" value="" name="s">
        <button type="submit" class="btn btn-default"> Los </button>
    </form>
</div>
