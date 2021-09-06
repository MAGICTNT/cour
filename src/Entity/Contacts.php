<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contacts
 *
 * @ORM\Table(name="contacts", indexes={@ORM\Index(name="FK_TRAVAILLERPOUR", columns={"IDCLIENT"}), @ORM\Index(name="FK_ASSOCIATION_5", columns={"IDFONC"})})
 * @ORM\Entity(repositoryClass= "App\Repository\ContactsRepository") 
 */
class Contacts
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDCONTACT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontact;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMCONTACT", type="string", length=32, nullable=false, options={"fixed"=true})
     */
    private $nomcontact;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOMCONTACT", type="string", length=32, nullable=false, options={"fixed"=true})
     */
    private $prenomcontact;

    /**
     * @var string
     *
     * @ORM\Column(name="TELCONTACT", type="string", length=15, nullable=false, options={"fixed"=true})
     */
    private $telcontact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMAILCONTACT", type="string", length=50, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $emailcontact = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PHOTO", type="string", length=255, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $photo = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="DUREE", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $duree = NULL;

    /**
     * @var \Fonction
     *
     * @ORM\ManyToOne(targetEntity="Fonction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDFONC", referencedColumnName="IDFONC")
     * })
     */
    private $idfonc;

    /**
     * @var \Clients
     *
     * @ORM\ManyToOne(targetEntity="Clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDCLIENT", referencedColumnName="IDCLIENT")
     * })
     */
    private $idclient;

    public function getIdcontact(): ?int
    {
        return $this->idcontact;
    }

    public function getNomcontact(): ?string
    {
        return $this->nomcontact;
    }

    public function setNomcontact(string $nomcontact): self
    {
        $this->nomcontact = $nomcontact;

        return $this;
    }

    public function getPrenomcontact(): ?string
    {
        return $this->prenomcontact;
    }

    public function setPrenomcontact(string $prenomcontact): self
    {
        $this->prenomcontact = $prenomcontact;

        return $this;
    }

    public function getTelcontact(): ?string
    {
        return $this->telcontact;
    }

    public function setTelcontact(string $telcontact): self
    {
        $this->telcontact = $telcontact;

        return $this;
    }

    public function getEmailcontact(): ?string
    {
        return $this->emailcontact;
    }

    public function setEmailcontact(?string $emailcontact): self
    {
        $this->emailcontact = $emailcontact;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(?int $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getIdfonc(): ?Fonction
    {
        return $this->idfonc;
    }

    public function setIdfonc(?Fonction $idfonc): self
    {
        $this->idfonc = $idfonc;

        return $this;
    }

    public function getIdclient(): ?Clients
    {
        return $this->idclient;
    }

    public function setIdclient(?Clients $idclient): self
    {
        $this->idclient = $idclient;

        return $this;
    }


}
