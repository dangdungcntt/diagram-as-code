<?php

namespace Nddcoder\Dac\Diagram\Elastic\Elasticsearch;

use Nddcoder\Dac\Diagram\Elastic\Elastic;

class Logstash extends Elastic
{
    public function getImage()
    {
        return 'resources/elastic/elasticsearch/logstash.png';
    }
}
