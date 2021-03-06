<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Chambre {

	/**
	 * A reference to the hotel containing this room.
	 * 
	 * @var \AppBundle\Entity\HotelExpress
	 */
	protected $hotel;
	
	/**
	 * 
	 * The room number
	 * 
	 * @var integer
	 */
	protected $numero;
	
    /**
     * Constructor
     * 
     * @param \AppBundle\Entity\HotelExpress $hotel
     * @param integer $numero
     */
    public function __construct(\AppBundle\Entity\HotelExpress $hotel, $numero) {
    	$this->hotel = $hotel;
        $this->numero = $numero;
        
        $this->hotel->addChambre($this);
    }
	
    /**
     * Get hotel
     *
     * @return \AppBundle\Entity\HotelExpress 
     */
    public function getHotel() {
        return $this->hotel;
    }
    
    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero() {
        return $this->numero;
    }

}
