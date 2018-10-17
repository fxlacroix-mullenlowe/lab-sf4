<?php

namespace App\Consumer;

class RhymeConsumer
{
    var $uri = "http://1001rimes.com/listeperson.php?letter=%s";
    var $pattern = "#width=100%><tr><td>(.*)<br></td>#";

    public function get($term)
    {
        $content = file_get_contents(sprintf($this->uri, $term));
        preg_match_all($this->pattern, $content, $returns);
        $returns = preg_split("/<br>/", $returns[1][0]);
        $list = "<ul>";
        foreach($returns as $rhyme){
            $list .= "<li>" . $rhyme . "</li>";
        }
        $list .= "</ul>";

        return $list;
    }

}