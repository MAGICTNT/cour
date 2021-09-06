<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Projets
 *
 * @ORM\Table(name="projets")
 * @ORM\Entity(repositoryClass= "App\Repository\ProjetsRepository") 
 */
class Projets
{
    /**
     * @var int
     *
     * @ORM\Column(name="CODEPROJET", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeprojet;

    /**
     * @var string
     *
     * @ORM\Column(name="ABREGEPROJET", type="string", length=10, nullable=false, options={"fixed"=true})
     */
    private $abregeprojet;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMPROJET", type="string", length=32, nullable=false, options={"fixed"=true})
     */
    private $nomprojet;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPEPROJET", type="string", length=25, nullable=false, options={"fixed"=true})
     */
    private $typeprojet;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Clients", mappedBy="codeprojet")
     */
    private $idclient;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idclient = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getCodeprojet(): ?int
    {
        return $this->codeprojet;
    }

    public function getAbregeprojet(): ?string
    {
        return $this->abregeprojet;
    }

    public function setAbregeprojet(string $abregeprojet): self
    {
        $this->abregeprojet = $abregeprojet;

        return $this;
    }

    public function getNomprojet(): ?string
    {
        return $this->nomprojet;
    }

    public function setNomprojet(string $nomprojet): self
    {
        $this->nomprojet = $nomprojet;

        return $this;
    }

    public function getTypeprojet(): ?string
    {
        return $this->typeprojet;
    }

    public function setTypeprojet(string $typeprojet): self
    {
        $this->typeprojet = $typeprojet;

        return $this;
    }

    /**
     * @return Collection|Clients[]
     */
    public function getIdclient(): Collection
    {
        return $this->idclient;
    }

    public function addIdclient(Clients $idclient): self
    {
        if (!$this->idclient->contains($idclient)) {
            $this->idclient[] = $idclient;
            $idclient->addCodeprojet($this);
        }

        return $this;
    }

    public function removeIdclient(Clients $idclient): self
    {
        if ($this->idclient->removeElement($idclient)) {
            $idclient->removeCodeprojet($this);
        }

        return $this;
    }

}
