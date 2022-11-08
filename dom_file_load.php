<?php
    $doc = new DOMDocument();
    $doc->loadHTMLFile('test.html');

    echo '<pre>';
        print_r($doc);
    echo '<pre>';

    $doc->load('test.xml');
    echo '<pre>';
        print_r($doc);
    echo '<pre>';