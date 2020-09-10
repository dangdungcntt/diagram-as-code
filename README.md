# diagram-as-code

## Installation
```bash
composer require nddcoder/diagram-as-code
```

## Usage

Create a `demo.php` and return `Diagram` instance

```php
<?php

use Nddcoder\Dac\Base\Cluster;
use Nddcoder\Dac\Base\Diagram;
use Nddcoder\Dac\Base\Style\Color;
use Nddcoder\Dac\Base\Style\EdgeStyle;
use Nddcoder\Dac\Base\Style\Style;
use Nddcoder\Dac\Diagram\Aws\Compute\Ec2;
use Nddcoder\Dac\Diagram\Onprem\Database\Mysql;
use Nddcoder\Dac\Diagram\Onprem\Queue\Kafka;

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
```

Run `dac` command to build `dot` config

```bash
vendor/bin/dac demo.php
```

Dot config output

```dot
digraph G {
    label="Demo Diagram As Code";
    node [shape=box, style=rounded, fixedsize=true, width="1.4", height="1.4", labelloc=b, imagescale=true, fontname="Sans-Serif", fontsize="13", fontcolor="#2D3436"];
    edge [color="#7B8894", fontcolor="#2D3436", fontname="Sans-Serif", fontsize="13"];
    graph [pad="0.5", splines=ortho, nodesep="1.2", ranksep="1.2", fontname="Sans-Serif", fontsize="15", fontcolor="#2D3436"];
    rankdir=LR;
    subgraph cluster_kafka {
        label="Kafka Cluster";
        graph [pad="1", shape=box, style=rounded, labeljust=l, pencolor="#AEB6BE", fontname="Sans-Serif", fontsize="12", bgcolor="#E5F5FD"];
        kafka [label=Kafka, shape=none, height="2", image="resources/onprem/queue/kafka.png"];
    }
    subgraph cluster_event_driven {
        label="Event Driven";
        graph [pad="1", shape=box, style=rounded, labeljust=l, pencolor="#AEB6BE", fontname="Sans-Serif", fontsize="12", bgcolor="#E5F5FD"];
        consumer [label=Consumer, shape=none, height="2", image="resources/aws/compute/ec2.png"];
    }
    mysql [label=Mysql, shape=none, height="2", image="resources/onprem/database/mysql.png"];
    kafka -> consumer [style=bold, color=brown];
    consumer -> mysql [style=bold, color=darkgreen, xlabel=WRITE];
}
```

### Generate PNG file

Using Docker

```bash
vendor/bin/dac --root=/dot/vendor/nddcoder/diagram-as-code demo.php | docker run --rm -i -v $(pwd):/dot nshine/dot > demo.png
```

Use `dot` command from `graphviz`.

```bash
vendor/bin/dac demo.php | dot -Tpng > demo.png
```

### PNG Output

![Demo Diagram As Code](examples/output/00.png)

## Sample

* [examples/00-readme.php](examples/00-readme.php): example from README
* [examples/01-more-complex.php](examples/01-more-complex.php): more complex example
