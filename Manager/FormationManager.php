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
        $users = [];
        $request = DB::getInstance()->prepare("SELECT * FROM formation");
        $request->execute();
        $users_response = $request->fetchAll();

        if($users_response) {
            foreach($users_response as $data) {
                $users[] = new Formation($data['id'], $data['endDate'], $data['formation']);
            }
        }
        return $users;
    }
}