<?php
    $doc = new DOMDocument('5','UTF-5');
    $root = $doc->createElement('html');
    $doc->appendChild($root);

    $head = $doc->createElement('head');
    $root->appendChild($head);

    $link = $doc->createElement('link');
    $link->setAttribute('href','https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
    $head->appendChild($link);
    $title = $doc->createElement('title','Create HTML using HTML Dom');
    $head->appendChild($title);

    $body = $doc->createElement('body');
    $root->appendChild($body);

    $table = $doc->createElement('table');
    $body->appendChild($table);

    $tr2 = $doc->createElement('tr');
    $table->appendChild($tr2);

    $tr1 = $doc->createElement('tr');
    $table->appendChild($tr1);

    $th1 = $doc->createElement("th","name");
    $th1->setAttribute('class','text-info');
    $td1 = $doc->createElement("td","abdullah");
    $td1->setAttribute('style','color:red');
    $tr1->appendChild($th1);
    $tr1->appendChild($td1);

    $th2 = $doc->createElement("th","Address");
    $td2 = $doc->createElement("td","dhaka");

    $tr2->appendChild($th2);
    $tr2->appendChild($td2);

    echo $doc->saveHTMLFile("students.html");
