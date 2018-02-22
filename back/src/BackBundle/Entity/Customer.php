<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * customer
 *
 * @ORM\Table(name="customer")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\CustomerRepository")
 */
class Customer
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="categories", type="string", length=255)
     */
    private $categories;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="adress2", type="string", length=255)
     */
    private $adress2;

    /**
     * @var int
     *
     * @ORM\Column(name="postalCode", type="integer")
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var int
     *
     * @ORM\Column(name="phoneNumber", type="integer")
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="string", length=255)
     */
    private $presentation;

    /**
     * @var string
     *
     * @ORM\Column(name="expertise", type="string", length=255)
     */
    private $expertise;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=255)
     */
    private $notes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creationDate", type="datetime")
     */
    private $creationDate;

    /**
     * @var int
     *
     * @ORM\Column(name="staffNumber", type="integer")
     */
    private $staffNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="revenue", type="integer")
     */
    private $revenue;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255)
     */
    private $website;

    /**
     * @var int
     *
     * @ORM\Column(name="tvaNumber", type="integer")
     */
    private $tvaNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="numeroDuns", type="integer")
     */
    private $numeroDuns;

    /**
     * @var string
     *
     * @ORM\Column(name="admin", type="string", length=255)
     */
    private $admin;

    /**
     * @ORM\ManyToOne(targetEntity="BackBundle\Entity\CategoryAwards")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categoryAwards;

    /**
     * @ORM\ManyToMany(targetEntity="BackBundle\Entity\Agency", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $agency;


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
     * Set name
     *
     * @param string $name
     *
     * @return customer
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return customer
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return customer
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set ctegories
     *
     * @param string $ctegories
     *
     * @return customer
     */
    public function setCtegories($ctegories)
    {
        $this->ctegories = $ctegories;

        return $this;
    }

    /**
     * Get ctegories
     *
     * @return string
     */
    public function getCtegories()
    {
        return $this->ctegories;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return customer
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return customer
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set adress2
     *
     * @param string $adress2
     *
     * @return customer
     */
    public function setAdress2($adress2)
    {
        $this->adress2 = $adress2;

        return $this;
    }

    /**
     * Get adress2
     *
     * @return string
     */
    public function getAdress2()
    {
        return $this->adress2;
    }

    /**
     * Set postalCode
     *
     * @param integer $postalCode
     *
     * @return customer
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return int
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return customer
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set phoneNumber
     *
     * @param integer $phoneNumber
     *
     * @return customer
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return int
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return customer
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     *
     * @return customer
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return string
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set expertise
     *
     * @param string $expertise
     *
     * @return customer
     */
    public function setExpertise($expertise)
    {
        $this->expertise = $expertise;

        return $this;
    }

    /**
     * Get expertise
     *
     * @return string
     */
    public function getExpertise()
    {
        return $this->expertise;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return customer
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return customer
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set staffNumber
     *
     * @param integer $staffNumber
     *
     * @return customer
     */
    public function setStaffNumber($staffNumber)
    {
        $this->staffNumber = $staffNumber;

        return $this;
    }

    /**
     * Get staffNumber
     *
     * @return int
     */
    public function getStaffNumber()
    {
        return $this->staffNumber;
    }

    /**
     * Set revenue
     *
     * @param integer $revenue
     *
     * @return customer
     */
    public function setRevenue($revenue)
    {
        $this->revenue = $revenue;

        return $this;
    }

    /**
     * Get revenue
     *
     * @return int
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return customer
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set tvaNumber
     *
     * @param integer $tvaNumber
     *
     * @return customer
     */
    public function setTvaNumber($tvaNumber)
    {
        $this->tvaNumber = $tvaNumber;

        return $this;
    }

    /**
     * Get tvaNumber
     *
     * @return int
     */
    public function getTvaNumber()
    {
        return $this->tvaNumber;
    }

    /**
     * Set numeroDuns
     *
     * @param integer $numeroDuns
     *
     * @return customer
     */
    public function setNumeroDuns($numeroDuns)
    {
        $this->numeroDuns = $numeroDuns;

        return $this;
    }

    /**
     * Get numeroDuns
     *
     * @return int
     */
    public function getNumeroDuns()
    {
        return $this->numeroDuns;
    }

    /**
     * Set admin
     *
     * @param string $admin
     *
     * @return customer
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return string
     */
    public function getAdmin()
    {
        return $this->admin;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->agency = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set categories
     *
     * @param string $categories
     *
     * @return Customer
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return string
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set categoryAwards
     *
     * @param \BackBundle\Entity\CategoryAwards $categoryAwards
     *
     * @return Customer
     */
    public function setCategoryAwards(\BackBundle\Entity\CategoryAwards $categoryAwards)
    {
        $this->categoryAwards = $categoryAwards;

        return $this;
    }

    /**
     * Get categoryAwards
     *
     * @return \BackBundle\Entity\CategoryAwards
     */
    public function getCategoryAwards()
    {
        return $this->categoryAwards;
    }

    /**
     * Add agency
     *
     * @param \BackBundle\Entity\Agency $agency
     *
     * @return Customer
     */
    public function addAgency(\BackBundle\Entity\Agency $agency)
    {
        $this->agency[] = $agency;

        return $this;
    }

    /**
     * Remove agency
     *
     * @param \BackBundle\Entity\Agency $agency
     */
    public function removeAgency(\BackBundle\Entity\Agency $agency)
    {
        $this->agency->removeElement($agency);
    }

    /**
     * Get agency
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAgency()
    {
        return $this->agency;
    }
}
