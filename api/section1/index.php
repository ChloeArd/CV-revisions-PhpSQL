<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Entity/Section1.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Manager/Section1Manager.php';

use Revision\Manager\Section1Manager;

header('Content-Type: application/json');

$requestType = $_SERVER['REQUEST_METHOD'];
$manager = new Section1Manager();

switch ($requestType) {
    case 'GET':
        echo getSection($manager);
        break;
    default:
        break;
}

/**
 * Return the section1.
 * @param Section1Manager $manager
 * @return false|string
 */
function getSection(Section1Manager $manager): string {
    $response = [];
    $data = $manager->getSection();
    foreach ($data as $section) {
        $response[] = [
            'id' => $section->getId(),
            'image' => $section->getImage(),
            'name' => $section->getName(),
            'text' => $section->getText(),
            'title1' => $section->getTitle1(),
            'title2' => $section->getTitle2(),
            'title3' => $section->getTitle3()
        ];
    }
    return json_encode($response);
}