<?php

namespace Revision\Manager;

use Revision\Classes\DB;
use Revision\Entity\Formation;

class FormationManager {

    /**
     * Return a formation list.
     * @return array
     */
    public function getFormation(): array {
        $formation = [];
        $request = DB::getInstance()->prepare("SELECT * FROM formation");
        $request->execute();
        $formation_response = $request->fetchAll();

        if($formation_response) {
            foreach($formation_response as $data) {
                $formation[] = new Formation($data['id'], $data['endDate'], $data['formation']);
            }
        }
        return $formation;
    }
}