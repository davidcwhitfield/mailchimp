<?php

namespace Davidcwhitfield/MailChimp;

class Contact {
        public $company;
        public $address1;
        public $address2;
        public $city;
        public $state;
        public $zip;
        public $country;
        public $phone;

        public function setCompany($company)
        {
                $this->company = $company;
                return $this;
        }

        public function setAddressLine1($addressLine1)
        {
                $this->address1 = $addressLine1;
                return $this;
        }

        public function setAddressLine2($addressLine2)
        {
                $this->address2 = $addressLine2;
                return $this;
        }

        public function setCity($city)
        {
                $this->city = $city;
                return $this;
        }

        public function setState($state)
        {
                $this->state = $state;
                return $this;
        }

        public function setPostcode($postcode)
        {
                $this->zip = $postcode;
                return $this;
        }

        public function setCountry($country)
        {
                $this->country = $country;
                return $this;
        }

        public function setPhone($phone)
        {
                $this->phone = $phone;
                return $this;
        }
}
