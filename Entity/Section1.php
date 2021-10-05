<?php
namespace Revision\Entity;

class Section1 {

    private ?int $id;
    private ?string $image;
    private ?string $name;
    private ?string $text;
    private ?string $title1;
    private ?string $title2;
    private ?string $title3;

    public function __construct(int $id = null, string $image = null, string $name = null, string $text = null, string $title1 = null,
                                string $title2 = null, string $title3 = null) {
        $this->id = $id;
        $this->image = $image;
        $this->name = $name;
        $this->text = $text;
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
    public function getImage(): ?string {
        return $this->image;
    }

    /**
     * @param string|null $image
     */
    public function setImage(?string $image): void {
        $this->image = $image;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * @param string|null $text
     */
    public function setText(?string $text): void {
        $this->text = $text;
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