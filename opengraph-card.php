<?php

/* *************************************************************************************************************** *
 * ********************************************** opengraph-card.php ********************************************* *
 * *************************************************************************************************************** *
 * *                                                                                                             * *
 * *                                   Open Graph Protocl mixins to increase SEO                                 * *
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
 * ******************************************** @FUNCTION get_og_card() ****************************************** *
 * *************************************************************************************************************** *
 * *                                                                                                             * *
 * *               Create HTML parts wich correspond to Open Graph Protocol (based on http://ogp.me/)            * *
 * *                                                                                                             * *
 * *************************************************************************************************************** *
 * *                                                                                                             * *
 * *                      @RETURN string - A string formated in HTML to display the OGCard                       * *
 * *                                                                                                             * *
 * ************************************************* @PARAMETERS ************************************************* *
 * *                                                                                                             * *
 * * REQUIRED      @url             - The URL of the OGCard Subject                                              * *
 * * REQUIRED      @type      		  - Type Of the OGCard Subject                                               * *
 * * REQUIRED      @title           - The title of the OGCard Subject                                            * *
 * * REQUIRED      @description     - The description of the OGCard Subject                     				 * *
 * * REQUIRED      @image_url       - The URL of the thumbnail of the OGCard Subject                             * *
 * * OPTIONAL      @lang            - The lang of of the OGCard Subject 						                 * *
 * * OPTIONAL      @lang_alt        - The others languages which the content can be displayed as                 * *
 * * OPTIONAL      @site_name       - The site name of of the OGCard Subject                                     * *
 * * OPTIONAL      @image_MIME      - The type of the thumbnail of the OGCard Subject                            * *
 * * OPTIONAL      @image_width     - The width of the thumbnail of the OGCard Subject 							 * *
 * * OPTIONAL      @image_height    - The height of the thumbnail of the OGCard Subject 						 * *
 * *                                                                                                             * *
 * *************************************************************************************************************** *
 * *************************************************************************************************************** *
 * *************************************************************************************************************** */
function get_og_card(
    $url,
    $type,
    $title,
    $description,
    $image_url,
    $lang = null,
    $lang_alt = null,
    $site_name = null,
    $image_MIME = null,
    $image_width = null,
    $image_height = null
) {
    /*Minimum*/
    $og_card =
    '<meta property="og:url" content="'.$url.'" />'.
    '<meta property="og:type" content="'.$type'" />'.
    '<meta property="og:title" content="'.$title.'" />'.
    '<meta property="og:description" content="'.$description.'" />'.
    '<meta property="og:image" content="'.$image_url.'" />',
    '<meta property="og:image:url" content="'.$image_url.'" />',
    '<meta property="og:image:secure_url" content="'.$image_url.'" />',
    '<meta property="og:image:secure_url" content="'.$image_url.'" />';

    /*Enrichissement*/
    if ($lang != null) {
        $og_card .= '<meta property="og:locale" content="'.$lang.'" />';
    }
    if ($lang_alt != null) {
        $og_card .= '<meta property="og:locale:alternante" content="'.$lang_alt.'" />';
    }
    if ($site_name != null) {
        $og_card .= '<meta property="og:site_name" content="'.$site_name.'" />';
    }

    /*Enrichissement image & video & audio*/
    if ($image_MIME != null) {
        $og_card .= '<meta property="og:image:type" content="'.$image_MIME.'" />';
    }
    if ($image_width != null) {
        $og_card .= '<meta property="og:image:width" content="'.$image_width.'" />';
    }
    if ($image_height != null) {
        $og_card .= '<meta property="og:image:height" content="'.$image_height.'" />';
    }

    return $og_card;
}
