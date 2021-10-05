<?php
namespace Revision\Manager;

use Revision\Classes\DB;
use Revision\Entity\Language;

class LanguageManager {

    /**
     * Return a language list.
     * @return array
     */
    public function getLanguage(): array {
        $users = [];
        $request = DB::getInstance()->prepare("SELECT * FROM language ");
        $request->execute();
        $users_response = $request->fetchAll();

        if($users_response) {
            foreach($users_response as $data) {
                $users[] = new Language($data['id'], $data['language'], $data['pourcentage']);
            }
        }
        return $users;
    }
}