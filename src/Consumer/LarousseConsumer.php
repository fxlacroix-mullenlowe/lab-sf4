<?php

namespace App\Consumer;

class LarousseConsumer
{
    private $uri = "https://www.larousse.fr/dictionnaires/francais/%s";
    private $pattern = '#<li class="DivisionDefinition">(.*)</li>#';

    public function get($term)
    {
        $content = file_get_contents(sprintf($this->uri, $term));
        preg_match_all($this->pattern, $content, $returns);

        $list = "<ul>";
        foreach($returns as $return){

            foreach($return as $definition)
            {
                $list .= $definition;
            }
        }
        $list .= "</ul>";

        return $list;
    }

}