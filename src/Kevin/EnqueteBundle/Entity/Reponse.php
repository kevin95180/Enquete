<?php

namespace Kevin\EnqueteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse", indexes={@ORM\Index(name="fk_reponse_question1_idx", columns={"question_id_question"})})
 * @ORM\Entity
 */
class Reponse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_reponse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReponse;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse", type="string", length=255, nullable=false)
     */
    private $reponse;

    /**
     * @var string
     *
     * @ORM\Column(name="uid", type="string", length=50, nullable=false)
     */
    private $uid;

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
     * Get idReponse
     *
     * @return integer 
     */
    public function getIdReponse()
    {
        return $this->idReponse;
    }

    /**
     * Set reponse
     *
     * @param string $reponse
     * @return Reponse
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return string 
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * Set uid
     *
     * @param string $uid
     * @return Reponse
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return string 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set questionQuestion
     *
     * @param \Kevin\EnqueteBundle\Entity\Question $questionQuestion
     * @return Reponse
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
