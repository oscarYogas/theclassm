<?php
/**
* Quaderno Tax
*
* @package   Quaderno PHP
* @author    Quaderno <support@quaderno.io>
* @copyright Copyright (c) 2021, Quaderno
* @license   http://opensource.org/licenses/gpl-2.0.php GNU Public License
*/

if ( ! defined( 'ABSPATH' ) ) { 
    exit; // Exit if accessed directly
}

class QuadernoTaxId extends QuadernoModel {

  public static function validate($params) {
    $return = false;
    $request = new QuadernoRequest();
    $request->validate('tax_ids', $params);
    $response = $request->get_response_body();
    return $response->valid;
  }

}
?>