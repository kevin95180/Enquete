<?php

namespace Kevin\EnqueteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeQuestion
 *
 * @ORM\Table(name="type_question")
 * @ORM\Entity
 */
class TypeQuestion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_question", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=128, nullable=false)
     */
    private $libelle;


}
