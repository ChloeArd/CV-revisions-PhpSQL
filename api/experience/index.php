<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Entity/Experience.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Manager/ExperienceManager.php';

use Revision\Manager\ExperienceManager;

header('Content-Type: application/json');

$requestType = $_SERVER['REQUEST_METHOD'];
$manager = new ExperienceManager();

switch ($requestType) {
    case 'GET':
        echo getExperience($manager);
        break;
    default:
        break;
}

/**
 * Return the Experiences
 * @param ExperienceManager $manager
 * @return false|string
 */
function getExperience(ExperienceManager $manager): string {
    $response = [];
    $data = $manager->getExperience();
    foreach ($data as $experience) {
        $response[] = [
            'id' => $experience->getId(),
            'startDate' => $experience->getStartDate(),
            'endDate' => $experience->getEndDate(),
            'experience' => $experience->getExperience()
        ];
    }
    return json_encode($response);
}