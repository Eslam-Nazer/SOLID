<?php

namespace App\Solid\OCP;

class Driver
{
    /**
     * Summary of __construct
     * @param string $name
     * @param int $age
     * @param string $address
     * @param string $insuranceNumber
     */
    public function __construct(
        private string $name,
        private int $age,
        private string $address,
        private string $insuranceNumber,
    ) {}

    /**
     * Summary of getName
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Summary of getAge
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Summary of getAddress
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * Summary of getInsuranceNumber
     * @return string
     */
    public function getInsuranceNumber(): string
    {
        return $this->insuranceNumber;
    }

    /**
     * Summary of setName
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Summary of setAge
     * @param int $age
     */
    public function setAge(int $age)
    {
        $this->age = $age;
    }

    /**
     * Summary of setAddress
     * @param string $address
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    /**
     * Summary of setInsuranceNumber
     * @param string $insuranceNumber
     */
    public function setInsuranceNumber(string $insuranceNumber)
    {
        $this->insuranceNumber = $insuranceNumber;
    }
}
