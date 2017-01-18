<?php
  // Search-Form:
  // TODO styling -> use bootstrap - e.g.:  http://getbootstrap.com/components/#input-groups-buttons
?>
<div>
    <form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
        <input placeholder="Was suchst du denn?" type="text" value="" name="s">
        <input type="submit" value="">
    </form>
</div>
