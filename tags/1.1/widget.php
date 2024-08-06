<?php
/*

Maybe I remember to add something here.

*/
/**
 * Adds aads_ads_widget widget.
 */
class aads_ads_widget extends wp_widget {
 
    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'aads_ads_widget', // Base ID
            'A-ADS widget', // Name
            array( 'description' => __( 'Banner ads widget', 'ads_domain' ), ) // Args
           
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */

     
    public function widget( $args, $instance ) {
        extract( $args );
        $title = apply_filters( 'A-ADS Widget', $instance['title'] );
        
        echo $before_widget;
        if ( ! empty( $title ) ) {
         //   echo $before_title . $title . $after_title;
        }

        // Widget Output
        //Set width and height dynamically for ad units
        if ($instance['ad_unit_size'] == '120x60') {
            $width = "120px" ;
            $height = "60px";
          }
 
                  if ($instance['ad_unit_size'] == '120x600') {
             $width = "120px" ;
             $height = "600px";
          }
 
          if ($instance['ad_unit_size'] == '125x125') {
             $width = "125px" ;
             $height = "125px";
          }
 
                   if ($instance['ad_unit_size'] == '160x600') {
             $width = "160px" ;
             $height = "600px";
          }
 
                   if ($instance['ad_unit_size'] == '200x200') {
             $width = "200px" ;
             $height = "200px";
          }
 
                   if ($instance['ad_unit_size'] == '240x400') {
             $width = "240px" ;
             $height = "400px";
          }
 
                   if ($instance['ad_unit_size'] == '250x250') {
             $width = "250px" ;
             $height = "250px";
          }
 
                   if ($instance['ad_unit_size'] == '300x250') {
             $width = "300px" ;
             $height = "250px";
          }
 
                   if ($instance['ad_unit_size'] == '300x600') {
             $width = "300px" ;
             $height = "600px";
          }
 
                   if ($instance['ad_unit_size'] == '320x50') {
             $width = "320px" ;
             $height = "50px";
          }
 
                   if ($instance['ad_unit_size'] == '320x100') {
             $width = "320px" ;
             $height = "100px";
          }
 
                   if ($instance['ad_unit_size'] == '336x280') {
             $width = "336px" ;
             $height = "280px";
          }
 
                   if ($instance['ad_unit_size'] == '468x60') {
             $width = "468px" ;
             $height = "60px";
          }
 
                   if ($instance['ad_unit_size'] == '728x90') {
             $width = "728px" ;
             $height = "90px";
          }
 
                   if ($instance['ad_unit_size'] == '970x90') {
             $width = "970px" ;
             $height = "90px";
          }
 
          if ($instance['ad_unit_size'] == '970x250') {
             $width = "970px" ;
             $height = "250px";
          } 


        // Choose between adaptive/non-adaptive ad unit.
        if ($instance['ad_unit_size'] == 'adaptive') {
            echo '<iframe
            data-aa='.$instance['ad_unit_ID'].'
            src="//acceptable.a-ads.com/'.$instance['ad_unit_ID'].'"
            scrolling="no"
            style="border:0px;
            padding:0;
            width:100%;
            height:100%;
            overflow:hidden"
            allowtransparency="true">
            </iframe>';
         }
       else {
          echo ('<iframe
          data-aa='.$instance['ad_unit_ID'].'
          src="//ad.a-ads.com/'.$instance['ad_unit_ID'].'?size='.$instance['ad_unit_size'].'"
          scrolling="no"
          style="width:'.$width.';
          height:'.$height.';
          border:0px;
          padding:0;
          overflow:hidden"
          allowtransparency="true">
          </iframe>');
        }
       
       // echo __( 'adaptive' );

        echo $after_widget;
    }
 
    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        //
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'A-ADS', 'ads_domain' );
        }
        

        //If $instance['ad_unit_ID'] is set
       if ( isset( $instance[ 'ad_unit_ID' ] ) ) {
          $ad_unit_ID = $instance[ 'ad_unit_ID' ];
        }
        else {
            $ad_unit_ID = __( 1, 'ads_domain' );
       }
       
       //
       if ( isset( $instance[ 'ad_unit_size' ] ) ) {
        $ad_unit_size = $instance[ 'ad_unit_size' ];
      }
      else {
          $ad_unit_size = __( 'default', 'ads_domain' );
     }
        ?>

        <p>
            <label
            for="<?php echo $this->get_field_name( 'title' ); ?>">
            <?php _e( 'Title:' ); ?>
            </label>

            <input 
            class="widefat"
            id="<?php echo $this->get_field_id( 'title' ); ?>"
            name="<?php echo $this->get_field_name( 'title' ); ?>"
            type="text"
            value="<?php echo esc_attr( $title ); ?>" />
        </p>

        <p>
            <label
            for="<?php echo $this->get_field_name( 'ad_unit_ID' ); ?>">
            <?php _e( 'Ad Unit ID:' ); ?>
            </label>

            <input 
            class="widefat"
            id="<?php echo $this->get_field_id( 'ad_unit_ID' ); ?>"
            name="<?php echo $this->get_field_name( 'ad_unit_ID' ); ?>"
            type="number"
            value="<?php echo ( $ad_unit_ID ); ?>" />
         </p>

         <p>
            <label
            for="<?php echo $this->get_field_name( 'ad_unit_size' ); ?>">
            <?php _e( 'Ad Unit Size:' ); ?>
            </label>

            <select
            class="widefat"
            id="<?php echo $this->get_field_id( 'ad_unit_size' ); ?>"
            name="<?php echo $this->get_field_name( 'ad_unit_size' ); ?>">
            <option value = "adaptive" <?php echo($ad_unit_size == 'adaptive') ? 'selected' : ''; ?>>
            Adaptive
            </option>

            <option value = "120x60" <?php echo($ad_unit_size == '120x60') ? 'selected' : ''; ?>>
            120x60
            </option>

            <option value = "120x600" <?php echo($ad_unit_size == '120x600') ? 'selected' : ''; ?>>
            120x600
            </option>

            <option value = "125x125" <?php echo($ad_unit_size == '125x125') ? 'selected' : ''; ?>>
            125x125
            </option>

            <option value = "160x600" <?php echo($ad_unit_size == '160x600') ? 'selected' : ''; ?>>
            160x600
            </option>

            <option value = "200x200" <?php echo($ad_unit_size == '200x200') ? 'selected' : ''; ?>>
            200x200
            </option>

            <option value = "240x400" <?php echo($ad_unit_size == '240x400') ? 'selected' : ''; ?>>
            240x400
            </option>
            
            <option value = "250x250" <?php echo($ad_unit_size == '250x250') ? 'selected' : ''; ?>>
            250x250
            </option>

            <option value = "300x250" <?php echo($ad_unit_size == '300x250') ? 'selected' : ''; ?>>
            300x250
            </option>
            
            <option value = "300x600" <?php echo($ad_unit_size == '300x600') ? 'selected' : ''; ?>>
            300x600
            </option>

            <option value = "320x50" <?php echo($ad_unit_size == '320x50') ? 'selected' : ''; ?>>
            320x50
            </option>

            <option value = "320x100" <?php echo($ad_unit_size == '320x100') ? 'selected' : ''; ?>>
            320x100
            </option>

            <option value = "336x280" <?php echo($ad_unit_size == '336x280') ? 'selected' : ''; ?>>
            336x280
            </option>

            <option value = "468x60" <?php echo($ad_unit_size == '468x60') ? 'selected' : ''; ?>>
            468x60
            </option>

            <option value = "728x90" <?php echo($ad_unit_size == '728x90') ? 'selected' : ''; ?>>
            728x90
            </option>

            <option value = "970x90" <?php echo($ad_unit_size == '970x90') ? 'selected' : ''; ?>>
            970x90
            </option>

            <option value = "970x250" <?php echo($ad_unit_size == '970x250') ? 'selected' : ''; ?>>
            970x250
            </option>


          </select>
         </p>

    <?php
    }
 
    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['ad_unit_ID'] = ( !empty( $new_instance['ad_unit_ID'] ) ) ? strip_tags( $new_instance['ad_unit_ID'] ) : '';
        $instance['ad_unit_size'] = ( !empty( $new_instance['ad_unit_size'] ) ) ? strip_tags( $new_instance['ad_unit_size'] ) : '';
        return $instance;
    }
 

} // class aads_ads_widget
 
?>