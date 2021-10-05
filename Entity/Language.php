<?php
namespace Revision\Entity;

class Language {

    private int $id;
    private string $language;
    private string $pourcentage;

    public function __construct(int $id = null, int $language = null, string $pourcentage = null) {
        $this->id = $id;
        $this->language = $language;
        $this->pourcentage = $pourcentage;
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
     * @return int|string|null
     */
    public function getLanguage() {
        return $this->language;
    }

    /**
     * @param int|string|null $language
     */
    public function setLanguage($language): void {
        $this->language = $language;
    }

    /**
     * @return string|null
     */
    public function getPourcentage(): ?string {
        return $this->pourcentage;
    }

    /**
     * @param string|null $pourcentage
     */
    public function setPourcentage(?string $pourcentage): void {
        $this->pourcentage = $pourcentage;
    }
}