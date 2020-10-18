<div class="inside">

    <p><?= cb_map\__('MAP_ADMIN_DESCRIPTION', 'commonsbooking-maps', 'These settings help you to configure the usage and appearance of Commons Booking Map.') ?></p>

    <input id="map_type" type="hidden" name="cb_map_options[map_type]" value="1">

    <div class="option-group" id="option-group-data-export">
      <details>
        <summary><?= cb_map\__('DATA_EXPORT', 'commonsbooking-maps', 'Data Export') ?></summary>
        <table class="text-left">
          <tr>
              <th>
                <?= cb_map\__('EXPORT_CODE', 'commonsbooking-maps', 'export code') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'EXPORT_CODE_DESC', 'commonsbooking-maps', 'generate an export code, that you can give to someone running a website with Commons Booking Map plugin to import and show your locations and items') ?>"></span>
              </th>
              <td>
                <input type="text" autocomplete="off" size="10" minlength="<?= CB_Map_Admin::EXPORT_CODE_VALUE_MIN_LENGTH ?>" name="cb_map_options[export_code]" value="<?= esc_attr( CB_Map_Admin::get_option($cb_map_id, 'export_code') ); ?>">
                <input id="create-export-code-button" type="button" class="button" value="<?= cb_map\__('CREATE', 'commonsbooking-maps', 'create') ?>" />
              </td>
          </tr>
          <tr>
              <th>
                <?= cb_map\__('EXPORT_BASE_URL', 'commonsbooking-maps', 'export url') ?>:
                </th>
              <td><?= $data_export_base_url ?></td>
          </tr>
        </table>
      </details>
    </div>

    <div class="option-group" id="option-group-data-import">
      <details>
        <summary><?= cb_map\__('DATA_IMPORT', 'commonsbooking-maps', 'Data Import') ?></summary>
        <table class="text-left">
          <tr>
              <th>
                <?= cb_map\__('ADD_IMPORT_SOURCE', 'commonsbooking-maps', 'new import source') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'ADD_IMPORT_SOURCE_DESC', 'commonsbooking-maps', 'add an import source (another website with installed Commons Booking Map plugin and prepared map export) by typing the url and the code you got from the website admin'); ?>"></span>
              </th>
              <td>
                <button id="add-import-source-button" class="button" title="<?= cb_map\__('ADD_IMPORT_SOURCE_BUTTON_TITLE', 'commonsbooking-maps', 'add import source') ?>"><span class="dashicons dashicons-plus"></span></button>
              </td>
          </tr>
          <tr>
              <th>
                <?= cb_map\__('IMPORT_SOURCES', 'commonsbooking-maps', 'import sources') ?>:
                </th>
              <td id="import-sources"></td>
          </tr>
        </table>
      </details>
    </div>

    <div class="option-group" id="option-group-map-presentation">
      <details>
        <summary><?= cb_map\__('MAP_PRESENTATION', 'commonsbooking-maps', 'Map Presentation') ?></summary>
        <table class="text-left">
          <tr>
            <th>
              <?= cb_map\__('MAP_SHORTCODE', 'commonsbooking-maps', 'shortcode') ?>:
              <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'MAP_SHORTCODE_DESC', 'commonsbooking-maps', 'with this shortcode the map can be included in posts or pages') ?>"></span>
            </th>
            <td>[cb_map id=<?= $cb_map_id ?>]</td>
          </tr>
          <tr>
            <th>
              <?= cb_map\__('BASE_MAP', 'commonsbooking-maps', 'base map') ?>:
              <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'BASE_MAP_DESC', 'commonsbooking-maps', 'the base map defines the rendering style of the map tiles') ?>"></span>
            </th>
            <td>
              <?php $selected_base_map = CB_Map_Admin::get_option($cb_map_id, 'base_map') ?>
              <select name="cb_map_options[base_map]">
                <option value="1" <?= $selected_base_map == 1 ? 'selected' : '' ?>><?= cb_map\__('BASE_MAP_MAPNIK', 'commonsbooking-maps', 'OSM - mapnik') ?></option>
                <option value="2" <?= $selected_base_map == 2 ? 'selected' : '' ?>><?= cb_map\__('BASE_MAP_GERMAN', 'commonsbooking-maps', 'OSM - german style') ?></option>
                <option value="3" <?= $selected_base_map == 3 ? 'selected' : '' ?>><?= cb_map\__('BASE_MAP_HIKEANDBIKE', 'commonsbooking-maps', 'OSM - hike and bike') ?></option>
                <option value="4" <?= $selected_base_map == 4 ? 'selected' : '' ?>><?= cb_map\__('BASE_MAP_LOKALER', 'commonsbooking-maps', 'OSM - lokaler (min. zoom: 9)') ?></option>
              </select>
            </td>
          </tr>
          <tr>
              <th>
                <?= cb_map\__('SHOW_SCALE', 'commonsbooking-maps', 'show scale') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'SHOW_SCALE_DESC', 'commonsbooking-maps', 'show the current scale in the left bottom corner of the map') ?>"></span>
              </th>
              <td>
                <input type="checkbox" name="cb_map_options[show_scale]" <?= CB_Map_Admin::get_option($cb_map_id, 'show_scale') ? 'checked="checked"' : '' ?> value="on">
              </td>
          </tr>
          <tr>
              <th>
                <?= cb_map\__('MAP_HEIGHT', 'commonsbooking-maps', 'map height') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'MAP_HEIGHT_DESC', 'commonsbooking-maps', 'the height the map is rendered with - the width is the same as of the parent element') ?>"></span>
              </th>
              <td><input type="number" min="<?= CB_Map_Admin::MAP_HEIGHT_VALUE_MIN ?>" max="<?= CB_Map_Admin::MAP_HEIGHT_VALUE_MAX ?>" name="cb_map_options[map_height]" value="<?= esc_attr( CB_Map_Admin::get_option($cb_map_id, 'map_height') ); ?>" size="4"> px</td>
          </tr>
          <tr>
              <th>
                <?= cb_map\__('CUSTOM_NO_LOCATIONS_MESSAGE', 'commonsbooking-maps', 'no locations message') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'CUSTOM_NO_LOCATIONS_MESSAGE_DESC', 'commonsbooking-maps', 'in case a user filters locations and gets no result, a message is shown - here the text can be customized') ?>"></span>
              </th>
              <td><textarea name="cb_map_options[custom_no_locations_message]"><?= esc_attr(CB_Map_Admin::get_option($cb_map_id, 'custom_no_locations_message')) ?></textarea></td>
          </tr>
          <tr>
              <th>
                <?= cb_map\__('ENABLE_MAP_DATA_EXPORT', 'commonsbooking-maps', 'enable data export') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'ENABLE_MAP_DATA_EXPORT_DESC', 'commonsbooking-maps', 'activate to enable a button that allows the export of map data (geojson format)') ?>"></span>
              </th>
              <td><input type="checkbox" name="cb_map_options[enable_map_data_export]" <?= CB_Map_Admin::get_option($cb_map_id, 'enable_map_data_export') ? 'checked="checked"' : '' ?> value="on"></td>
          </tr>
        </table>
      </details>
    </div>

    <div class="option-group" id="option-group-zoom">
      <details>
        <summary><?= cb_map\__('ZOOM', 'commonsbooking-maps', 'Zoom') ?></summary>
        <table class="text-left">
          <tr>
              <th>
                <?= cb_map\__('MIN_ZOOM_LEVEL', 'commonsbooking-maps', 'min. zoom level') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'MIN_ZOOM_LEVEL_DESC', 'commonsbooking-maps', 'the minimal zoom level a user can choose') ?>"></span>
              </th>
              <td><input type="number" min="<?= CB_Map_Admin::ZOOM_VALUE_MIN ?>" max="<?= CB_Map_Admin::ZOOM_VALUE_MAX ?>" name="cb_map_options[zoom_min]" value="<?= esc_attr( CB_Map_Admin::get_option($cb_map_id, 'zoom_min') ); ?>" size="3"></td>
          </tr>
          <tr>
              <th>
                <?= cb_map\__('MAX_ZOOM_LEVEL', 'commonsbooking-maps', 'max. zoom level') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'MAX_ZOOM_LEVEL_DESC', 'commonsbooking-maps', 'the maximal zoom level a user can choose') ?>"></span>
              </th>
              <td><input type="number" min="<?= CB_Map_Admin::ZOOM_VALUE_MIN ?>" max="<?= CB_Map_Admin::ZOOM_VALUE_MAX ?>" name="cb_map_options[zoom_max]" value="<?= esc_attr( CB_Map_Admin::get_option($cb_map_id, 'zoom_max') ); ?>" size="3"></td>
          </tr>
          <tr>
              <th>
                <?= cb_map\__('START_ZOOM_LEVEL', 'commonsbooking-maps', 'start zoom level') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'START_ZOOM_LEVEL_DESC', 'commonsbooking-maps', 'the zoom level that will be set when the map is loaded') ?>"></span>
              </th>
              <td><input type="number" min="<?= CB_Map_Admin::ZOOM_VALUE_MIN ?>" max="<?= CB_Map_Admin::ZOOM_VALUE_MAX ?>" name="cb_map_options[zoom_start]" value="<?= esc_attr( CB_Map_Admin::get_option($cb_map_id, 'zoom_start') ); ?>" size="3"></td>
          </tr>
        </table>
      </details>
    </div>

    <div class="option-group" id="option-group-positioning-start">
      <details>
        <summary><?= cb_map\__('POSITIONING_START', 'commonsbooking-maps', 'Map Positioning (center) at Intialization') ?></summary>
        <table class="text-left">
          <tr>
              <th>
                <?= cb_map\__('LATITUDE_START', 'commonsbooking-maps', 'start latitude') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'LATITUDE_START_DESC', 'commonsbooking-maps', 'the latitude of the map center when the map is loaded') ?>"></span>
              </th>
              <td><input type="text" name="cb_map_options[lat_start]" value="<?= esc_attr( CB_Map_Admin::get_option($cb_map_id, 'lat_start') ); ?>" size="10"></td>
          </tr>

          <tr>
              <th>
                <?= cb_map\__('LONGITUDE_START', 'commonsbooking-maps', 'start longitude') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'LONGITUDE_START_DESC', 'commonsbooking-maps', 'the longitude of the map center when the map is loaded') ?>"></span>
              </th>
              <td><input type="text" name="cb_map_options[lon_start]" value="<?= esc_attr( CB_Map_Admin::get_option($cb_map_id, 'lon_start') ); ?>" size="10"></td>
          </tr>
        </table>
      </details>
    </div>

    <div class="option-group" id="option-group-adaptive-map-section">
      <details>
        <summary><?= cb_map\__('ADAPTIVE_MAP_SECTION', 'commonsbooking-maps', 'Adaptive Map Section') ?></summary>
        <table class="text-left">
          <tr>
              <th>
                <?= cb_map\__('ADJUST_MAP_SECTION_TO_MARKERS_INITIALLY', 'commonsbooking-maps', 'initial adjustment to marker bounds') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'ADJUST_MAP_SECTION_TO_MARKERS_INITIALLY_DESC', 'commonsbooking-maps', 'adjust map section to bounds of shown markers automatically when map is loaded') ?>"></span>
              </th>
              <td>
                <input type="checkbox" name="cb_map_options[marker_map_bounds_initial]" <?= CB_Map_Admin::get_option($cb_map_id, 'marker_map_bounds_initial') ? 'checked="checked"' : '' ?> value="on">
              </td>
          </tr>
          <tr>
              <th>
                <?= cb_map\__('ADJUST_MAP_SECTION_TO_MARKERS_FILTER', 'commonsbooking-maps', 'adjustment to marker bounds on filter') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'ADJUST_MAP_SECTION_TO_MARKERS_FILTER_DESC', 'commonsbooking-maps', 'adjust map section to bounds of shown markers automatically when filtered by users') ?>"></span>
              </th>
              <td>
                <input type="checkbox" name="cb_map_options[marker_map_bounds_filter]" <?= CB_Map_Admin::get_option($cb_map_id, 'marker_map_bounds_filter') ? 'checked="checked"' : '' ?> value="on">
              </td>
          </tr>
        </table>
      </details>
    </div>

    <div class="option-group" id="option-group-tooltip">
      <details>
        <summary><?= cb_map\__('TOOLTIP', 'commonsbooking-maps', 'Marker Tooltip') ?></summary>

        <table class="text-left">
          <tr>
              <th>
                <?= cb_map\__('MARKER_TOOLTIP_PERMANENT', 'commonsbooking-maps', 'show permanently') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'MARKER_TOOLTIP_PERMANENT_DESC', 'commonsbooking-maps', 'activate to show the marker tooltips permanently') ?>"></span>
              </th>
              <td><input type="checkbox" name="cb_map_options[marker_tooltip_permanent]" <?= CB_Map_Admin::get_option($cb_map_id, 'marker_tooltip_permanent') ? 'checked="checked"' : '' ?> value="on"></td>
          </tr>
        </table>
      </details>
    </div>

    <div class="option-group" id="option-group-popup">
      <details>
        <summary><?= cb_map\__('POPUP', 'commonsbooking-maps', 'Marker Popup') ?></summary>
        <table class="text-left">
          <tr>
              <th>
                <?= cb_map\__('SHOW_LOCATION_OPENING_HOURS', 'commonsbooking-maps', 'show location opening hours') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'SHOW_LOCATION_OPENING_HOURS_DESC', 'commonsbooking-maps', 'activate to show the opening hours of locations in the marker popup') ?>"></span>
              </th>
              <td><input type="checkbox" name="cb_map_options[show_location_opening_hours]" <?= CB_Map_Admin::get_option($cb_map_id, 'show_location_opening_hours') ? 'checked="checked"' : '' ?> value="on"></td>
          </tr>
          <tr>
              <th>
                <?= cb_map\__('LABEL_LOCATION_OPENING_HOURS', 'commonsbooking-maps', 'label for opening hours') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'LABEL_LOCATION_OPENING_HOURS_DESC', 'commonsbooking-maps', 'alternative label for the opening hours of locations in the marker popup') ?>"></span>
              </th>
              <td><input type="text" name="cb_map_options[label_location_opening_hours]" placeholder="<?= cb_map\__('OPENING_HOURS', 'commonsbooking-maps', 'opening hours') ?>" value="<?= CB_Map_Admin::get_option($cb_map_id, 'label_location_opening_hours') ?>"></td>
          </tr>
          <tr>
              <th>
                <?= cb_map\__('SHOW_LOCATION_CONTACT', 'commonsbooking-maps', 'show location contact') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'SHOW_LOCATION_CONTACT_DESC', 'commonsbooking-maps', 'activate to show the location contact details in the marker popup') ?>"></span>
              </th>
              <td><input type="checkbox" name="cb_map_options[show_location_contact]" <?= CB_Map_Admin::get_option($cb_map_id, 'show_location_contact') ? 'checked="checked"' : '' ?> value="on"></td>
          </tr>
          <tr>
              <th>
                <?= cb_map\__('LABEL_LOCATION_CONTACT', 'commonsbooking-maps', 'label for opening hours') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'LABEL_LOCATION_CONTACT_DESC', 'commonsbooking-maps', 'alternative label for the contact information of locations in the marker popup') ?>"></span>
              </th>
              <td><input type="text" name="cb_map_options[label_location_contact]" placeholder="<?= cb_map\__('CONTACT', 'commonsbooking-maps', 'opening hours') ?>" value="<?= CB_Map_Admin::get_option($cb_map_id, 'label_location_contact') ?>"></td>
          </tr>
          <tr>
              <th>
                <?= cb_map\__('SHOW_ITEM_AVAILABILITY', 'commonsbooking-maps', 'show item availability') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'SHOW_ITEM_AVAILABILITY_DESC', 'commonsbooking-maps', 'activate to show the item availability in the marker popup') ?>"></span>
              </th>
              <td><input type="checkbox" name="cb_map_options[show_item_availability]" <?= CB_Map_Admin::get_option($cb_map_id, 'show_item_availability') ? 'checked="checked"' : '' ?> value="on"></td>
          </tr>
        </table>
      </details>
    </div>

    <div class="option-group" id="option-group-custom-marker">
      <details>
        <summary><?= cb_map\__('CUSTOM_MARKER', 'commonsbooking-maps', 'Custom Marker') ?></summary>
        <table class="text-left">
          <tr>
            <th>
              <?= cb_map\__('IMAGE_FILE', 'commonsbooking-maps', 'image file') ?>:
              <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'IMAGE_FILE_DESC', 'commonsbooking-maps', 'the default marker icon can be replaced by a custom image') ?>"></span>
            </th>
            <td>
              <input id="select-marker-image-button" type="button" class="button" value="<?= cb_map\__('SELECT', 'commonsbooking-maps', 'select') ?>" />
              <input id="remove-marker-image-button" type="button" class="button" value="<?= cb_map\__('REMOVE', 'commonsbooking-maps', 'remove') ?>" />
            </td>
          </tr>
          <tr id="marker-image-preview-settings" class="display-none">
            <td>
              <div>
                  <img id="marker-image-preview" src="<?= wp_get_attachment_url(CB_Map_Admin::get_option($cb_map_id, 'custom_marker_media_id')); ?>">
              </div>
              <input type="hidden" name="cb_map_options[custom_marker_media_id]" value="<?= CB_Map_Admin::get_option($cb_map_id, 'custom_marker_media_id') ?>">
            </td>
            <td>
              <div id="marker-image-preview-measurements"></div>
            </td>
          </tr>
          <tr id="marker-icon-size" class="display-none">
              <th>
                <?= cb_map\__('ICON_SIZE', 'commonsbooking-maps', 'icon size') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'ICON_SIZE_DESC', 'commonsbooking-maps', 'the size of the custom marker icon image as it is shown on the map') ?>"></span>
              </th>
              <td>
                <input type="text" name="cb_map_options[marker_icon_width]" value="<?= esc_attr( CB_Map_Admin::get_option($cb_map_id, 'marker_icon_width') ); ?>" size="3"> x
                <input type="text" name="cb_map_options[marker_icon_height]" value="<?= esc_attr( CB_Map_Admin::get_option($cb_map_id, 'marker_icon_height') ); ?>" size="3"> px
              </td>

          </tr>
          <tr id="marker-icon-anchor" class="display-none">
            <th>
              <?= cb_map\__('ANCHOR_POINT', 'commonsbooking-maps', 'anchor point') ?>:
              <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'ANCHOR_POINT_DESC', 'commonsbooking-maps', 'the position of the anchor point of the icon image, seen from the left top corner of the icon, often it is half of the width and full height of the icon size - this point is used to place the marker on the geo coordinates') ?>"></span>
            </th>
            <td>
              <input type="text" name="cb_map_options[marker_icon_anchor_x]" value="<?= esc_attr( CB_Map_Admin::get_option($cb_map_id, 'marker_icon_anchor_x') ); ?>" size="3"> x
              <input type="text" name="cb_map_options[marker_icon_anchor_y]" value="<?= esc_attr( CB_Map_Admin::get_option($cb_map_id, 'marker_icon_anchor_y') ); ?>" size="3"> px
            </td>
          </tr>
        </table>
      </details>
    </div>

    <div class="option-group" id="option-group-cluster">
      <details>
        <summary><?= cb_map\__('CLUSTER', 'commonsbooking-maps', 'Cluster') ?></summary>
        <table class="text-left">
          <tr>
              <th>
                <?= cb_map\__('MAX_CLUSTER_RADIUS', 'commonsbooking-maps', 'max. cluster radius') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'MAX_CLUSTER_RADIUS_DESC', 'commonsbooking-maps', 'combine markers to a cluster within given radius - 0 for deactivation') ?>"></span>
              </th>
              <td>
                <input type="number" size="3" step="10" min="<?= CB_Map_Admin::MAX_CLUSTER_RADIUS_VALUE_MIN ?>" max="<?= CB_Map_Admin::MAX_CLUSTER_RADIUS_VALUE_MAX ?>" name="cb_map_options[max_cluster_radius]" value="<?= esc_attr( CB_Map_Admin::get_option($cb_map_id, 'max_cluster_radius') ); ?>"> px
              </td>
          </tr>
        </table>
      </details>

      <details>
        <summary><?= cb_map\__('CUSTOM_CLUSTER_MARKER', 'commonsbooking-maps', 'Custom Cluster Marker') ?></summary>

        <table class="text-left">
          <tr>
            <th>
              <?= cb_map\__('IMAGE_FILE', 'commonsbooking-maps', 'image file') ?>:
              <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'IMAGE_FILE_DESC', 'commonsbooking-maps', 'the default marker icon can be replaced by a custom image') ?>"></span>
            </th>
            <td>
              <input id="select-marker-cluster-image-button" type="button" class="button" value="<?= cb_map\__('SELECT', 'commonsbooking-maps', 'select') ?>" />
              <input id="remove-marker-cluster-image-button" type="button" class="button" value="<?= cb_map\__('REMOVE', 'commonsbooking-maps', 'remove') ?>" />
            </td>
          </tr>
          <tr id="marker-cluster-image-preview-settings" class="display-none">
            <td>
              <div>
                  <img id="marker-cluster-image-preview" src="<?= wp_get_attachment_url(CB_Map_Admin::get_option($cb_map_id, 'custom_marker_cluster_media_id')); ?>">
              </div>
              <input type="hidden" name="cb_map_options[custom_marker_cluster_media_id]" value="<?= CB_Map_Admin::get_option($cb_map_id, 'custom_marker_cluster_media_id') ?>">
            </td>
            <td>
              <div id="marker-cluster-image-preview-measurements"></div>
            </td>
          </tr>
          <tr id="marker-cluster-icon-size" class="display-none">
              <th>
                <?= cb_map\__('ICON_SIZE', 'commonsbooking-maps', 'icon size') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'ICON_SIZE_DESC', 'commonsbooking-maps', 'the size of the custom marker icon image as it is shown on the map') ?>"></span>
              </th>
              <td>
                <input type="text" name="cb_map_options[marker_cluster_icon_width]" value="<?= esc_attr( CB_Map_Admin::get_option($cb_map_id, 'marker_cluster_icon_width') ); ?>" size="3"> x
                <input type="text" name="cb_map_options[marker_cluster_icon_height]" value="<?= esc_attr( CB_Map_Admin::get_option($cb_map_id, 'marker_cluster_icon_height') ); ?>" size="3"> px
              </td>

          </tr>
        </table>
      </details>
    </div>

    <div class="option-group" id="option-group-item-status-appearance">
      <details>
        <summary><?= cb_map\__('APPEARANCE_BY_ITEM_STATUS', 'commonsbooking-maps', 'Appearance by Item Status') ?></summary>

        <table class="text-left">
          <tr>
              <th>
                <?= cb_map\__('APPEARANCE', 'commonsbooking-maps', 'appearance') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'APPEARANCE_DESC', 'commonsbooking-maps', 'how locations with items that are in draft status should be handled') ?>"></span>
              </th>
              <td>
                <?php $item_draft_appearance = CB_Map_Admin::get_option($cb_map_id, 'item_draft_appearance') ?>
                <select id="item_draft_appearance" name="cb_map_options[item_draft_appearance]">
                  <option value="1" <?= $item_draft_appearance == 1 ? 'selected' : '' ?>><?= cb_map\__('ITEM_DRAFT_APPEARANCE_NO', 'commonsbooking-maps', "don't show drafts") ?></option>
                  <option value="2" <?= $item_draft_appearance == 2 ? 'selected' : '' ?>><?= cb_map\__('ITEM_DRAFT_APPEARANCE_ONLY', 'commonsbooking-maps', "show only drafts") ?></option>
                  <option value="3" <?= $item_draft_appearance == 3 ? 'selected' : '' ?>><?= cb_map\__('ITEM_DRAFT_APPEARANCE_ALL', 'commonsbooking-maps', "show all together") ?></option>
                </select>
              </td>
          </tr>
        </table>
      </details>
    </div>

    <div class="option-group" id="option-group-item-status-appearance">
      <details>
        <summary><?= cb_map\__('CUSTOM_ITEM_DRAFT_MARKER', 'commonsbooking-maps', 'Custom Item Draft Marker') ?></summary>
        <table class="text-left">
          <tr>
            <th>
              <?= cb_map\__('IMAGE_FILE', 'commonsbooking-maps', 'image file') ?>:
              <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'IMAGE_FILE_DESC', 'commonsbooking-maps', 'the default marker icon can be replaced by a custom image') ?>"></span>
            </th>
            <td>
              <input id="select-marker-item-draft-image-button" type="button" class="button" value="<?= cb_map\__('SELECT', 'commonsbooking-maps', 'select') ?>" />
              <input id="remove-marker-item-draft-image-button" type="button" class="button" value="<?= cb_map\__('REMOVE', 'commonsbooking-maps', 'remove') ?>" />
            </td>
          </tr>
          <tr id="marker-item-draft-image-preview-settings" class="display-none">
            <td>
              <div>
                  <img id="marker-item-draft-image-preview" src="<?= wp_get_attachment_url(CB_Map_Admin::get_option($cb_map_id, 'marker_item_draft_media_id')); ?>">
              </div>
              <input type="hidden" name="cb_map_options[marker_item_draft_media_id]" value="<?= CB_Map_Admin::get_option($cb_map_id, 'marker_item_draft_media_id') ?>">
            </td>
            <td>
              <div id="marker-item-draft-image-preview-measurements"></div>
            </td>
          </tr>
          <tr id="marker-item-draft-icon-size" class="display-none">
              <th>
                <?= cb_map\__('ICON_SIZE', 'commonsbooking-maps', 'icon size') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'ICON_SIZE_DESC', 'commonsbooking-maps', 'the size of the custom marker icon image as it is shown on the map') ?>"></span>
              </th>
              <td>
                <input type="text" name="cb_map_options[marker_item_draft_icon_width]" value="<?= esc_attr( CB_Map_Admin::get_option($cb_map_id, 'marker_item_draft_icon_width') ); ?>" size="3"> x
                <input type="text" name="cb_map_options[marker_item_draft_icon_height]" value="<?= esc_attr( CB_Map_Admin::get_option($cb_map_id, 'marker_item_draft_icon_height') ); ?>" size="3"> px
              </td>
          </tr>
          <tr id="marker-item-draft-icon-anchor" class="display-none">
            <th>
              <?= cb_map\__('ANCHOR_POINT', 'commonsbooking-maps', 'anchor point') ?>:
              <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'ANCHOR_POINT_DESC', 'commonsbooking-maps', 'the position of the anchor point of the icon image, seen from the left top corner of the icon, often it is half of the width and full height of the icon size - this point is used to place the marker on the geo coordinates') ?>"></span>
            </th>
            <td>
              <input type="text" name="cb_map_options[marker_item_draft_icon_anchor_x]" value="<?= esc_attr( CB_Map_Admin::get_option($cb_map_id, 'marker_item_draft_icon_anchor_x') ); ?>" size="3"> x
              <input type="text" name="cb_map_options[marker_item_draft_icon_anchor_y]" value="<?= esc_attr( CB_Map_Admin::get_option($cb_map_id, 'marker_item_draft_icon_anchor_y') ); ?>" size="3"> px
            </td>
          </tr>
        </table>
      </details>
    </div>

    <div class="option-group" id="option-group-filter-users">
      <details>
        <summary><?= cb_map\__('FILTER_USERS', 'commonsbooking-maps', 'Filter for Users') ?></summary>
        <table class="text-left">
          <tr>
              <th>
                <?= cb_map\__('SHOW_LOCATION_DISTANCE_FILTER', 'commonsbooking-maps', 'show location distance filter') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'SHOW_LOCATION_DISTANCE_FILTER_DESC', 'commonsbooking-maps', 'activate to show the location distance filter') ?>"></span>
              </th>
              <td><input type="checkbox" name="cb_map_options[show_location_distance_filter]" <?= CB_Map_Admin::get_option($cb_map_id, 'show_location_distance_filter') ? 'checked="checked"' : '' ?> value="on"></td>
          </tr>
          <tr>
              <th>
                <?= cb_map\__('LABEL_LOCATION_DISTANCE_FILTER', 'commonsbooking-maps', 'label for location distance filter') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'LABEL_LOCATION_DISTANCE_FILTER_DESC', 'commonsbooking-maps', 'alternative label for the location distance filter') ?>"></span>
              </th>
              <td><input type="text" name="cb_map_options[label_location_distance_filter]" placeholder="<?= cb_map\__('DISTANCE', 'commonsbooking-maps', 'distance') ?>" value="<?= CB_Map_Admin::get_option($cb_map_id, 'label_location_distance_filter') ?>"></td>
          </tr>
          <tr>
              <th>
                <?= cb_map\__('ADDRESS_SEARCH_BOUNDS_LEFT_BOTTOM', 'commonsbooking-maps', 'address search bounds - left bottom') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'ADDRESS_SEARCH_BOUNDS_LEFT_BOTTOM_DESC', 'commonsbooking-maps', 'the bottom left corner of the address search bounds') ?>"></span>
              </th>
              <td>
                <input type="text" name="cb_map_options[address_search_bounds_left_bottom_lon]" placeholder="<?= cb_map\__('LONGITUDE', 'commonsbooking-maps', 'longitude') ?>" value="<?= esc_attr( CB_Map_Admin::get_option($cb_map_id, 'address_search_bounds_left_bottom_lon') ); ?>" size="7"> /
                <input type="text" name="cb_map_options[address_search_bounds_left_bottom_lat]" placeholder="<?= cb_map\__('LATITUDE', 'commonsbooking-maps', 'latitude') ?>" value="<?= esc_attr( CB_Map_Admin::get_option($cb_map_id, 'address_search_bounds_left_bottom_lat') ); ?>" size="7">
              </td>
          </tr>
          <tr>
              <th>
                <?= cb_map\__('ADDRESS_SEARCH_BOUNDS_RIGHT_TOP', 'commonsbooking-maps', 'address search bounds - right top') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'ADDRESS_SEARCH_BOUNDS_RIGHT_TOP_DESC', 'commonsbooking-maps', 'the top right corner of the address search bounds') ?>"></span>
              </th>
              <td>
                <input type="text" name="cb_map_options[address_search_bounds_right_top_lon]" placeholder="<?= cb_map\__('LONGITUDE', 'commonsbooking-maps', 'longitude') ?>" value="<?= esc_attr( CB_Map_Admin::get_option($cb_map_id, 'address_search_bounds_right_top_lon') ); ?>" size="7"> /
                <input type="text" name="cb_map_options[address_search_bounds_right_top_lat]" placeholder="<?= cb_map\__('LATITUDE', 'commonsbooking-maps', 'latitude') ?>" value="<?= esc_attr( CB_Map_Admin::get_option($cb_map_id, 'address_search_bounds_right_top_lat') ); ?>" size="7">
              </td>
          </tr>
          <tr style="display: none;"> <!-- TODO: show when availability is implemented -->
              <th>
                <?= cb_map\__('SHOW_ITEM_AVAILABILITY_FILTER', 'commonsbooking-maps', 'show item availability filter') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'SHOW_ITEM_AVAILABILITY_FILTER_DESC', 'commonsbooking-maps', 'activate to show the item availability filter') ?>"></span>
              </th>
              <td><input type="checkbox" name="cb_map_options[show_item_availability_filter]" <?= CB_Map_Admin::get_option($cb_map_id, 'show_item_availability_filter') ? 'checked="checked"' : '' ?> value="on"></td>
          </tr>
          <tr style="display: none;"> <!-- TODO: show when availability is implemented -->
              <th>
                <?= cb_map\__('LABEL_ITEM_AVAILABILITY_FILTER', 'commonsbooking-maps', 'label for item availability filter') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'LABEL_ITEM_AVAILABILITY_FILTER_DESC', 'commonsbooking-maps', 'alternative label for the item availability filter') ?>"></span>
              </th>
              <td><input type="text" name="cb_map_options[label_item_availability_filter]" placeholder="<?= cb_map\__('AVAILABILITY', 'commonsbooking-maps', 'availability') ?>" value="<?= CB_Map_Admin::get_option($cb_map_id, 'label_item_availability_filter') ?>"></td>
          </tr>
          <tr>
              <th>
                <?= cb_map\__('LABEL_ITEM_CATEGORY_FILTER', 'commonsbooking-maps', 'label for item category filter') ?>:
                <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'LABEL_ITEM_CATEGORY_FILTER_DESC', 'commonsbooking-maps', 'alternative label for the item category filter') ?>"></span>
              </th>
              <td><input type="text" name="cb_map_options[label_item_category_filter]" placeholder="<?= cb_map\__('ITEM_CATEGORIES', 'commonsbooking-maps', 'categories') ?>" value="<?= CB_Map_Admin::get_option($cb_map_id, 'label_item_category_filter') ?>"></td>
          </tr>

          <tr>
            <th>
              <?= cb_map\__('AVAILABLE_CATEGORIES', 'commonsbooking-maps', 'available categories')?>:
              <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'AVAILABLE_CATEGORIES_DESC', 'commonsbooking-maps', 'select the categories that are presented the users to filter items - none for no filters') ?>"></span>
            </th>
            <td>
              <ul class="cb-map-settings-cat-filter-list">
                <div class="category-wrapper">
                  <?= $available_categories_checklist_markup ?>
                </div>
              </ul>
            </td>
          </tr>
        </table>

        <table class="text-left" id="available-categories-custom-markup-wrapper">
          <tr>
            <th><?= cb_map\__('CUSTOM_CATEGORY_FILTER_LABEL_MARKUP', 'commonsbooking-maps', 'grouping of and custom markup for filters')?></th>
            <td>
              <button id="add-filter-group-button" class="button" title="<?= cb_map\__('ADD_FILTER_GROUP_BUTTON_TITLE', 'commonsbooking-maps', 'add filter group') ?>"><span class="dashicons dashicons-plus"></span></button>
            </td>
          </tr>
        </table>
      </details>
    </div>

    <div class="option-group" id="option-group-filter-presets">
      <details>
        <summary><?= cb_map\__('FILTER_PRESETS', 'commonsbooking-maps', 'Filter Presets') ?></summary>
        <table class="text-left">
          <tr>
            <th>
              <?= cb_map\__('PRESET_CATEGORIES', 'commonsbooking-maps', 'preset categories')?>:
              <span class="dashicons dashicons-editor-help" title="<?= cb_map\__( 'PRESET_CATEGORIES_DESC', 'commonsbooking-maps', 'select the categories that are used to prefilter the items that are shown on the map - none for all items') ?>"></span>
            </th>
            <td>
              <ul class="cb-map-settings-cat-filter-list">
                <div class="category-wrapper">
                  <?= $preset_categories_checklist_markup ?>
                </div>
              </ul>
            </td>
          </tr>
        </table>
      </details>
    </div>

