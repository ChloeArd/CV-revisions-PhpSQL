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
        $personal = [];
        $request = DB::getInstance()->prepare("SELECT * FROM personaldata");
        $request->execute();
        $personal_response = $request->fetchAll();

        if($personal_response) {
            foreach($personal_response as $data) {
                $personal[] = new Personnaldata($data['id'], $data['title'], $data['information']);
            }
        }
        return $personal;
    }
}