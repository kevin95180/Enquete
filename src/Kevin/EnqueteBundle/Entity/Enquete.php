<?php

namespace Kevin\EnqueteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enquete
 *
 * @ORM\Table(name="enquete", indexes={@ORM\Index(name="fk_enquete_utilisateur_idx", columns={"utilisateur_id_utilisateur"})})
 * @ORM\Entity
 */
class Enquete
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_enquete", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEnquete;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=128, nullable=false)
     */
    private $titre;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="utilisateur_id_utilisateur", referencedColumnName="id_utilisateur")
     * })
     */
    private $utilisateurUtilisateur;



    /**
     * Get idEnquete
     *
     * @return integer 
     */
    public function getIdEnquete()
    {
        return $this->idEnquete;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Enquete
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set utilisateurUtilisateur
     *
     * @param \Kevin\EnqueteBundle\Entity\Utilisateur $utilisateurUtilisateur
     * @return Enquete
     */
    public function setUtilisateurUtilisateur(\Kevin\EnqueteBundle\Entity\Utilisateur $utilisateurUtilisateur = null)
    {
        $this->utilisateurUtilisateur = $utilisateurUtilisateur;

        return $this;
    }

    /**
     * Get utilisateurUtilisateur
     *
     * @return \Kevin\EnqueteBundle\Entity\Utilisateur 
     */
    public function getUtilisateurUtilisateur()
    {
        return $this->utilisateurUtilisateur;
    }
}
