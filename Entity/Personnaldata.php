<?php
namespace Revision\Entity;

class Personnaldata {

    private int $id;
    private string $title;
    private string $information;

    public function __construct(int $id = null, string $title = null, string $information = null) {
        $this->id = $id;
        $this->title = $title;
        $this->information = $information;
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
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getInformation(): ?string {
        return $this->information;
    }

    /**
     * @param string|null $information
     */
    public function setInformation(?string $information): void {
        $this->information = $information;
    }


}