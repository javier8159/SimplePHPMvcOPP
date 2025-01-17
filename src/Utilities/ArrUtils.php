<?php 
  namespace Utilities;

  class ArrUtils
  {

    /**
     * Combina el arreglo de origen con el arreglo destino donde las llaves
     * del destino coinciden con las llaves del origen.
     *
     * @param array $origin  Arreglo de Origen
     * @param array $destiny Arreglo de Destino
     *
     * @return void
     */
    public static function mergeArrayTo(&$origin, &$destiny)
    {
        if (is_array($origin) && is_array($destiny)) {
            foreach ($origin as $okey => $ovalue) {
                if (isset($destiny[$okey])) {
                    $destiny[$okey] = $ovalue;
                }
            }
        }
    }

    /**
     * Combina el arreglo de origen con el arreglo destino donde las llaves
     * del destino coinciden con las llaves del origen y agregando las 
     * llaves no existentes a las de origen.
     *
     * @param array $origin  Arreglo de Origen
     * @param array $destiny Arreglo de Destino
     *
     * @return void
     */
    public static function mergeFullArrayTo(&$origin, &$destiny)
    {
        if (is_array($origin) && is_array($destiny)) {
            foreach ($origin as $okey => $ovalue) {
                $destiny[$okey] = $ovalue;
            }
        }
    }
    /** 
    *from a hey value array creates an array structure ideal
    *for options structures in an html select input control
    *
     * @param array $baseArray  key value array
     * @param string $codeName  value of key
     * @param string $textName  value of text key
     * @param string $selectedName  value of selected key
     * @param string $selectedValue  value of selected option
     * 
     * @return array 
    */
      public static function toOptionsArray($baseArray, $codeName, $textName, $selectedName, $selectedValue)
 {
    $tmpArra = array();
    foreach($baseArray as $Key=>$Value){
        $tmpArray[] = array(
            $codeName =>$Key,
            $textName =>$Value,
            $selectedName => ($selectedValue == $Key)?'selected': ''
        );
    }
    return $tmpArray;
 }
    private function __construct()
    {
      
    }
  }
