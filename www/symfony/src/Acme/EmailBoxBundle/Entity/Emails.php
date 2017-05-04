<?php

namespace Acme\EmailBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Emails
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Emails
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="sendFrom", type="string", length=255)
     */
    private $sendFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="sendTo", type="string", length=255)
     */
    private $sendTo;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=30)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\OneToMany(targetEntity="Reply", mappedBy="emailId")
     */
    private $replys;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->replys = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sendFrom
     *
     * @param string $sendFrom
     *
     * @return Emails
     */
    public function setSendFrom($sendFrom)
    {
        $this->sendFrom = $sendFrom;

        return $this;
    }

    /**
     * Get sendFrom
     *
     * @return string
     */
    public function getSendFrom()
    {
        return $this->sendFrom;
    }

    /**
     * Set sendTo
     *
     * @param string $sendTo
     *
     * @return Emails
     */
    public function setSendTo($sendTo)
    {
        $this->sendTo = $sendTo;

        return $this;
    }

    /**
     * Get sendTo
     *
     * @return string
     */
    public function getSendTo()
    {
        return $this->sendTo;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return Emails
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Emails
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Emails
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Emails
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Add reply
     *
     * @param \Acme\EmailBoxBundle\Entity\Reply $reply
     *
     * @return Emails
     */
    public function addReply(\Acme\EmailBoxBundle\Entity\Reply $reply)
    {
        $this->replys[] = $reply;

        return $this;
    }

    /**
     * Remove reply
     *
     * @param \Acme\EmailBoxBundle\Entity\Reply $reply
     */
    public function removeReply(\Acme\EmailBoxBundle\Entity\Reply $reply)
    {
        $this->replys->removeElement($reply);
    }

    /**
     * Get replys
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReplys()
    {
        return $this->replys;
    }
}
