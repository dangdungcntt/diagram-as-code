<?php

use Nddcoder\Base\Cluster;
use Nddcoder\Base\Diagram;
use Nddcoder\Base\Style\Style;

require_once __DIR__ . '/vendor/autoload.php';

$diagram = Diagram::create('root', 'All available Nodes')->direction(Style::DIR_TB);

$allClasses = require(__DIR__ . '/vendor/composer/autoload_classmap.php');

$allNodes = [];

foreach (array_keys($allClasses) as $className) {
    try {
        $class = new ReflectionClass($className);
        if (!$class->isAbstract()) {
            $allNodes[$className] = $class->getShortName();
        }
    } catch (ReflectionException $e) {
    }
}

$index = 0;
$lastNode = '';
foreach (array_chunk($allNodes, 30, true) as $nodes) {
    $cluster = Cluster::create($index)->direction(Style::DIR_TB);
    $connected = false;
    foreach ($nodes as $nodeClass => $classShortName) {
        $nodeId = 'node_' . $index++;
        $cluster->append($nodeClass::create($nodeId, '_' . $classShortName, ['pad' => '1']));
        if (!$connected) {
            if (!empty($lastNode)) {
                $diagram->connect($lastNode, $nodeId);
            }

            $lastNode = $nodeId;
            $connected = true;
        }
    }
    $diagram->append($cluster);
}

echo $diagram->render();

