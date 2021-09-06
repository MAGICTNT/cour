<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecteurActivite
 *
 * @ORM\Table(name="secteur_activite")
 * @ORM\Entity(repositoryClass= "App\Repository\SecteurActiviteRepository") 
 */
class SecteurActivite
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDSECT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsect;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTIVITE", type="string", length=25, nullable=false, options={"fixed"=true})
     */
    private $activite;

    public function getIdsect(): ?int
    {
        return $this->idsect;
    }

    public function getActivite(): ?string
    {
        return $this->activite;
    }

    public function setActivite(string $activite): self
    {
        $this->activite = $activite;

        return $this;
    }


}
