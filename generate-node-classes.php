<?php

$abstractTemplate = file_get_contents(__DIR__.'/templates/abstract.template');
$classTemplate    = file_get_contents(__DIR__.'/templates/class.template');
$getImageTemplate = file_get_contents(__DIR__.'/templates/implement_getImage.template');

$scanFolder   = 'resources';
$outputFolder = __DIR__.'/src/Diagram';

function scan($dir)
{
    $files = scandir($dir);

    unset($files[0]);
    unset($files[1]);

    return $files;
}

function saveFile($filePath, $fileContent)
{
    if (file_exists($filePath)) {
        return;
    }

    if (!file_exists(dirname($filePath))) {
        mkdir(dirname($filePath), 0777, true);
    }

    file_put_contents($filePath, $fileContent);
}

function getClassName($image)
{
    return strtr(ucwords(strtr($image, [
            '.png' => '',
            '-'    => ' '
        ]
    )), [' ' => '']);
}

foreach (scan($scanFolder) as $abstractFolder) {
    $isAbstract        = !file_exists("$scanFolder/$abstractFolder/$abstractFolder.png");
    $abstractClassName = ucfirst($abstractFolder);
    $abstractContent   = strtr($abstractTemplate, [
        '{namespace}'   => $abstractClassName,
        '{class_name}'  => $abstractClassName,
        '{is_abstract}' => $isAbstract ? 'abstract ' : '',
        '{get_image}'   => $isAbstract ? '' : strtr($getImageTemplate,
            ['{image_path}' => "$scanFolder/$abstractFolder/$abstractFolder.png"])
    ]);

    saveFile("$outputFolder/$abstractClassName/$abstractClassName.php", $abstractContent);

    foreach (scan("$scanFolder/$abstractFolder") as $type) {
        if (strpos($type, '.png') !== false) {
            continue;
        }

        $namespaceType = ucfirst($type);

        foreach (scan("$scanFolder/$abstractFolder/$type") as $image) {

            if (strpos($image, '.png') === false) {
                $imageNamespace = ucfirst($image);

                foreach (scan("$scanFolder/$abstractFolder/$type/$image") as $img) {
                    $className = getClassName($img);

                    $classContent = strtr($classTemplate, [
                        '{namespace}'          => "$abstractClassName\\$namespaceType\\$imageNamespace",
                        '{abstract_namespace}' => "$abstractClassName\\$abstractClassName",
                        '{class_name}'         => $className,
                        '{abstract}'           => $abstractClassName,
                        '{image_path}'         => "$scanFolder/$abstractFolder/$type/$image/$img"
                    ]);

                    saveFile("$outputFolder/$abstractClassName/$namespaceType/$imageNamespace/$className.php",
                        $classContent);
                }

                continue;
            }

            $className = getClassName($image);

            $classContent = strtr($classTemplate, [
                '{namespace}'          => "$abstractClassName\\$namespaceType",
                '{abstract_namespace}' => "$abstractClassName\\$abstractClassName",
                '{class_name}'         => $className,
                '{abstract}'           => $abstractClassName,
                '{image_path}'         => "$scanFolder/$abstractFolder/$type/$image"
            ]);

            saveFile("$outputFolder/$abstractClassName/$namespaceType/$className.php", $classContent);
        }
    }
}