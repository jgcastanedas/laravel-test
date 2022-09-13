<?php 


namespace App\TextValidate;

class Validate{
    
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