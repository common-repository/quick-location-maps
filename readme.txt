=== Quick Location Maps ===
Contributors: Shashikanta Nayak
Tags: geolocation, maps, latitude, longitude, custom templates, custom post
Requires at least: 2.0
Tested up to: 3.3.2
Requires at least: 2.8
Stable tag: 1.0.0
Donate link: http://anidipta.blogspot.in/p/quick-location-maps.html

LICENSE:GNU 2


This Plugin insert a google map in to your posts using the Google Maps Api Free.

== Description ==

This Plugin insert a location map in your posts/pages using the iFrame based Google Maps without any Api.
The user can set the exact coords (latutude or longitudes) or insert the location address. If you want to insert a map in a posts you must to generate two personalized fields (called 'latitude' and 'longitude') with the coordinates or a personalized field called 'location' with the address.

This is good for Real Estate type of Blog as shown in the pics and Custom filed type location. It is very lightweight tested in wordpress 3.3.2 version, custom template ready, Google API free. 


== Installation ==

1. Upload `quick-location-maps` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place `<?php quickMap(); ?>` in your templates or Short Code [QuickMap]
4. Add latitude, longitude and location in custom post template

== Frequently Asked Questions ==

= Who does generate the map? =

The map image is generated using Static Google Maps API. 

== Screenshots ==
1. This is a demo output 'screenshot-1.jpg'
2. You can use custom filed maker plugins to use latitude, longitude and location 'screenshot-2.jpg'
3. You can do like this in each post 'screenshot-3.jpg'

= Can get the map in differents sizes? =

You can set the size of the map setting the width and the height in the quickMap function. Example:

    	<?php 
    		$width = 640;
    		$height = 480;
    		quickMap($width, $height); 
		?>

= Can customize the map? =

You can customize the zoom and the type of the map in the quickMap function. Example:

	<?php 
    		$width = 640;
    		$height = 480;
    		$zoom = 14;
    		$maptype = "roadmap";
   			quickMap($width, $height, $zoom, $maptype); 
	?>

Map types:

roadmap
satellite
hybrid

== Changelog ==
1. Short code added

== Upgrade Notice == 
= 0.1 =
* First release