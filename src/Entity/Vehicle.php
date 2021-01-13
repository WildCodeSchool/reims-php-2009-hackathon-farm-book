<?php

namespace App\Entity;

use App\Repository\VehicleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VehicleRepository::class)
 */
class Vehicle
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $buyprice;

    /**
     * @ORM\Column(type="integer")
     */
    private $sellprice;

    /**
     * @ORM\Column(type="integer")
     */
    private $lifetime;

    /**
     * @ORM\Column(type="integer")
     */
    private $timeworkingbyyear;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getBuyprice(): ?int
    {
        return $this->buyprice;
    }

    public function setBuyprice(int $buyprice): self
    {
        $this->buyprice = $buyprice;

        return $this;
    }

    public function getSellprice(): ?int
    {
        return $this->sellprice;
    }

    public function setSellprice(int $sellprice): self
    {
        $this->sellprice = $sellprice;

        return $this;
    }

    public function getLifetime(): ?int
    {
        return $this->lifetime;
    }

    public function setLifetime(int $lifetime): self
    {
        $this->lifetime = $lifetime;

        return $this;
    }

    public function getTimeworkingbyyear(): ?int
    {
        return $this->timeworkingbyyear;
    }

    public function setTimeworkingbyyear(int $timeworkingbyyear): self
    {
        $this->timeworkingbyyear = $timeworkingbyyear;

        return $this;
    }
}
