<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Entity/Section2.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Manager/Section2Manager.php';

use Revision\Manager\Section2Manager;

header('Content-Type: application/json');

$requestType = $_SERVER['REQUEST_METHOD'];
$manager = new Section2Manager();

switch ($requestType) {
    case 'GET':
        echo getSection($manager);
        break;
    default:
        break;
}

/**
 * Return the section2.
 * @param Section2Manager $manager
 * @return false|string
 */
function getSection(Section2Manager $manager): string {
    $response = [];
    $data = $manager->getSection();
    foreach ($data as $section) {
        $response[] = [
            'id' => $section->getId(),
            'name' => $section->getName(),
            'profile' => $section->getProfile(),
            'title1' => $section->getTitle1(),
            'title2' => $section->getTitle2(),
            'title3' => $section->getTitle3()
        ];
    }
    return json_encode($response);
}