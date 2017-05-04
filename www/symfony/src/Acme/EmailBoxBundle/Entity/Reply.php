<?php

namespace Acme\EmailBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reply
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Reply
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
     * @ORM\Column(name="mailFrom", type="string", length=255)
     */
    private $mailFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="mailTo", type="string", length=255)
     */
    private $mailTo;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="reply", type="string", length=255)
     */
    private $reply;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="replyDate", type="datetime")
     */
    private $replyDate;

    /**
     * @ORM\ManyToOne(targetEntity="Emails", inversedBy="replys")
     * @ORM\JoinColumn(name="email_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $emailId;

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
     * Set mailFrom
     *
     * @param string $mailFrom
     *
     * @return Reply
     */
    public function setMailFrom($mailFrom)
    {
        $this->mailFrom = $mailFrom;

        return $this;
    }

    /**
     * Get mailFrom
     *
     * @return string
     */
    public function getMailFrom()
    {
        return $this->mailFrom;
    }

    /**
     * Set mailTo
     *
     * @param string $mailTo
     *
     * @return Reply
     */
    public function setMailTo($mailTo)
    {
        $this->mailTo = $mailTo;

        return $this;
    }

    /**
     * Get mailTo
     *
     * @return string
     */
    public function getMailTo()
    {
        return $this->mailTo;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return Reply
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
     * Set reply
     *
     * @param string $reply
     *
     * @return Reply
     */
    public function setReply($reply)
    {
        $this->reply = $reply;

        return $this;
    }

    /**
     * Get reply
     *
     * @return string
     */
    public function getReply()
    {
        return $this->reply;
    }

    /**
     * Set replyDate
     *
     * @param \DateTime $replyDate
     *
     * @return Reply
     */
    public function setReplyDate($replyDate)
    {
        $this->replyDate = $replyDate;

        return $this;
    }

    /**
     * Get replyDate
     *
     * @return \DateTime
     */
    public function getReplyDate()
    {
        return $this->replyDate;
    }

    /**
     * Set emails
     *
     * @param \Acme\EmailBoxBundle\Entity\Emails $emails
     *
     * @return Reply
     */
    public function setEmailId(\Acme\EmailBoxBundle\Entity\Emails $emailId = null)
    {
        $this->emailId = $emailId;

        return $this;
    }

    /**
     * Get emails
     *
     * @return \Acme\EmailBoxBundle\Entity\Emails
     */
    public function getEmailId()
    {
        return $this->emailId;
    }
}
