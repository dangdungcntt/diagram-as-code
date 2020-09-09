<?php
/*
 * This file is part of Alom Graphviz.
 * (c) Alexandre Salomé <alexandre.salome@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Nddcoder\Dac\Base\Cluster;
use Nddcoder\Dac\Base\Diagram;
use Nddcoder\Dac\Base\Style\Color;
use Nddcoder\Dac\Base\Style\EdgeStyle;
use Nddcoder\Dac\Base\Style\Style;
use Nddcoder\Dac\Diagram\Aws\Compute\Ec2;
use Nddcoder\Dac\Diagram\Onprem\Compute\Server;
use Nddcoder\Dac\Diagram\Onprem\Database\Mysql;
use Nddcoder\Dac\Diagram\Onprem\Queue\Kafka;

//php dac examples/example-01.php | docker run --rm -i -v $(pwd):/dot nshine/dot > examples/example-01.png
return Diagram::create('G', 'Demo Diagram As Code')
    ->append(
        Cluster::create('kafka', 'Kafka Cluster (3 broker)')
            ->append(Kafka::create('kafka1', 'Kafka 1'))
            ->append($kafka = Kafka::create('kafka2', 'Kafka 2'))
            ->append(Kafka::create('kafka3', 'Kafka 3'))
    )
    ->append(
        Cluster::create('event_driven', 'Event Driven')
            ->append($consumer = Ec2::create('consumer', 'Consumer'))
    )
    ->append(
        Cluster::create('partners', 'Partners')
            ->append($partners = [
                Server::create('partner1', 'Partner 1'),
                Server::create('partner2', 'Partner 2'),
                Server::create('partner3', 'Partner 3'),
            ])
    )
    ->append($database = Mysql::create('mysql', 'Mysql'))
    ->connect($database, $consumer, EdgeStyle::create()->style(Style::BOLD)->label('READ'))
    ->connect($kafka, $consumer, EdgeStyle::create()->style(Style::DOTTED)->color(Color::BROWN))
    ->connect($consumer, $partners, EdgeStyle::create()->color(Color::DARKGREEN)->label('SEND'));