<?php

namespace Kevin\EnqueteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question", indexes={@ORM\Index(name="fk_question_type_question1_idx", columns={"type_question_id_type_question"}), @ORM\Index(name="fk_question_enquete1_idx", columns={"enquete_id_enquete"})})
 * @ORM\Entity
 */
class Question
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_question", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=512, nullable=false)
     */
    private $libelle;

    /**
     * @var \TypeQuestion
     *
     * @ORM\ManyToOne(targetEntity="TypeQuestion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_question_id_type_question", referencedColumnName="id_type_question")
     * })
     */
    private $typeQuestionTypeQuestion;

    /**
     * @var \Enquete
     *
     * @ORM\ManyToOne(targetEntity="Enquete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enquete_id_enquete", referencedColumnName="id_enquete")
     * })
     */
    private $enqueteEnquete;


}
