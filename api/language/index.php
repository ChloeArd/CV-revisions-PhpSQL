<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Entity/Language.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Manager/LanguageManager.php';

use Revision\Manager\LanguageManager;

header('Content-Type: application/json');

$requestType = $_SERVER['REQUEST_METHOD'];
$manager = new LanguageManager();

switch ($requestType) {
    case 'GET':
        echo getLanguage($manager);
        break;
    default:
        break;
}

/**
 * Return the languages list.
 * @param LanguageManager $manager
 * @return false|string
 */
function getLanguage(LanguageManager $manager): string {
    $response = [];
    $data = $manager->getLanguages();
    foreach ($data as $language) {
        $response[] = [
            'id' => $language->getId(),
            'language' => $language->getLanguage(),
            'pourcentage' => $language->getPourcentage()
        ];
    }
    return json_encode($response);
}