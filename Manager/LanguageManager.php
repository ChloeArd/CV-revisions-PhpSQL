<?php
namespace Revision\Manager;

use Revision\Classes\DB;
use Revision\Entity\Language;

class LanguageManager {

    /**
     * Return a language list.
     * @return array
     */
    public function getLanguages(): array {
        $language = [];
        $request = DB::getInstance()->prepare("SELECT * FROM languages");
        $request->execute();
        $languages_response = $request->fetchAll();

        if($languages_response) {
            foreach($languages_response as $data) {
                $language[] = new Language($data['id'], $data['language'], $data['pourcentage']);
            }
        }
        return $language;
    }
}