<?php
namespace JMS\Payment\CoreBundle\Model;

use JMS\Payment\CoreBundle\Model\CreditCardProfileInterface;
use JMS\Payment\CoreBundle\Model\PlanInterface;

interface RecurringTransactionInterface
{
    function setAmount($amount);

    function getAmount();

    function setBillingFrequency($billingFrequency);

    function getBillingFrequency();

    function setBillingInterval($billingInterval);

    function getBillingInterval();

    function setCreditCardProfile(CreditCardProfileInterface $creditCardProfile);

    function getCreditCardProfile();

    function setCurrency($currency);

    function getCurrency();

    function setDescription($description);

    function getDescription();

    function setEndDate($endDate);

    function getEndDate();

    function setExtendedData($extendedData);

    function getExtendedData();

    function setHorizon($horizon);

    function getHorizon();

    function setPlanId($planId);

    function getPlanId();

    function setProcessor($processor);

    function getProcessor();

    function setProcessorId($processorId);

    function getProcessorId();

    function addResponseData($responseData);

    function getResponseData();

    function setStartDate($startDate);

    function getStartDate();
}
