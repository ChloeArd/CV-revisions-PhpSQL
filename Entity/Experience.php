<?php
namespace Revision\Entity;

class Experience {

    private int $id;
    private int $startDate;
    private int $endDate;
    private string $experience;

    public function __construct(int $id = null, int $startDate = null, int $endDate = null, string $experience = null) {
        $this->id = $id;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->experience = $experience;
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
    public function getStartDate(): ?int {
        return $this->startDate;
    }

    /**
     * @param int|null $startDate
     */
    public function setStartDate(?int $startDate): void {
        $this->startDate = $startDate;
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
    public function getExperience(): ?string {
        return $this->experience;
    }

    /**
     * @param string|null $experience
     */
    public function setExperience(?string $experience): void {
        $this->experience = $experience;
    }
}