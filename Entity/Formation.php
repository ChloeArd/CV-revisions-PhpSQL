<?php
namespace Revision\Entity;

class Formation {

    private int $id;
    private int $endDate;
    private string $formation;

    public function __construct(int $id = null, int $endDate = null, string $formation = null) {
        $this->id = $id;
        $this->endDate = $endDate;
        $this->formation = $formation;
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
     * @return int|null
     */
    public function getEndDate(): ?int {
        return $this->endDate;
    }

    /**
     * @param int|null $endDate
     */
    public function setEndDate(?int $endDate): void {
        $this->endDate = $endDate;
    }

    /**
     * @return string|null
     */
    public function getFormation(): ?string {
        return $this->formation;
    }

    /**
     * @param string|null $formation
     */
    public function setFormation(?string $formation): void {
        $this->formation = $formation;
    }
}