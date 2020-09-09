<?php

namespace Nddcoder\Dac\Diagram\Elastic\Elasticsearch;

use Nddcoder\Dac\Diagram\Elastic\Elastic;

class Kibana extends Elastic
{
    public function getImage()
    {
        return 'resources/elastic/elasticsearch/kibana.png';
    }
}
