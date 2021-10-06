<?php
namespace Revision\Manager;

use Revision\Classes\DB;
use Revision\Entity\Section1;

class Section1Manager {

    /**
     * Return all informations in the section1.
     * @return array
     */
    public function getSection(): array {
        $section = [];
        $request = DB::getInstance()->prepare("SELECT * FROM section1");
        $request->execute();
        $section_response = $request->fetchAll();

        if($section_response) {
            foreach($section_response as $data) {
                $section[] = new Section1($data['id'], $data['image'], $data['name'], $data['text'], $data['title1'],
                                        $data['title2'], $data['title3']);
            }
        }
        return $section;
    }
}