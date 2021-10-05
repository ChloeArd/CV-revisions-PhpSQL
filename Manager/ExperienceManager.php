<?php
namespace Revision\Manager;

use Revision\Classes\DB;
use Revision\Entity\Experience;

class ExperienceManager {

    /**
     * Return a Experience list.
     * @return array
     */
    public function getExperience(): array {
        $users = [];
        $request = DB::getInstance()->prepare("SELECT * FROM experience");
        $request->execute();
        $users_response = $request->fetchAll();

        if($users_response) {
            foreach($users_response as $data) {
                $users[] = new Experience($data['id'], $data['startData'], $data['endDate'], $data['experience']);
            }
        }
        return $users;
    }
}