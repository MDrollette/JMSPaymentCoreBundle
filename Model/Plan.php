<?php
namespace JMS\Payment\CoreBundle\Model;

use JMS\Payment\CoreBundle\Model\PlanInterface;
/**
 * @author Richard Shank <develop@zestic.com>
 */
abstract class Plan implements PlanInterface
{
    protected $amount;
    protected $billingInterval;
    protected $billingFrequency;
    protected $currency;
    protected $description;
    protected $initalCharge;
    protected $interval;
    protected $name;
    protected $processor;
    protected $processorId;
    protected $trialPeriodDays;
    protected $trialPeriodPrice;

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

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setInitalCharge($initalCharge)
    {
        $this->initalCharge = $initalCharge;
    }

    public function getInitalCharge()
    {
        return $this->initalCharge;
    }

    public function setInterval($interval)
    {
        $this->interval = $interval;
    }

    public function getInterval()
    {
        return $this->interval;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setProcessor($processor)
    {
        $this->processor = $processor;
    }

    public function getProcessor()
    {
        return $this->processor;
    }

    public function setProcessorId($processorId)
    {
        $this->processorId = $processorId;
    }

    public function getProcessorId()
    {
        return $this->processorId;
    }

    public function setTrialPeriodDays($trialPeriodDays)
    {
        $this->trialPeriodDays = $trialPeriodDays;
    }

    public function getTrialPeriodDays()
    {
        return $this->trialPeriodDays;
    }

    public function setTrialPeriodPrice($trialPeriodPrice)
    {
        $this->trialPeriodPrice = $trialPeriodPrice;
    }

    public function getTrialPeriodPrice()
    {
        return $this->trialPeriodPrice;
    }
}
