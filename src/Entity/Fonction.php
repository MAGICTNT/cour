<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fonction
 *
 * @ORM\Table(name="fonction")
 * @ORM\Entity(repositoryClass= "App\Repository\FonctionRepository") 
 */
class Fonction
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDFONC", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfonc;

    /**
     * @var string
     *
     * @ORM\Column(name="FONCTION", type="string", length=25, nullable=false, options={"fixed"=true})
     */
    private $fonction;

    public function getIdfonc(): ?int
    {
        return $this->idfonc;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(string $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }


}
