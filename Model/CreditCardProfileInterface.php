<?php
namespace JMS\Payment\CoreBundle\Model;

/**
 * @author Richard Shank <develop@zestic.com>
 */
interface CreditCardProfileInterface
{
    function setCardNumber($cardNumber);

    function getCardNumber($type = null);

    function setCardType($cardType);

    function getCardType();

    function setEmail($email);

    function getEmail();

    function setExpiration($month, $year);

    /**
     * @return array (month, year)
     */
    function getExpiration();

    function setName($name);

    function getName();

    function setStreet1($street1);

    function getStreet1();

    function setStreet2($street2);

    function getStreet2();

    function setCity($city);

    function getCity();

    function setCountry($country);

    function getCountry();

    function setPostcode($postcode);

    function getPostcode();

    function setState($state);

    function getState();
}
