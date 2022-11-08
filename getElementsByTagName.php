<?php
    $doc=new DOMDocument();
    $doc->loadHTMLFile('test.html');
    $content=$doc->getElementsByTagName('p');
 
    // foreach($content as $val)
    // {
    //     echo $val->nodeValue,'<br>';
    // }
    echo $doc->getElementById('x')->nodeValue;