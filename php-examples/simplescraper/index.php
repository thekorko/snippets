<?php

require('simple_html_dom.php');

// Create DOM from URL or file
$article = 'https://www.example.com/blog/2016/07/07/example1';
$html = file_get_html('test.html');
$url = 'https://www.example.com/';
$author = '';

$articles = ["https://www.example.com/blog/2016/07/07/example1","https://www.example.com/blog/2020/10/16/example2","https://www.example.com/blog/2020/09/22/example3","https://www.example.com/blog/2020/09/14/example4","https://www.example.com/blog/2020/09/10/example5","https://www.example.com/blog/2020/09/09/example6"];


$i = 0;
$links = [];
$description = [];
$title = '';
foreach($articles as $article) {
  
$html = file_get_html($article);

foreach($html->find('h3') as $element) {
  if ($i > 0) {
    $i = 0;
    break;
  }
  $title = $element;
}

echo ($title);

$newhtml = '';

//get the post
foreach($html->find('article') as $element)   {
  if ($i > 0) {
    $i = 0;
    break;
  }
$i++;
$html = str_get_html($element);
$html->save();
}

//get the description
foreach($html->find('p') as $element)   {
  if ($i > 2) {
    if ($i > 8) {
      $i = 0;
      break;
    }

    $description[] = [
      'paragraph' => $element->innertext,
    ];
  }
  $html->save();
  $i++;
}
var_dump($description);

//remove html imputs
foreach($html->find('input') as $button) {
  $button->outertext = '';
  $html->save();
}

// trying to filter out dates
/*foreach($html->find('p') as $paragraph) {

  $pattern = "/july\s\d{1,2}/i";

  if (preg_match($pattern, $paragraph)) {
   echo('test');
   echo($paragraph);
   $paragraph->outertext = '';
  }
  $html->save();
}
*/

foreach($html->find('a') as $href) {

  $links[] = [
        'title' => $href->innertext,
        'url' => $href->href
  ];
  $link = $href->href;
  $html->save();
}


echo($html);


var_dump($links);

}
?>
