<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Entity/Skill.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Manager/SkillManager.php';


use Revision\Entity\Skill;
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
    foreach ($data as $user) {
        $response[] = [
            'id' => $user->getId(),
            'skill' => $user->getSkill()
        ];
    }
    return json_encode($response);
}