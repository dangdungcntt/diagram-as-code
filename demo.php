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
use Nddcoder\Dac\Diagram\Aws\Database\Database;
use Nddcoder\Dac\Diagram\Aws\General\General;
use Nddcoder\Dac\Diagram\Aws\Integration\SQS;
use Nddcoder\Dac\Diagram\Onprem\Compute\Server;
use Nddcoder\Dac\Diagram\Onprem\Queue\Kafka;

//php dac demo.php | docker run --rm -i -v $(pwd):/dot nshine/dot > graph.png
return Diagram::create('root', 'Postback Event Processing')
    ->direction(Style::DIR_BT)
    ->append(
        Cluster::create('kafka', 'Kafka Cluster (3 broker)')
            ->append(Kafka::create('kafka1'))
            ->append($queue = SQS::create('sqs_postback', 'postback.shipping.status'))
            ->append(Kafka::create('kafka2'))
    )
    ->append(
        Cluster::create('event_driven', 'Event Driven')
            ->append($retries = General::create('retries', 'Retries (x5)'))
            ->append($consumer = Ec2::create('consumer', 'Consumer'))
    )
    ->append(
        Cluster::create('partners', 'Partners')
            ->append($partners = [
                Server::create('flex_sale', 'FlexSale'),
                Server::create('pinggo', 'PingGo'),
                Server::create('other', '...'),
            ])
            ->append($fedora = Server::create('fedora', 'Fedora'))
    )
    ->append($database = Database::create('flexship', 'flexship'))
    ->connect($database, $consumer, EdgeStyle::create()->style(Style::BOLD)->label('READ'))
    ->connect($queue, $consumer, EdgeStyle::create()->style(Style::DOTTED)->color(Color::BROWN))
    ->connect($consumer, $fedora, $getEdge = EdgeStyle::create()->color(Color::DARKGREEN)->label('GET'))
    ->connect($consumer, $partners, $getEdge->bothDirection())
    ->connect($fedora, $retries, EdgeStyle::create()->color(Color::BROWN)->label('Response '.PHP_EOL.'5xx'))
    ->connect($retries, $fedora, EdgeStyle::create()->style(Style::DOTTED)->color(Color::DARKORANGE));
