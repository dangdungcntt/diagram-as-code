<?php

namespace Nddcoder\Dac\Diagram\Azure\Integration;

use Nddcoder\Dac\Diagram\Azure\Azure;

class ServiceCatalogManagedApplicationDefinitions extends Azure
{
    public function getImage()
    {
        return 'resources/azure/integration/service-catalog-managed-application-definitions.png';
    }
}
