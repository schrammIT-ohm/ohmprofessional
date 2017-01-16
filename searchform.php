<?php
  // Search-Form:
  // TODO styling -> use bootstrap - e.g.:  http://getbootstrap.com/components/#input-groups-buttons
?>
<div>
    <button  class="btn btn-default col-sm-2" type="submit" id="b">
      <img src="<?php echo get_bloginfo('template_directory')?>/img\suche.PNG.png" alt="Lupe">
    </button>
    <form class="navbar-form search" method="get" action="<?php echo home_url(); ?>" role="search">
      <input placeholder="Suchbegriff eingeben" type="text" value="" name="s" id="s">
    </form>
</div>
