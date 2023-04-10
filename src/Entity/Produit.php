<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[ORM\Table(name: 'ts_produits')]
#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // autre exemple : #[ORM\Column(type: Types::TEXT, nullable: true, options: ['default' => null])]
    /*
    #[ORM\Column(
        type: Types::INTEGER,
        nullable: true,
        options: ['default' => null, 'comment' => 'entre 0 et 5'],
    )]
     */
    #[ORM\Column(type: Types::STRING, length: 255)]
    private ?string $libelle = null;

    #[ORM\Column(type: Types::INTEGER, nullable: false)]
    private ?int $prix = null;

    public function __construct()
    {
        $this->prix = false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }
}
