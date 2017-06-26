<?php

namespace tp\parser;
/**
 * Description of Parser
 *
 * @author wert
 * 
 * small changes
 */
Class Parser implements ParserInterface
{
    //method    
    public function process(string $tag, string $url): array {
        $arr = array();
        preg_match($tag, $url, $arr);
        return $arr;
    }
    
    
    public function test()
    {
    echo "test";    
    }
}


// get url for parsing
$url = file_get_contents('http://univer-pulse.com.ua/index.php/specialty/php');
// pattern
$tag = '~<h2>.*</h2>~';
//создаем объект и выводим результат обращения к методу класса(массив).
$obj = new Parser;
echo '<pre>';
print_r($obj->process($url, $tag));
echo '<br>';
var_dump ($url);