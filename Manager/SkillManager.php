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
        $users = [];
        $request = DB::getInstance()->prepare("SELECT * FROM skill");
        $request->execute();
        $users_response = $request->fetchAll();

        if($users_response) {
            foreach($users_response as $data) {
                $users[] = new Skill($data['id'], $data['skill']);
            }
        }
        return $users;
    }
}