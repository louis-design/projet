<?php

namespace App\Entity;

use App\Repository\AccesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AccesRepository::class)
 */
class Acces
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class, inversedBy="acces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateurId;

    /**
     * @ORM\ManyToOne(targetEntity=Autorisation::class, inversedBy="acces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $autorisationId;

    /**
     * @ORM\ManyToOne(targetEntity=Document::class, inversedBy="acces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $documentID;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateurId(): ?Utilisateur
    {
        return $this->utilisateurId;
    }

    public function setUtilisateurId(?Utilisateur $utilisateurId): self
    {
        $this->utilisateurId = $utilisateurId;

        return $this;
    }

    public function getAutorisationId(): ?Autorisation
    {
        return $this->autorisationId;
    }

    public function setAutorisationId(?Autorisation $autorisationId): self
    {
        $this->autorisationId = $autorisationId;

        return $this;
    }

    public function getDocumentID(): ?Document
    {
        return $this->documentID;
    }

    public function setDocumentID(?Document $documentID): self
    {
        $this->documentID = $documentID;

        return $this;
    }
}
