<?php

namespace App\Consumer;

https://www.larousse.fr/dictionnaires/francais/maison

class DefinitionConsumer
{
    private $uri = "http://fr.wikipedia.org/w/api.php?%s";

    public function get($term)
    {
        if($result = $this->search($term))
        {
            if (! empty($result)) {
                $this->find($result);
            }
        }

        return null;
    }

    public function search($term)
    {
        $query = [
            'action'    => 'query',
            'prop'      => 'revisions',
            'rvprop'    => 'content',
            'rvsection' => "0",
            'titles'    => $term,
            'format'    => 'json',
        ];

        $call = file_get_contents(sprintf($this->uri, http_build_query($query)));

        $returns = json_decode($call, true);

        if (is_array($returns) && ! empty($returns['query']['pages'])) {

            return key($returns['query']['pages']);
        }

        return false;

    }

    public function find($id)
    {
        $query = array(
            'action' => 'query',
            'format' => 'json',
            'prop' => 'extracts',
            'redirects' => true,
            'titles' => $id,
        );

        $call = file_get_contents(sprintf($this->uri, http_build_query($query)));

        $return = json_decode($call);

        if (!empty($return)) {

            $page = (array)$return->query->pages;
            $info = array_shift($page);
        }

        return $info;
    }
}