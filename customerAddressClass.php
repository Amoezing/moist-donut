<?php
/*
 * This file contains the class implementation for customer addresses for ECAF.
 *
 * (c) NAYAtel
 *
 * Author: Moeez Tahir
 * Dated: 12th November 2018
 * version 1.0
 */

ini_set('display_errors', 1);
class CustomerAddress{
    
    private $id, $ecaf_id, $address_type, $full_address, $location, $number_name, $city, $street, $sector_colony, $sub_sector;

    public function __construct(){
        $id = -1;
        $ecaf_id = -1;
        
        $address_type = 'NO_TYPE';
        $full_address = 'INSTALLATION_ADDRESS';
        $location = 'NO_LOCATION';
        $number_name = 'NO_NUMBER_NAME';
        $city = 'NO_CITY';
        $street = 'NO_STREET';
        $sector_colony =' NO_SECTOR_COLONY';
        $sub_sector = 'NO_SUB_SECTOR';
    }

    public function createFromRaw($addressRaw){
        $this->id = $addressRaw['id'];
        $this->ecaf_id = $addressRaw['ecaf_id'];
        $this->address_type = $addressRaw['address_type'];
        $this->full_address = $addressRaw['full_address'];
        $this->location = $addressRaw['location'];
        $this->number_name = $addressRaw['number_name'];
        $this->city = $addressRaw['city'];
        $this->street = $addressRaw['street'];
        $this->sector_colony = $addressRaw['sector_colony'];
        $this->sub_sector = $addressRaw['sub_sector'];
    }

    public function log(){
        print_r('<br><b>ID:</b> ' . $this->id);
        print_r('<br><b>eCAF ID:</b> ' . $this->ecaf_id);
        print_r('<br><b>Address Type:</b> ' . $this->address_type);
        print_r('<br><b>Full Address:</b> ' . $this->full_address);
        print_r('<br><b>Location:</b> ' . $this->location);
        print_r('<br><b>Number Name:</b> ' . $this->number_name);
        print_r('<br><b>City:</b> ' . $this->city);
        print_r('<br><b>Street:</b> ' . $this->street);
        print_r('<br><b>Sector Colony:</b> ' . $this->sector_colony);
        print_r('<br><b>Sub Sector:</b> ' . $this->sub_sector);
    }

    public function getObjectAsArray(){
        $toReturnArray = array();

        $toReturnArray['ID'] = $this->id;
        $toReturnArray['ECAF_ID'] = $this->ecaf_id;
        $toReturnArray['ADDRESS_TYPE'] = $this->address_type;
        $toReturnArray['FULL_ADDRESS'] = $this->full_address;
        $toReturnArray['LOCATION'] = $this->location;
        $toReturnArray['NUMBER_NAME'] = $this->number_name;
        $toReturnArray['CITY'] = $this->city;
        $toReturnArray['STREET'] = $this->street;
        $toReturnArray['SECTOR_COLONY'] = $this->sector_colony;
        $toReturnArray['SUB_SECTOR'] = $this->sub_sector;
        
        return $toReturnArray;
    }

    ////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////// GETTERS AND SETTERS ///////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////
        /**
         * Get the value of id
         */ 
        public function getId()
        {
            return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
            $this->id = $id;

            return $this;
        }

        /**
         * Get the value of ecaf_id
         */ 
        public function getEcaf_id()
        {
            return $this->ecaf_id;
        }

        /**
         * Set the value of ecaf_id
         *
         * @return  self
         */ 
        public function setEcaf_id($ecaf_id)
        {
            $this->ecaf_id = $ecaf_id;

            return $this;
        }

        /**
         * Get the value of address_type
         */ 
        public function getAddress_type()
        {
            return $this->address_type;
        }

        /**
         * Set the value of address_type
         *
         * @return  self
         */ 
        public function setAddress_type($address_type)
        {
            $this->address_type = $address_type;

            return $this;
        }

        /**
         * Get the value of full_address
         */ 
        public function getFull_address()
        {
            return $this->full_address;
        }

        /**
         * Set the value of full_address
         *
         * @return  self
         */ 
        public function setFull_address($full_address)
        {
            $this->full_address = $full_address;

            return $this;
        }

        /**
         * Get the value of location
         */ 
        public function getLocation()
        {
            return $this->location;
        }

        /**
         * Set the value of location
         *
         * @return  self
         */ 
        public function setLocation($location)
        {
            $this->location = $location;

            return $this;
        }

        /**
         * Get the value of number_name
         */ 
        public function getNumber_name()
        {
            return $this->number_name;
        }

        /**
         * Set the value of number_name
         *
         * @return  self
         */ 
        public function setNumber_name($number_name)
        {
            $this->number_name = $number_name;

            return $this;
        }

        /**
         * Get the value of city
         */ 
        public function getCity()
        {
            return $this->city;
        }

        /**
         * Set the value of city
         *
         * @return  self
         */ 
        public function setCity($city)
        {
            $this->city = $city;

            return $this;
        }

        /**
         * Get the value of street
         */ 
        public function getStreet()
        {
            return $this->street;
        }

        /**
         * Set the value of street
         *
         * @return  self
         */ 
        public function setStreet($street)
        {
            $this->street = $street;

            return $this;
        }

        /**
         * Get the value of sector_colony
         */ 
        public function getSector_colony()
        {
            return $this->sector_colony;
        }

        /**
         * Set the value of sector_colony
         *
         * @return  self
         */ 
        public function setSector_colony($sector_colony)
        {
            $this->sector_colony = $sector_colony;

            return $this;
        }

        /**
         * Get the value of sub_sector
         */ 
        public function getSub_sector()
        {
            return $this->sub_sector;
        }

        /**
         * Set the value of sub_sector
         *
         * @return  self
         */ 
        public function setSub_sector($sub_sector)
        {
            $this->sub_sector = $sub_sector;

            return $this;
        }
    
    ////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////// GETTERS AND SETTERS ///////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////
}
?>