</div>

<script>

jQuery(document).ready(function($) {
  var map_type_option_groups = {
    //local
    1: ['usage', 'map-presentation', 'zoom', 'positioning-start', 'adaptive-map-section', 'tooltip', 'popup', 'custom-marker', 'cluster'], //'filter-users', 'filter-presets', 'item-status-appearance': show when terms/categories & status are working
    //import
    2: ['usage', 'data-import', 'map-presentation', 'zoom', 'positioning-start', 'adaptive-map-section', 'tooltip', 'popup', 'custom-marker', 'cluster'],
    //export
    3: ['usage', 'data-export', 'popup', 'filter-presets']
  };

  //restricted options by input name
  var map_type_resctricted_options = {
    1: {},
    2: {
      popup: ['show_item_availability']
    },
    3: {
      popup: ['show_item_availability']
    }
  };

  function show_option_groups(map_type) {
    //show options inside option groups
    $('.option').show();

    //show/hide groups
    $('.option-group').each(function() {
      var $this = $(this);
      var option_group_name = $this.attr('id').replace('option-group-', '');
      if(map_type_option_groups[map_type].includes(option_group_name)) {
        $(this).show();

        //show options
        $('input').show();
        $('textarea').show();

        //hide restricted options
        var restricted_options = map_type_resctricted_options[map_type][option_group_name];
        if(restricted_options) {
          restricted_options.forEach(function(option_name) {
            var $option_input = $('[name="cb_map_options[' + option_name + ']"]');
            console.log('$option_input: ', option_name, $option_input)
            var $closest_wrapper = $option_input.closest('tr');
            $closest_wrapper.hide();
          });
        }
      }
      else {
        $(this).hide();
      }
    });
  };

  $('#map_type').change(function() {
    show_option_groups($(this).val());
  });

  show_option_groups($('#map_type').val());

  //----------------------------------------------------------------------------
  // grouping & custom markup of user filters

  $('.cb_items_available_category_choice').change(function() {
    var $this = $(this);
    var el_id_arr = $this.attr('id').split('-');
    var cat_id = el_id_arr[el_id_arr.length - 1];
    //console.log(cat_id);

    if ($this.prop("checked")) {
      //console.log('checked');
      add_custom_markup_option(cat_id, $this.parent().text(), $this.parent().text().trim());
    }
    else {
      //console.log('unchecked');
      $('#available_category_cutom_markup_' + cat_id).remove();
    }

  });

  function add_filter_group(group_id, group_name) {
    var $accm_table = $('#available-categories-custom-markup-wrapper');
    group_id = group_id ? group_id : 'g' + new Date().getTime() + '-' + Math.floor(Math.random() * 1000000);
    group_name = group_name ? group_name : '';
    var $row = $('<tr><th><?= cb_map\__( 'FILTER_GROUP', 'commonsbooking-maps', 'filter group') ?>:</th><td><input style="width: 250px;" type="text" placeholder="<?= cb_map\__( 'FILTER_GROUP_PLACEHOLDER', 'commonsbooking-maps', 'group name') ?>" name="cb_map_options[cb_items_available_categories][' + group_id + ']" value="' + group_name + '"></td></tr>');
    $accm_table.append($row);
    if(!$row.is(':nth-child(2)')) {
      var $group_remove_button = $('<button style="margin-left: 10px;" class="button" title="<?= cb_map\__('REMOVE_FILTER_GROUP_BUTTON_TITLE', 'commonsbooking-maps', 'remove filter group') ?>"><span class="dashicons dashicons-trash"></span></button>');

      $($group_remove_button).click(function(event) {
        event.preventDefault();

        $(this).parent('tr').remove();
      });

      $row.append($group_remove_button);
    }
  }

  function add_custom_markup_option(cat_id, label_text, markup) {
    var $accm_table = $('#available-categories-custom-markup-wrapper');
    var $row = $('<tr id="available_category_cutom_markup_' + cat_id + '"><th class="filter-label-name">' + label_text + ':</th><td><textarea style="width: 250px;" name="cb_map_options[cb_items_available_categories][' + cat_id + ']">' + markup + '</textarea></td></tr>');
    $accm_table.append($row);
  }

  function add_custom_markup_options() {
    var custom_markup_options_data = <?= json_encode( $available_categories ); ?>;

    if(custom_markup_options_data.length > 0) {
      $.each(custom_markup_options_data, function(index, item) {
        if(item.id.substring(0, 1) == 'g') {
          add_filter_group(item.id, item.content);
        }
        else {
          var $cat_choice = $(".cb_items_available_category_choice[value='" + item.id + "']");
          var markup = custom_markup_options_data[item.id] || $cat_choice.parent().text().trim();
          add_custom_markup_option(item.id, $cat_choice.parent().text(), item.content);
        }
      });
    }
    else {
      add_filter_group();
    }

  }

  add_custom_markup_options();

  $('#add-filter-group-button').click(function(event) {
    event.preventDefault();
    add_filter_group();
  });

  //----------------------------------------------------------------------------
  // data export

  function random_string(length, chars) {
    var result = '';
    for (var i = length; i > 0; --i) result += chars[Math.floor(Math.random() * chars.length)];
    return result;
  }

  function create_export_code($input_field) {
    var export_code = random_string(12, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
    $input_field.val(export_code);
  }

  var $export_code_input = $('input[name="cb_map_options[export_code]"]');

  if($export_code_input.val().length == 0) {
    create_export_code($export_code_input);
  }

  $('#create-export-code-button').click(function() {
    create_export_code($export_code_input);
  });

  //----------------------------------------------------------------------------
  // data import
  function add_import_sources($target_element, urls, codes) {
    $.each(urls, function(index) {
      add_import_source($target_element, urls[index], codes[index]);
    });
  }

  function add_import_source($target_element, url, code) {
    $url_input = $('<input type="url" pattern="https?://.*" autocomplete="off" size="20" name="cb_map_options[import_sources][urls][]" placeholder="<?= cb_map\__( 'URL', 'commonsbooking-maps', 'URL') ?>" required>');
    $code_input = $('<input type="text" autocomplete="off" size="10" name="cb_map_options[import_sources][codes][]" minlength="<?= CB_Map_Admin::EXPORT_CODE_VALUE_MIN_LENGTH ?>" placeholder="<?= cb_map\__( 'CODE', 'commonsbooking-maps', 'Code') ?>" required>');

    var $import_source = $('<div style="margin-top: 5px;"></div>');

    $import_source.append($url_input);
    $import_source.append($code_input);

    if(url) {
      $url_input.val(url);
    }
    if(code) {
      $code_input.val(code);
    }

    var $remove_source_button = $('<button style="margin-left: 10px;" class="button remove-import-source-button" title="<?= cb_map\__('REMOVE_IMPORT_SOURCE_BUTTON_TITLE', 'commonsbooking-maps', 'remove import source') ?>"><span class="dashicons dashicons-minus"></span></button>');
    $import_source.append($remove_source_button);

    $remove_source_button.click(function(event) {
      event.preventDefault();
      $remove_source_button.parent('div').remove();
    });

    var $import_button = $('<button style="margin-left: 10px;" class="button test-import-source-button" title="<?= cb_map\__('TEST_IMPORT_SOURCE_BUTTON_TITLE', 'commonsbooking-maps', 'test import source') ?>"><span class="dashicons dashicons-download"></span></button>');
    $import_source.append($import_button);

    $import_button.click(function(event) {
      event.preventDefault();

      var url = $($import_source.find('input')[0]).val();

      var data = {
        action: 'cb_map_import_source_test',
        cb_map_id: <?= $cb_map_id ?>,
        url: url,
        code: $($import_source.find('input')[1]).val()
      };

      $import_button.prop("disabled", true);
      $import_button.find('span').removeClass('dashicons-download');
      $import_button.find('span').addClass('dashicons-update');
      $import_button.find('span').addClass('rotate');

      jQuery.post('<?= get_site_url(null, '', null) . '/wp-admin/admin-ajax.php' ?>', data, function(response) {
        $import_button.find('span').addClass('dashicons-yes');

        setTimeout(function() {
          $import_button.find('span').removeClass('dashicons-yes');
          $import_button.find('span').addClass('dashicons-download');
          $import_button.prop("disabled", false);
        }, 2000);
      }).fail(function() {
        $import_button.find('span').addClass('dashicons-no');

        setTimeout(function() {
          $import_button.find('span').removeClass('dashicons-no');
          $import_button.find('span').addClass('dashicons-download');
          $import_button.prop("disabled", false);
        }, 2000);
      }).always(function() {

        $import_button.find('span').removeClass('rotate');
        $import_button.find('span').removeClass('dashicons-update');

      });
    });

    $target_element.append($import_source);
  }

  $('#add-import-source-button').click(function(event) {
    event.preventDefault();
    add_import_source($('#import-sources'));
  });

  var import_sources = <?= CB_Map_Admin::get_option($cb_map_id, 'import_sources') ? json_encode(CB_Map_Admin::get_option($cb_map_id, 'import_sources')) : 'null'; ?>;

  if(import_sources) {
    add_import_sources($('#import-sources'), import_sources.urls, import_sources.codes);
  }

});

</script>
