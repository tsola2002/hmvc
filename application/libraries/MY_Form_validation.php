<?php
/**
 *
 * Package: hmvc
 * Filename: MY_Form_validation.php
 * Author: solidstunna101
 * Date: 12/12/13
 * Time: 11:43
 *
 */

class MY_Form_validation extends CI_Form_validation {
    function run($module = '', $group = ''){
        (is_object($module)) AND $this->CI = &$module;
        return parent::run($group);
    }
}