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
        $section = [];
        $request = DB::getInstance()->prepare("SELECT * FROM section2");
        $request->execute();
        $section_response = $request->fetchAll();

        if($section_response) {
            foreach($section_response as $data) {
                $section[] = new Section2($data['id'], $data['name'], $data['profile'], $data['title1'], $data['title2'], $data['title3']);
            }
        }
        return $section;
    }
}