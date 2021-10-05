<?php
namespace Revision\Manager;

use Revision\Classes\DB;
use Revision\Entity\Personnaldata;

class PersonaldataManager {

    /**
     * Return a personal data list.
     * @return array
     */
    public function getPersonaldata(): array {
        $users = [];
        $request = DB::getInstance()->prepare("SELECT * FROM personaldata");
        $request->execute();
        $users_response = $request->fetchAll();

        if($users_response) {
            foreach($users_response as $data) {
                $users[] = new Personnaldata($data['id'], $data['title'], $data['information']);
            }
        }
        return $users;
    }
}