<?php
/**
 * @package Quick Location Maps
 * @version 1.0.0
 */
/*
Plugin Name: Quick Location Maps
Plugin URI: http://www.anidipta.blogspot.com/
Description: This Plugins create Google Map for your Wordpress Post or Pages by pulling data from your Custom Field's Latitude, Longitude or Location. It's support Custom Templates.
Version: 1.0.0
Author URI: http://www.anidipta.blogspot.com/
Author Name: Sashikanta Nayak
Please Donate : sashi@gmx.com(PayPal)
*/

function quickMap ($width=640, $height=480, $zoom=16, $maptype = 'roadmap' )
{
	if (is_single())
	{
		
		$temp_longitude = get_post_custom_values("longitude");
		$longitude = $temp_longitude[0];
		$temp_latitude = get_post_custom_values("latitude");
		$latitude =  $temp_latitude[0];
		$temp_location = get_post_custom_values("location");
		$location =  urlencode($temp_location[0]);

		
		if ($latitude != 0 && $longitude != 0)
		{
		?>
		<iframe width=<?php echo $width; ?> height=<?php echo $height; ?> frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=+&amp;q=<?php echo $location; ?>&amp;ie=UTF8&amp;hq=&amp;hnear=<?php echo $location; ?>&amp;t=m&amp;z=12&amp;ll=<?php echo $latitude; ?>,<?php echo $longitude; ?>&amp;output=embed"></iframe>
		<?php
		}
		else if ($location != "")
		{
		?>
		<iframe width=<?php echo $width; ?> height=<?php echo $height; ?> frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=+&amp;q=<?php echo $location; ?>&amp;ie=UTF8&amp;hq=&amp;hnear=<?php echo $location; ?>&amp;t=m&amp;z=12&amp;output=embed"></iframe>
		<?php	
		
		}
	}
}

add_shortcode('QuickMap', 'quickMap');

?>
