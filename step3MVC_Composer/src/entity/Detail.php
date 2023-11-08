<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="countries_details")
 */
class Detail{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="id_details_countries")
     */
    private $id_details_countries;

    /**
     * @ORM\Column(type="integer", name="countries_id", nullable=false)
     */
    private $id_countries;

    /**
     * @ORM\Column(type="string", name="label", nullable=false)
     */
    private $label;


   /**
     * @ORM\Column(type="string", name="value", nullable=false)
     */
    private $value;

    



    /**
     * Get the value of id_details_countries
     */ 
    public function getId_details_countries()
    {
        return $this->id_details_countries;
    }

    /**
     * Set the value of id_details_countries
     *
     * @return  self
     */ 
    public function setId_details_countries($id_details_countries)
    {
        $this->id_details_countries = $id_details_countries;

        return $this;
    }

    /**
     * Get the value of id_countries
     */ 
    public function getId_countries()
    {
        return $this->id_countries;
    }

    /**
     * Set the value of id_countries
     *
     * @return  self
     */ 
    public function setId_countries($id_countries)
    {
        $this->id_countries = $id_countries;

        return $this;
    }

    /**
     * Get the value of label
     */ 
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set the value of label
     *
     * @return  self
     */ 
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get the value of value
     */ 
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of value
     *
     * @return  self
     */ 
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}