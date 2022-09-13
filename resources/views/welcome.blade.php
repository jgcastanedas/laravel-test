<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prueba</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <body>
        
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
            <li>{{ InputValidate::validateInputText('pneumonoultramicroscopicsilicovolcanoconiosis') }}</li>
        </ul>
    </body>
</html>
