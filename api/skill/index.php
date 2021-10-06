<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Entity/Skill.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Manager/SkillManager.php';

use Revision\Manager\SkillManager;

header('Content-Type: application/json');

$requestType = $_SERVER['REQUEST_METHOD'];
$manager = new SkillManager();

switch ($requestType) {
    case 'GET':
        echo getSkill($manager);
        break;
    default:
        break;
}

/**
 * Return the skill list.
 * @param SkillManager $manager
 * @return false|string
 */
function getSkill(SkillManager $manager): string {
    $response = [];
    $data = $manager->getSkill();
    foreach ($data as $skill) {
        $response[] = [
            'id' => $skill->getId(),
            'skill' => $skill->getSkill()
        ];
    }
    return json_encode($response);
}