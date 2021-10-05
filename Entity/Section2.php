<?php
namespace Revision\Entity;

class Section2 {

    private ?int $id;
    private ?string $profile;
    private ?string $title1;
    private ?string $title2;
    private ?string $title3;

    public function __construct(int $id = null, string $profile = null, string $title1 = null, string $title2 = null, string $title3 = null) {
        $this->id = $id;
        $this->profile = $profile;
        $this->title1 = $title1;
        $this->title2 = $title2;
        $this->title3 = $title3;
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
    public function getProfile(): ?string {
        return $this->profile;
    }

    /**
     * @param string|null $profile
     */
    public function setProfile(?string $profile): void {
        $this->profile = $profile;
    }

    /**
     * @return string|null
     */
    public function getTitle1(): ?string {
        return $this->title1;
    }

    /**
     * @param string|null $title1
     */
    public function setTitle1(?string $title1): void {
        $this->title1 = $title1;
    }

    /**
     * @return string|null
     */
    public function getTitle2(): ?string {
        return $this->title2;
    }

    /**
     * @param string|null $title2
     */
    public function setTitle2(?string $title2): void {
        $this->title2 = $title2;
    }

    /**
     * @return string|null
     */
    public function getTitle3(): ?string {
        return $this->title3;
    }

    /**
     * @param string|null $title3
     */
    public function setTitle3(?string $title3): void {
        $this->title3 = $title3;
    }
}