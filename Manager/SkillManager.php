<?php
namespace Revision\Manager;

use Revision\Classes\DB;
use Revision\Entity\Skill;

class SkillManager {

    /**
     * Return a skill list.
     * @return array
     */
    public function getSkill(): array {
        $skill = [];
        $request = DB::getInstance()->prepare("SELECT * FROM skill");
        $request->execute();
        $skill_response = $request->fetchAll();

        if($skill_response) {
            foreach($skill_response as $data) {
                $skill[] = new Skill($data['id'], $data['skill']);
            }
        }
        return $skill;
    }
}