<?php

Class Languages extends Asset {
  
  static $identifiers = array('txt');
  
  function __construct($lang) {
    # create and store additional data required for this asset
    $this->set_extended_data($lang);
  }
  
  function set_extended_data($lang) {
    $arrays = explode('/', $_SERVER['REQUEST_URI']);
    $lengua = explode(':',$lang);
    $isc = array_search(trim($lengua[0]), $arrays) ? true : false;

    $this->data['@lang_url'] = $lengua[0];
    $this->data['@lenguage'] = $lengua[1];
    $this->data['@is_currlanguage'] = $isc;
  }
  
}

?>