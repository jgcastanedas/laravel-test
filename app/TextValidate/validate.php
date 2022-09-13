<?php 


namespace App\TextValidate;

class Validate{
    
    /**
     * validateInputText
     * Devuelve abreviada la palagra ingresada si es con una 
     * logitud superior a 10
     * @param $text String
     */
    public static function validateInputText($text = null){
        $fstchar = substr($text,0, 1);
        $lstchar = substr($text, -1);
        $lenghtStr = strlen($text);        
        return view('validate.validate',[
            "text" => strlen($text)>10?$fstchar.($lenghtStr-2).$lstchar : $text
            
        ]);
    }

}



?>