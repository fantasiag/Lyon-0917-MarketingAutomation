<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SoftSupport
 *
 * @ORM\Table(name="soft_support")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SoftSupportRepository")
 */
class SoftSupport
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="isEmailSupport", type="boolean", nullable=true)
     */
    private $isEmailSupport;

    /**
     * @var bool
     *
     * @ORM\Column(name="isPhoneSupport", type="boolean", nullable=true)
     */
    private $isPhoneSupport;

    /**
     * @var bool
     *
     * @ORM\Column(name="isChatSupport", type="boolean", nullable=true)
     */
    private $isChatSupport;

    /**
     * @var bool
     *
     * @ORM\Column(name="isKnowledgeBase", type="boolean", nullable=true)
     */
    private $isKnowledgeBase;

    /**
     * @var string
     *
     * @ORM\Column(name="knowledgeBaseLanguage", type="string", length=255, nullable=true)
     */
    private $knowledgeBaseLanguage;

    /**
     * @var bool
     *
     * @ORM\Column(name="isTechnicalDocument", type="boolean", nullable=true)
     */
    private $isTechnicalDocument;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set isEmailSupport
     *
     * @param boolean $isEmailSupport
     *
     * @return SoftSupport
     */
    public function setIsEmailSupport($isEmailSupport)
    {
        $this->isEmailSupport = $isEmailSupport;

        return $this;
    }

    /**
     * Get isEmailSupport
     *
     * @return bool
     */
    public function getIsEmailSupport()
    {
        return $this->isEmailSupport;
    }

    /**
     * Set isPhoneSupport
     *
     * @param boolean $isPhoneSupport
     *
     * @return SoftSupport
     */
    public function setIsPhoneSupport($isPhoneSupport)
    {
        $this->isPhoneSupport = $isPhoneSupport;

        return $this;
    }

    /**
     * Get isPhoneSupport
     *
     * @return bool
     */
    public function getIsPhoneSupport()
    {
        return $this->isPhoneSupport;
    }

    /**
     * Set isChatSupport
     *
     * @param boolean $isChatSupport
     *
     * @return SoftSupport
     */
    public function setIsChatSupport($isChatSupport)
    {
        $this->isChatSupport = $isChatSupport;

        return $this;
    }

    /**
     * Get isChatSupport
     *
     * @return bool
     */
    public function getIsChatSupport()
    {
        return $this->isChatSupport;
    }

    /**
     * Set isKnowledgeBase
     *
     * @param boolean $isKnowledgeBase
     *
     * @return SoftSupport
     */
    public function setIsKnowledgeBase($isKnowledgeBase)
    {
        $this->isKnowledgeBase = $isKnowledgeBase;

        return $this;
    }

    /**
     * Get isKnowledgeBase
     *
     * @return bool
     */
    public function getIsKnowledgeBase()
    {
        return $this->isKnowledgeBase;
    }

    /**
     * Set knowledgeBaseLanguage
     *
     * @param string $knowledgeBaseLanguage
     *
     * @return SoftSupport
     */
    public function setKnowledgeBaseLanguage($knowledgeBaseLanguage)
    {
        $this->knowledgeBaseLanguage = $knowledgeBaseLanguage;

        return $this;
    }

    /**
     * Get knowledgeBaseLanguage
     *
     * @return string
     */
    public function getKnowledgeBaseLanguage()
    {
        return $this->knowledgeBaseLanguage;
    }

    /**
     * Set isTechnicalDocument
     *
     * @param boolean $isTechnicalDocument
     *
     * @return SoftSupport
     */
    public function setIsTechnicalDocument($isTechnicalDocument)
    {
        $this->isTechnicalDocument = $isTechnicalDocument;

        return $this;
    }

    /**
     * Get isTechnicalDocument
     *
     * @return bool
     */
    public function getIsTechnicalDocument()
    {
        return $this->isTechnicalDocument;
    }
}

