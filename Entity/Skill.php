<?php
namespace Revision\Entity;

class Skill {

    private int $id;
    private string $skill;

    public function __construct(int $id = null, string $skill = null) {
        $this->id = $id;
        $this->skill = $skill;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getSkill(): ?string {
        return $this->skill;
    }

    /**
     * @param string|null $skill
     */
    public function setSkill(?string $skill): void {
        $this->skill = $skill;
    }
}