<div class="wrap">

  <h1><?= cb_map\__('SETTINGS_PAGE_HEADER', 'commonsbooking-maps', 'Settings for Commons Booking Map') ?></h1>

  <p><?= cb_map\__('SETTINGS_DESCRIPTION', 'commonsbooking-maps', 'general settings regarding the behaviour of the Commons Booking Map plugin') ?></p>

  <form method="post" action="options.php">
    <?php
      settings_fields( 'cb-map-settings' );
      do_settings_sections( 'cb-map-settings' );
    ?>

    <table class="text-left">
      <tr>
          <th></th>
          <td></td>
      </tr>
    </table>

    <?php submit_button(); ?>
  </form>
</div>
