<?php
namespace JMS\Payment\CoreBundle\Model;

use JMS\Payment\CoreBundle\Model\ExtendedDataInterface;
use JMS\Payment\CoreBundle\Model\RecurringInstructionInterface;

class RecurringInstruction implements RecurringInstructionInterface
{
    protected $amount;
    protected $billingFrequency;
    protected $billingInterval;
    protected $creditCardId;
    protected $creditCardProfile;
    protected $currency;
    protected $customer;
    protected $customerId;
    protected $description;
    protected $endDate;
    protected $extendedData;
    protected $extendedDataOriginal;
    protected $horizon;
    protected $name;
    protected $paymentSystemName;
    protected $startDate;
    protected $state;

    // todo: make $data ExtendedData type to match payment instruction
    public function __construct($amount, $currency, $paymentSystemName)
    {
        $this->amount = $amount;
        $this->currency = $currency;
        $this->paymentSystemName = $paymentSystemName;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setBillingFrequency($billingFrequency)
    {
        $this->billingFrequency = $billingFrequency;
    }

    public function getBillingFrequency()
    {
        return $this->billingFrequency;
    }

    public function setBillingInterval($billingInterval)
    {
        $this->billingInterval = $billingInterval;
    }

    public function getBillingInterval()
    {
        return $this->billingInterval;
    }

    public function setCreditCardId($creditCardId)
    {
        $this->creditCardId = $creditCardId;
    }

    public function getCreditCardId()
    {
        return $this->creditCardId;
    }

    public function setCreditCardProfile($creditCardProfile)
    {
        $this->creditCardProfile = $creditCardProfile;
    }

    public function getCreditCardProfile()
    {
        return $this->creditCardProfile;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setExtendedData($extendedData)
    {
        $this->extendedData = $extendedData;
    }

    public function getExtendedData()
    {
        return $this->extendedData;
    }

    public function setHorizon($horizon)
    {
        $this->horizon = $horizon;
    }

    public function getHorizon()
    {
        return $this->horizon;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPaymentSystemName($paymentSystemName)
    {
        $this->paymentSystemName = $paymentSystemName;
    }

    public function getPaymentSystemName()
    {
        return $this->paymentSystemName;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function onPostLoad()
    {
        $this->extendedDataOriginal = clone $this->extendedData;
    }
}
