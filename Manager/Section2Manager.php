<?php
namespace Revision\Manager;

use Revision\Classes\DB;
use Revision\Entity\Section2;

class Section2Manager {

    /**
     * Return all informations in the section2.
     * @return array
     */
    public function getSection(): array {
        $users = [];
        $request = DB::getInstance()->prepare("SELECT * FROM section2");
        $request->execute();
        $users_response = $request->fetchAll();

        if($users_response) {
            foreach($users_response as $data) {
                $users[] = new Section2($data['id'], $data['profile'], $data['title1'], $data['title2'], $data['title3']);
            }
        }
        return $users;
    }
}