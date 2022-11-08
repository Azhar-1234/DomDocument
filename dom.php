<?php
$html=<<<info
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Wellcome to ........</h1>
    </body>
    </html>
info;
$doc = new DOMDocument();
$doc->loadHTML($html);
echo '<pre>';
    // print_r($doc);
echo '</pre>';
echo $doc->textContent;