<?php

namespace Domain\Features;

include '../../config/db.php';

use Config\Connection;
use Domain\Features\Models\Feature;

class FeatureService
{


    private $pdo = new Connection();

    private function findAllFeatures(){
        return null;
    }
}

