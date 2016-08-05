<?php

/* *************************************************************************************************************** *
 * *********************************************** twitter-card.php ********************************************** *
 * *************************************************************************************************************** *
 * *                                                                                                             * *
 * *                            Mixins to increase SEO fow Twitter with Twitter cards                            * *
 * *                                                                                                             * *
 * *************************************************************************************************************** *
 * *                                                                                                             * *
 * *                                       Made By Elric Reffuveille - CC BY SA                                  * *
 * *                                     Author URI : https://www.reffuveille.fr/                                * *
 * *                                  Code based : https://github.com/RElric/DevParts                            * *
 * *                                                                                                             * *
 * *************************************************************************************************************** *
 * *************************************************************************************************************** *
 * *************************************************************************************************************** */

/* *************************************************************************************************************** *
 * ******************************************* @FUNCTION get_summary_card() ***************************************** *
 * *************************************************************************************************************** *
 * *                                                                                                             * *
 * *											 Create HTML parts wich correspond to simple Summary Twitter Card											 * *
 * *                                                                                                             * *
 * *************************************************************************************************************** *
 * *                                                                                                             * *
 * *											  @RETURN string - A string formated in HTML to display the card									  	 * *
 * *                                                                                                             * *
 * ************************************************* @PARAMETERS ************************************************* *
 * *                                                                                                             * *
 * * REQUIRED      @type            - The type of the card                                                       * *
 * * REQUIRED      @site_url        - The url of the relative site of the card                                   * *
 * * REQUIRED      @title           - The title of the relative site of the card                                 * *
 * * OPTIONAL      @description     - The desciption of the relative site of the card                            * *
 * * OPTIONAL      @image_url       - The image url of the relative site of the card                             * *
 * * OPTIONAL      @image_alt       - The alternative texte of the relative site of the card                     * *
 * *                                                                                                             * *
 * *************************************************************************************************************** *
 * *************************************************************************************************************** *
 * *************************************************************************************************************** */
function get_summary_card(
    $type,
    $site_url,
    $title,
    $description,
    $image_url,
    $image_alt
) {
    return
        '<meta name="twitter:card" content="'.$type.'" />'.
        '<meta name="twitter:site" content="'.$site_url.'" />'.
        '<meta name="twitter:title" content="'.$title.'" />'.
        '<meta name="twitter:description" content="'.$description.'" />'.
        '<meta name="twitter:image" content="'.$image_url.'" />'.
        '<meta name="twitter:image:alt" content="'.image_alt.'" />'
    ;
}

<!-- Summary Card with large image -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@nytimes">
<meta name="twitter:creator" content="@SarahMaslinNir">
<meta name="twitter:title" content="Parade of Fans for Houston’s Funeral">
<meta name="twitter:description" content="NEWARK - The guest list and parade of limousines with celebrities emerging from them seemed more suited to a red carpet event in Hollywood or New York than than a gritty stretch of Sussex Avenue near the former site of the James M. Baxter Terrace public housing project here.">
<meta name="twitter:image" content="http://graphics8.nytimes.com/images/2012/02/19/us/19whitney-span/19whitney-span-articleLarge.jpg">
<meta name="twitter:image:alt" content="BLABLA_ALTERNATIF" />

<!-- App Card -->
<meta name="twitter:card" content="app">
<meta name="twitter:site" content="@TwitterDev">
<meta name="twitter:description" content="Cannonball is the fun way to create and share stories and poems on your phone. Start with a beautiful image from the gallery, then choose words to complete the story and share it with friends.">
<meta name="twitter:app:country" content="US">
<meta name="twitter:app:name:iphone" content="Cannonball">
<meta name="twitter:app:id:iphone" content="929750075">
<meta name="twitter:app:url:iphone" content="cannonball://poem/5149e249222f9e600a7540ef">
<meta name="twitter:app:name:ipad" content="Cannonball">
<meta name="twitter:app:id:ipad" content="929750075">
<meta name="twitter:app:url:ipad" content="cannonball://poem/5149e249222f9e600a7540ef">
<meta name="twitter:app:name:googleplay" content="Cannonball">
<meta name="twitter:app:id:googleplay" content="io.fabric.samples.cannonball">
<meta name="twitter:app:url:googleplay" content="http://cannonball.fabric.io/poem/5149e249222f9e600a7540ef">

<!-- Player Card -->
	<meta name="twitter:card" content="player">
	<meta name="twitter:site" content="@rchoi">
	<meta name="twitter:title" content="Sample Player Card">
	<meta name="twitter:description" content="This is a sample video. When you implement, make sure all links are secure.">
	<meta name="twitter:image" content="https://yoursite.com/example.png">
	<meta name="twitter:player" content="https://yoursite.com/container.html">
	<meta name="twitter:player:width" content="480">
	<meta name="twitter:player:height" content="480">
	<meta name="twitter:player:stream" content="https://yoursite.com/example.mp4">
	<meta name="twitter:player:stream:content_type" content="video/mp4">