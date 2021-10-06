<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Entity/Formation.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Manager/FormationManager.php';

use Revision\Manager\FormationManager;

header('Content-Type: application/json');

$requestType = $_SERVER['REQUEST_METHOD'];
$manager = new FormationManager();

switch ($requestType) {
    case 'GET':
        echo getFormation($manager);
        break;
    default:
        break;
}

/**
 * Return the Formations
 * @param FormationManager $manager
 * @return false|string
 */
function getFormation(FormationManager $manager): string {
    $response = [];
    $data = $manager->getFormation();
    foreach ($data as $formation) {
        $response[] = [
            'id' => $formation->getId(),
            'endDate' => $formation->getEndDate(),
            'formation' => $formation->getFormation()
        ];
    }
    return json_encode($response);
}