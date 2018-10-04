<?php
namespace Getnet\API;

/**
 * Class Address
 *
 * @package Getnet\API
 */
class Address implements \JsonSerializable {

    private $city;

    private $complement;

    private $country;

    private $district;

    private $number;

    private $postal_code;

    private $state;

    private $street;

    public function __construct($postal_code) {
        $this->postal_code = $postal_code;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }

    /**
     *
     * @return mixed
     */
    public function getCity() {
        return $this->city;
    }

    /**
     *
     * @param mixed $city
     */
    public function setCity($city) {
        $this->city = $city;

        return $this;
    }

    /**
     *
     * @return mixed
     */
    public function getComplement() {
        return $this->complement;
    }

    /**
     *
     * @param mixed $complement
     */
    public function setComplement($complement) {
        $this->complement = $complement;

        return $this;
    }

    /**
     *
     * @return mixed
     */
    public function getCountry() {
        return $this->country;
    }

    /**
     *
     * @param mixed $country
     */
    public function setCountry($country) {
        $this->country = $country;

        return $this;
    }

    /**
     *
     * @return mixed
     */
    public function getDistrict() {
        return $this->district;
    }

    /**
     *
     * @param mixed $district
     */
    public function setDistrict($district) {
        $this->district = $district;

        return $this;
    }

    /**
     *
     * @return mixed
     */
    public function getNumber() {
        return $this->number;
    }

    /**
     *
     * @param mixed $number
     */
    public function setNumber($number) {
        $this->number = $number;

        return $this;
    }

    /**
     *
     * @return mixed
     */
    public function getPostalCode() {
        return $this->postal_code;
    }

    /**
     *
     * @param mixed $postal_code
     */
    public function setPostalCode($postal_code) {
        $this->postal_code = $postal_code;

        return $this;
    }

    /**
     *
     * @return mixed
     */
    public function getState() {
        return $this->state;
    }

    /**
     *
     * @param mixed $state
     */
    public function setState($state) {
        $this->state = $state;

        return $this;
    }

    /**
     *
     * @return mixed
     */
    public function getStreet() {
        return $this->street;
    }

    /**
     *
     * @param mixed $street
     */
    public function setStreet($street) {
        $this->street = $street;

        return $this;
    }
}