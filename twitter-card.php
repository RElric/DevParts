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
 * ******************************************* @FUNCTION get_summary_card() ************************************** *
 * *************************************************************************************************************** *
 * *                                                                                                             * *
 * *                           Create HTML parts wich correspond to Summary Twitter Card                         * *
 * *                                                                                                             * *
 * *************************************************************************************************************** *
 * *                                                                                                             * *
 * *                        @RETURN string - A string formated in HTML to display the card                       * *
 * *                                                                                                             * *
 * ************************************************* @PARAMETERS ************************************************* *
 * *                                                                                                             * *
 * * REQUIRED      @type            - The type of the card                                                       * *
 * * REQUIRED      @site_url        - The url of the relative site of the card                                   * *
 * * REQUIRED      @title           - The title of the relative site of the card                                 * *
 * * REQUIRED      @description     - The desciption of the relative site of the card                            * *
 * * REQUIRED      @image_url       - The image url of the relative site of the card                             * *
 * * REQUIRED      @image_alt       - The alternative texte of the relative site of the card                     * *
 * * REQUIRED      @author          - The author of the relative site of the card                                * *
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
    $image_alt,
    $author
) {
    return
      '<meta name="twitter:card" content="'.$type.'" />'.
      '<meta name="twitter:site" content="'.$site_url.'" />'.
      '<meta name="twitter:title" content="'.$title.'" />'.
      '<meta name="twitter:description" content="'.$description.'" />'.
      '<meta name="twitter:image" content="'.$image_url.'" />'.
      '<meta name="twitter:creator" content="'.$author.'">'
      '<meta name="twitter:image:alt" content="'.image_alt.'" />'
    ;
}


/* *************************************************************************************************************** *
 * ********************************************* @FUNCTION get_app_card() **************************************** *
 * *************************************************************************************************************** *
 * *                                                                                                             * *
 * *                         Create HTML parts wich correspond to Application Twitter Card                       * *
 * *                                                                                                             * *
 * *************************************************************************************************************** *
 * *                                                                                                             * *
 * *                        @RETURN string - A string formated in HTML to display the card                       * *
 * *                                                                                                             * *
 * ************************************************* @PARAMETERS ************************************************* *
 * *                                                                                                             * *
 * * REQUIRED      @type            - The type of the card                                                       * *
 * * REQUIRED      @site_url        - The url of the relative application's site of the card                     * *
 * * REQUIRED      @title           - The title of the relative application's site of the card                   * *
 * * REQUIRED      @description     - The desciption of the relative application's site of the card              * *
 * * REQUIRED      @image_url       - The image url of the relative application's site of the card               * *
 * * REQUIRED      @image_alt       - The alternative texte of the relative application's site of the card       * *
 * * REQUIRED      @author          - The author of the relative application's site of the card                  * *
 * * REQUIRED      @country         - The country where the relative application is provided                     * *
 * * REQUIRED      @app_name_*      - The app name for relative platform                                         * *
 * * REQUIRED      @app_id_*        - The app id for relative platform         								                   * *
 * * REQUIRED      @app_url_*       - The app url for relative platform         								                 * *
 * *                                                                                                             * *
 * *************************************************************************************************************** *
 * *************************************************************************************************************** *
 * *************************************************************************************************************** */
function get_app_card(
    $type,
    $site_url,
    $title,
    $description,
    $image_url,
    $image_alt,
    $author,
    $country,
    $app_name_iphone,
    $app_id_iphone,
    $app_url_iphone,
    $app_name_ipad,
    $app_id_ipad,
    $app_url_ipad,
    $app_name_googleplay,
    $app_id_googleplay,
    $app_url_googleplay,
) {
  $card =  get_summary_card($type, $site_url, $title, $description, $image_url, $image_alt, $author);

  $card .= 
    '<meta name="twitter:app:country" content="'.$country.'">'.
    '<meta name="twitter:app:name:iphone" content="'.$app_name_iphone.'">'.
    '<meta name="twitter:app:id:iphone" content="'.$app_id_iphone.'">'.
    '<meta name="twitter:app:url:iphone" content="'.$app_url_iphone.'">'.
    '<meta name="twitter:app:name:ipad" content="'.$app_name_ipad.'">'.
    '<meta name="twitter:app:id:ipad" content="'.$app_id_ipad.'">'.
    '<meta name="twitter:app:url:ipad" content="'.$app_url_ipad.'">'.
    '<meta name="twitter:app:name:googleplay" content="'.$app_name_googleplay.'">'.
    '<meta name="twitter:app:id:googleplay" content="'.$app_id_googleplay.'">'.
    '<meta name="twitter:app:url:googleplay" content="'.$app_url_googleplay.'">'
  ;

  return $card;
}


/* *************************************************************************************************************** *
 * ***************************************** @FUNCTION get_media_player_card() *********************************** *
 * *************************************************************************************************************** *
 * *                                                                                                             * *
 * *                        Create HTML parts wich correspond to media player Twitter Card                       * *
 * *                                                                                                             * *
 * *************************************************************************************************************** *
 * *                                                                                                             * *
 * *                        @RETURN string - A string formated in HTML to display the card                       * *
 * *                                                                                                             * *
 * ************************************************* @PARAMETERS ************************************************* *
 * *                                                                                                             * *
 * * REQUIRED      @type            - The type of the card                                                       * *
 * * REQUIRED      @site_url        - The url of the relative site of the card                                   * *
 * * REQUIRED      @title           - The title of the relative site of the card                                 * *
 * * REQUIRED      @description     - The desciption of the relative site of the card                            * *
 * * REQUIRED      @image_url       - The image url of the relative site of the card                             * *
 * * REQUIRED      @image_alt       - The alternative texte of the relative site of the card                     * *
 * * REQUIRED      @author          - The author of the relative site of the card                                * *
 * * REQUIRED      @player_url      - The url of player of the related media of the site of the card             * *
 * * REQUIRED      @player_width    - The width of player of the related media of the site of the card           * *
 * * REQUIRED      @player_height   - The height of player of the related media of the site of the card          * *
 * * REQUIRED      @player_stream_url																																						 * *
 * *				- The stream url of player of the related media of the site of the card                    	 				 * *
 * * REQUIRED      @player_stream_content_type          																												 * *
 * *				- The stream content type (accorded to MIME) of player of the related media of the site of the card  * *
 * *                                                                                                             * *
 * *************************************************************************************************************** *
 * *************************************************************************************************************** *
 * *************************************************************************************************************** */
function get_media_player_card(
    $type,
    $site_url,
    $title,
    $description,
    $image_url,
    $image_alt,
    $author,
    $player_url,
    $player_width,
    $player_height,
    $player_stream_url,
    $player_stream_content_type
) {
  $card =  get_summary_card($type, $site_url, $title, $description, $image_url, $image_alt, $author);

  $card .= 
    '<meta name="twitter:player" content="'.$player_url.'">'.
    '<meta name="twitter:player:width" content="'.$player_width.'">'.
    '<meta name="twitter:player:height" content="'.$player_height.'">'.
    '<meta name="twitter:player:stream" content="'.$player_stream_url.'">'.
    '<meta name="twitter:player:stream:content_type" content="'.$player_stream_content_type'">'
  ;

  return $card;
}
