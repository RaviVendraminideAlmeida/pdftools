<?php

namespace Domain\Features;

include '../../config/db.php';

use Config\Connection;
use Domain\Features\Models\Feature;

class FeatureService
{


    private $connection = new Connection();

    private function findAllFeatures(){

        $sql = '    SELECT * FROM features      ';

        $dbh = $this->connection->getPDO(); 

        $rs = $dbh->query($sql);

        $features = [];

        foreach($rs as $feature){

            $feature = new Feature();

            $feature->setId();

            array_push($features, )


        }


        

    }
}

