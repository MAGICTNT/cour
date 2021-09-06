<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass= "App\Repository\UsersRepository") 
 */
class Users
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDUSER", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="LOGINUSER", type="string", length=100, nullable=false, options={"fixed"=true})
     */
    private $loginuser;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSUSER", type="string", length=100, nullable=false)
     */
    private $passuser;

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function getLoginuser(): ?string
    {
        return $this->loginuser;
    }

    public function setLoginuser(string $loginuser): self
    {
        $this->loginuser = $loginuser;

        return $this;
    }

    public function getPassuser(): ?string
    {
        return $this->passuser;
    }

    public function setPassuser(string $passuser): self
    {
        $this->passuser = $passuser;

        return $this;
    }


}
