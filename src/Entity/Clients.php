<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Clients
 *
 * @ORM\Table(name="clients", indexes={@ORM\Index(name="FK_AVOIRPOURSECTEUR", columns={"IDSECT"})})
 * @ORM\Entity(repositoryClass= "App\Repository\ClientsRepository") 
 */
class Clients
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDCLIENT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclient;

    /**
     * @var string
     *
     * @ORM\Column(name="RAISONSOCIALE", type="string", length=50, nullable=false, options={"fixed"=true})
     */
    private $raisonsociale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRESSECLIENT", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $adresseclient = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CODEPOSTALCLIENT", type="string", length=5, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $codepostalclient = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="VILLECLIENT", type="string", length=25, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $villeclient = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="CA", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $ca = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="EFFECTIF", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $effectif = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TELEPHONECLIENT", type="string", length=15, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $telephoneclient = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="TYPECLIENT", type="string", length=10, nullable=false, options={"fixed"=true})
     */
    private $typeclient;

    /**
     * @var string
     *
     * @ORM\Column(name="NATURECLIENT", type="string", length=15, nullable=false, options={"fixed"=true})
     */
    private $natureclient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="COMMENTAIRECLIENT", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $commentaireclient = 'NULL';

    /**
     * @var \SecteurActivite
     *
     * @ORM\ManyToOne(targetEntity="SecteurActivite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDSECT", referencedColumnName="IDSECT")
     * })
     */
    private $idsect;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Projets", inversedBy="idclient")
     * @ORM\JoinTable(name="commander",
     *   joinColumns={
     *     @ORM\JoinColumn(name="IDCLIENT", referencedColumnName="IDCLIENT")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="CODEPROJET", referencedColumnName="CODEPROJET")
     *   }
     * )
     */
    private $codeprojet;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codeprojet = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdclient(): ?int
    {
        return $this->idclient;
    }

    public function getRaisonsociale(): ?string
    {
        return $this->raisonsociale;
    }

    public function setRaisonsociale(string $raisonsociale): self
    {
        $this->raisonsociale = $raisonsociale;

        return $this;
    }

    public function getAdresseclient(): ?string
    {
        return $this->adresseclient;
    }

    public function setAdresseclient(?string $adresseclient): self
    {
        $this->adresseclient = $adresseclient;

        return $this;
    }

    public function getCodepostalclient(): ?string
    {
        return $this->codepostalclient;
    }

    public function setCodepostalclient(?string $codepostalclient): self
    {
        $this->codepostalclient = $codepostalclient;

        return $this;
    }

    public function getVilleclient(): ?string
    {
        return $this->villeclient;
    }

    public function setVilleclient(?string $villeclient): self
    {
        $this->villeclient = $villeclient;

        return $this;
    }

    public function getCa(): ?int
    {
        return $this->ca;
    }

    public function setCa(?int $ca): self
    {
        $this->ca = $ca;

        return $this;
    }

    public function getEffectif(): ?int
    {
        return $this->effectif;
    }

    public function setEffectif(?int $effectif): self
    {
        $this->effectif = $effectif;

        return $this;
    }

    public function getTelephoneclient(): ?string
    {
        return $this->telephoneclient;
    }

    public function setTelephoneclient(?string $telephoneclient): self
    {
        $this->telephoneclient = $telephoneclient;

        return $this;
    }

    public function getTypeclient(): ?string
    {
        return $this->typeclient;
    }

    public function setTypeclient(string $typeclient): self
    {
        $this->typeclient = $typeclient;

        return $this;
    }

    public function getNatureclient(): ?string
    {
        return $this->natureclient;
    }

    public function setNatureclient(string $natureclient): self
    {
        $this->natureclient = $natureclient;

        return $this;
    }

    public function getCommentaireclient(): ?string
    {
        return $this->commentaireclient;
    }

    public function setCommentaireclient(?string $commentaireclient): self
    {
        $this->commentaireclient = $commentaireclient;

        return $this;
    }

    public function getIdsect(): ?SecteurActivite
    {
        return $this->idsect;
    }

    public function setIdsect(?SecteurActivite $idsect): self
    {
        $this->idsect = $idsect;

        return $this;
    }

    /**
     * @return Collection|Projets[]
     */
    public function getCodeprojet(): Collection
    {
        return $this->codeprojet;
    }

    public function addCodeprojet(Projets $codeprojet): self
    {
        if (!$this->codeprojet->contains($codeprojet)) {
            $this->codeprojet[] = $codeprojet;
        }

        return $this;
    }

    public function removeCodeprojet(Projets $codeprojet): self
    {
        $this->codeprojet->removeElement($codeprojet);

        return $this;
    }

}
