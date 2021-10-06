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
        $experience = [];
        $request = DB::getInstance()->prepare("SELECT * FROM experience");
        $request->execute();
        $experience_response = $request->fetchAll();

        if($experience_response) {
            foreach($experience_response as $data) {
                $experience[] = new Experience($data['id'], $data['startDate'], $data['endDate'], $data['experience']);
            }
        }
        return $experience;
    }
}