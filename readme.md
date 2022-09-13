# Prueba entrevista

![requerimiento](https://user-images.githubusercontent.com/91103352/189927425-33b336f3-77cb-4f85-8517-006b3d9e5300.jpeg)

## Estructura

Se crea una carpeta TextValidate donde se encuentra la clase **Validate** en la cual se hace un metodo sencillo para mostrar la respuesta solicitada, para mostrarla se crea el services provider Text validate y en un facade, todo esto se puede ver en la view welcome.

### Clase Validate

```php
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
            "text" => gettype($text)=='string'?strlen($text)>10?$fstchar.($lenghtStr-2).$lstchar : $text:null

        ]);
    }

}
```

### View Welcome

```html
<h1>Prueba</h1>
<h2>Input</h2>
<ul>
    <li>4</li>
    <li>word</li>
    <li>Localization</li>
    <li>Internationalization</li>
    <li>pneumonoultramicroscopicsilicovolcanoconiosis</li>
</ul>
<h2>Output</h2>
<ul>
    <li>{{ InputValidate::validateInputText(4) }}</li>
    <li>{{ InputValidate::validateInputText('word') }}</li>
    <li>{{ InputValidate::validateInputText('Localization') }}</li>
    <li>{{ InputValidate::validateInputText('Internationalization') }}</li>
    <li>
        {{
        InputValidate::validateInputText('pneumonoultramicroscopicsilicovolcanoconiosis')
        }}
    </li>
</ul>
```

### Resultado

![screen](https://user-images.githubusercontent.com/91103352/189929467-ef95e035-8456-40af-9915-016c066d71bc.png)
