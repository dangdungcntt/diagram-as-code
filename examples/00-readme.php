<?php

use Nddcoder\Dac\Base\Cluster;
use Nddcoder\Dac\Base\Diagram;
use Nddcoder\Dac\Base\Style\Color;
use Nddcoder\Dac\Base\Style\EdgeStyle;
use Nddcoder\Dac\Base\Style\Style;
use Nddcoder\Dac\Diagram\Aws\Compute\Ec2;
use Nddcoder\Dac\Diagram\Onprem\Database\Mysql;
use Nddcoder\Dac\Diagram\Onprem\Queue\Kafka;

//php dac --root=/dot examples/00-readme.php | docker run --rm -i -v $(pwd):/dot nshine/dot > examples/output/00.png
return Diagram::create('G', 'Demo Diagram As Code')
    ->direction(Style::DIR_LR)
    ->append(
        Cluster::create('kafka', 'Kafka Cluster')
            ->append($kafka = Kafka::create('kafka', 'Kafka'))
    )
    ->append(
        Cluster::create('event_driven', 'Event Driven')
            ->append($consumer = Ec2::create('consumer', 'Consumer'))
    )
    ->append($database = Mysql::create('mysql', 'Mysql'))
    ->connect($kafka, $consumer, EdgeStyle::create()->style(Style::BOLD)->color(Color::BROWN))
    ->connect($consumer, $database, EdgeStyle::create()->style(Style::BOLD)->color(Color::DARKGREEN)->label('WRITE'));