<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Entity/Personnaldata.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Manager/PersonaldataManager.php';

use Revision\Manager\PersonaldataManager;

header('Content-Type: application/json');

$requestType = $_SERVER['REQUEST_METHOD'];
$manager = new PersonaldataManager();

switch ($requestType) {
    case 'GET':
        echo getPersonalData($manager);
        break;
    default:
        break;
}

/**
 * Return the skill list.
 * @param PersonaldataManager $manager
 * @return false|string
 */
function getPersonalData(PersonaldataManager $manager): string {
    $response = [];
    $data = $manager->getPersonaldata();
    foreach ($data as $personal) {
        $response[] = [
            'id' => $personal->getId(),
            'title' => $personal->getTitle(),
            'information' => $personal->getInformation()
        ];
    }
    return json_encode($response);
}