<?php
/**
 * Created by PhpStorm.
 * User: or_os
 * Date: 23.11.2017
 * Time: 13:45
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\JoinColumn;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as JMS;

/**
 * @ORM\Entity
 * @ORM\Table(name="organisations")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrganisationsRepository")
 * @JMS\ExclusionPolicy("none")
 */
class Organisations
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string")
     */
    private $CompanyName;

     /**
     * @ORM\Column(type="string")
     */
    private $CompanyStatus;

    /**
     * @ORM\Column(type="string")
     */
    private $EDRPOU;

    /**
     * @ORM\Column(type="string")
     */
    private $email;

    /**
     * @ORM\Column(type="string")
     */
    private $phone;

    /**
     * @ORM\Column(type="integer")
     */
    private $activityId;

    /**
     * @ORM\Column(type="string")
     */
    private $WebPage;




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
     * Set companyName
     *
     * @param string $companyName
     *
     * @return Organisations
     */
    public function setCompanyName($companyName)
    {
        $this->CompanyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }



    /**
     * Set companyStatus
     *
     * @param string $companyStatus
     *
     * @return Organisations
     */
    public function setCompanyStatus($companyStatus)
    {
        $this->CompanyStatus = $companyStatus;

        return $this;
    }

    /**
     * Get companyStatus
     *
     * @return string
     */
    public function getCompanyStatus()
    {
        return $this->CompanyStatus;
    }

    /**
     * Set eDRPOU
     *
     * @param integer $eDRPOU
     *
     * @return Organisations
     */
    public function setEDRPOU($eDRPOU)
    {
        $this->EDRPOU = $eDRPOU;

        return $this;
    }

    /**
     * Get eDRPOU
     *
     * @return integer
     */
    public function getEDRPOU()
    {
        return $this->EDRPOU;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Organisations
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Organisations
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set activityId
     *
     * @param integer $activityId
     *
     * @return Organisations
     */
    public function setActivityId($activityId)
    {
        $this->activityId = $activityId;

        return $this;
    }

    /**
     * Get activityId
     *
     * @return integer
     */
    public function getActivityId()
    {
        return $this->activityId;
    }

    /**
     * Set webPage
     *
     * @param string $webPage
     *
     * @return Organisations
     */
    public function setWebPage($webPage)
    {
        $this->WebPage = $webPage;

        return $this;
    }

    /**
     * Get webPage
     *
     * @return string
     */
    public function getWebPage()
    {
        return $this->WebPage;
    }

}
