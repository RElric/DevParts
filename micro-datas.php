<?php

/* *************************************************************************************************************** *
 * ************************************************ microdatas.php *********************************************** *
 * *************************************************************************************************************** *
 * *                                                                                                             * *
 * *                            Micro datas mixins to increase developpement speed                               * *
 * *                                                                                                             * *
 * *************************************************************************************************************** *
 * *                                                                                                             * *
 * *                                        (*) mdf means micros datas format                                    * *
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
 * ******************************************* @FUNCTION get_md_person() ***************************************** *
 * *************************************************************************************************************** *
 * *                                                                                                             * *
 * *           Create HTML parts wich correspond to Micro-Datas of a Person (based on https://schema.org)        * *
 * *                                                                                                             * *
 * *************************************************************************************************************** *
 * *                                                                                                             * *
 * *                   @RETURN string - A string formated in HTML to display the micro-datas                     * *
 * *                                                                                                             * *
 * ************************************************* @PARAMETERS ************************************************* *
 * *                                                                                                             * *
 * * REQUIRED      @name            - The first name of the person                                               * *
 * * REQUIRED      @familyName      - The last name of the person                                                * *
 * * REQUIRED      @address         - The address of the person could be text or mdf* address                    * *
 * * OPTIONAL      @isAddress       - Indicator of mdf* or text address                                          * *
 * * OPTIONAL      @work            - The place where the person works must be a mdf*                            * *
 * * OPTIONAL      @affiliations    - The different groups wich the personne is affiliated with must be a tab[]  * *
 * *                                                                                                             * *
 * *************************************************************************************************************** *
 * *************************************************************************************************************** *
 * *************************************************************************************************************** */
function get_md_person(
    $name,
    $familyName,
    $address,
    $isAddress = null,
    $work = null,
    $affiliations = new array()
) {
    // Basic div and information
    $md_person =
        '<div itemscope="https://schema.org/Person">'.
            '<div itemscope="https://schema.org/Person">'.
                '<meta itemprop="name" content="'.$name.'">'.
                '<meta itemprop="familyName" content="'.$familyName.'">';

    // If the variable isAddress is true, the address is in mdf* => use get_md_address
    // else it's just a simple string
    if ($isAddress != null) {
        $md_person .= get_md_address($address, 'person');
    } else {
        $md_person .= '<meta itemprop="address" content="'.$address.'">';
    }

    // If $work is not null, $work is an organisation in mdf* => use get_md_organisation
    if ($work != null) {
        $md_person .= get_md_organisation($work, 'person');
    }

    // If $affiliations isn't null, it is an array of different organisations linked to person
    // => use get_md_organisation
    foreach ($affiliations as $value) {
        $md_person .= get_md_organisation($value, 'person');
    }

    $md_person .= '</div>';

    return $md_person;
}

/* *************************************************************************************************************** *
 * ****************************************** @FUNCTION get_md_address() ***************************************** *
 * *************************************************************************************************************** *
 * *                                                                                                             * *
 * *          Create HTML parts wich correspond to Micro-Datas of an Address (based on https://schema.org)       * *
 * *                                                                                                             * *
 * *************************************************************************************************************** *
 * *                                                                                                             * *
 * *                   @RETURN string - A string formated in HTML to display the micro-datas                     * *
 * *                                                                                                             * *
 * ************************************************* @PARAMETERS ************************************************* *
 * *                                                                                                             * *
 * * REQUIRED      @address         - The address of the person could be text or mdf* address                    * *
 * * OPTIONAL      @specific        - Indicates that if the string is needed to be nested in something           * *
 * *                                                                                                             * *
 * *************************************************************************************************************** *
 * *************************************************************************************************************** *
 * *************************************************************************************************************** */
function get_md_address(
    $name,
    $specific = null
) {
    return $md_address;
}
