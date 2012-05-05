<?php
namespace JMS\Payment\CoreBundle\Model;

use JMS\Payment\CoreBundle\Model\CreditCardProfileInterface;
/**
 * @author Richard Shank <develop@zestic.com>
 */
abstract class CreditCardProfile implements CreditCardProfileInterface
{
    protected $activeCardNumber;
    protected $cardType;
    protected $cvv;
    protected $email;
    protected $expiration;
    protected $firstName;
    protected $lastName;
    protected $persistedCardNumber;
    protected $name;
    protected $street1;
    protected $street2;
    protected $city;
    protected $state;
    protected $postcode;
    protected $country;

    public function setCardNumber($cardNumber)
    {
        $this->activeCardNumber = preg_replace('/\D/', '', $cardNumber);
        $chars = strlen($this->activeCardNumber);
        $this->persistedCardNumber = str_repeat('*', $chars - 4) . substr($this->activeCardNumber, -4);
    }

    public function getCardNumber($type = null)
    {
        if ($type === 'active') {
            return $this->activeCardNumber;
        }
        return $this->persistedCardNumber;
    }

    public function setCardType($cardType)
    {
        $this->cardType = $cardType;
    }

    public function getCardType()
    {
        return $this->cardType;
    }

    public function setCvv($cvv)
    {
        $this->cvv = $cvv;
    }

    public function getCvv()
    {
        return $this->cvv;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setExpiration($month, $year)
    {
        $this->expiration = array('month' => $month, 'year' => $year);
    }

    public function getExpiration()
    {
        return $this->expiration;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name ? $this->name : $this->firstName.' '.$this->lastName;
    }

    public function setStreet1($street1)
    {
        $this->street1 = $street1;
    }

    public function getStreet1()
    {
        return $this->street1;
    }

    public function setStreet2($street2)
    {
        $this->street2 = $street2;
    }

    public function getStreet2()
    {
        return $this->street2;
    }

    public function getStreet()
    {
        return $this->street1 . ' ' . $this->street2;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }

    public function getPostcode()
    {
        return $this->postcode;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }
}
