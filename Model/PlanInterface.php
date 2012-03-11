<?php
namespace JMS\Payment\CoreBundle\Model;

/**
 * @author Richard Shank <develop@zestic.com>
 */
interface PlanInterface
{
    function setAmount($amount);

    function getAmount();

    function setBillingFrequency($billingFrequency);

    function getBillingFrequency();

    function setBillingInterval($billingInterval);

    function getBillingInterval();

    function setCurrency($currency);

    function getCurrency();

    function setDescription($description);

    function getDescription();

    function setInitalCharge($initalCharge);

    function getInitalCharge();

    function setInterval($interval);

    function getInterval();

    function setName($name);

    function getName();

    function setProcessor($processor);

    function getProcessor();

    function setProcessorId($processorId);

    function getProcessorId();

    function setTrialPeriodDays($trialPeriodDays);

    function getTrialPeriodDays();

    function setTrialPeriodPrice($trialPeriodPrice);

    function getTrialPeriodPrice();
}
