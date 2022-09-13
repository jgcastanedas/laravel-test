# Prueba entrevista

<center>
![WhatsApp Image 2022-09-07 at 3 17 02 PM (1)](https://user-images.githubusercontent.com/91103352/189925689-7a36ff0b-17d3-49b1-b84d-7dfc2f4ef00a.jpeg)
</center>

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
            "text" => strlen($text)>10?$fstchar.($lenghtStr-2).$lstchar : $text

        ]);
    }

}
```

### View Welcome

```html
<h1>Prueba</h1>
<h2>Input</h2>
<ul>
    <li>word</li>
    <li>Localization</li>
    <li>Internationalization</li>
    <li>pneumonoultramicroscopicsilicovolcanoconiosis</li>
</ul>
<h2>Output</h2>
<ul>
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

![Captura de pantalla 2022-09-13 a la(s) 9 23 30 a  m](https://user-images.githubusercontent.com/91103352/189927037-baa7bab6-f883-445f-a811-958fbf2cb950.png)
