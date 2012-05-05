<?php

namespace JMS\Payment\CoreBundle\Entity;

use JMS\Payment\CoreBundle\Model\ExtendedDataInterface;
use JMS\Payment\CoreBundle\Model\PaymentInstruction as AbstractPaymentInstruction;
use Doctrine\Common\Collections\ArrayCollection;

/*
 * Copyright 2010 Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

class PaymentInstruction extends AbstractPaymentInstruction
{
    private $id;
    private $extendedData;

    public function __construct($amount, $currency, $paymentSystemName, ExtendedDataInterface $data = null)
    {
        if (null === $data) {
            $data = new ExtendedData();
        }
        $this->extendedData = $data;

        parent::__construct($amount, $currency, $paymentSystemName);
    }

    public function getId()
    {
        return $this->id;
    }
}