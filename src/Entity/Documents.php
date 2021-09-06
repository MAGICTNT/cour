<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documents
 *
 * @ORM\Table(name="documents", indexes={@ORM\Index(name="FK_PUBLIER", columns={"IDCONTACT"})})
 * @ORM\Entity(repositoryClass= "App\Repository\DocumentsRepository") 
 */
class Documents
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDDOC", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddoc;

    /**
     * @var string
     *
     * @ORM\Column(name="TITRE", type="string", length=255, nullable=false, options={"fixed"=true})
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RESUME", type="string", length=255, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $resume = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEEDITION", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dateedition = 'NULL';

    /**
     * @var \Contacts
     *
     * @ORM\ManyToOne(targetEntity="Contacts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDCONTACT", referencedColumnName="IDCONTACT")
     * })
     */
    private $idcontact;

    public function getIddoc(): ?int
    {
        return $this->iddoc;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(?string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getDateedition(): ?\DateTimeInterface
    {
        return $this->dateedition;
    }

    public function setDateedition(?\DateTimeInterface $dateedition): self
    {
        $this->dateedition = $dateedition;

        return $this;
    }

    public function getIdcontact(): ?Contacts
    {
        return $this->idcontact;
    }

    public function setIdcontact(?Contacts $idcontact): self
    {
        $this->idcontact = $idcontact;

        return $this;
    }


}
