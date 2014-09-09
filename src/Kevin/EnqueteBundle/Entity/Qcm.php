<?php

namespace Kevin\EnqueteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Qcm
 *
 * @ORM\Table(name="qcm", indexes={@ORM\Index(name="fk_qcm_question1_idx", columns={"question_id_question"})})
 * @ORM\Entity
 */
class Qcm
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_qcm", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQcm;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=128, nullable=false)
     */
    private $libelle;

    /**
     * @var \Question
     *
     * @ORM\ManyToOne(targetEntity="Question")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="question_id_question", referencedColumnName="id_question")
     * })
     */
    private $questionQuestion;



    /**
     * Get idQcm
     *
     * @return integer 
     */
    public function getIdQcm()
    {
        return $this->idQcm;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Qcm
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set questionQuestion
     *
     * @param \Kevin\EnqueteBundle\Entity\Question $questionQuestion
     * @return Qcm
     */
    public function setQuestionQuestion(\Kevin\EnqueteBundle\Entity\Question $questionQuestion = null)
    {
        $this->questionQuestion = $questionQuestion;

        return $this;
    }

    /**
     * Get questionQuestion
     *
     * @return \Kevin\EnqueteBundle\Entity\Question 
     */
    public function getQuestionQuestion()
    {
        return $this->questionQuestion;
    }
}
