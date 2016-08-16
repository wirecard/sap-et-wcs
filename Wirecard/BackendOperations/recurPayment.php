<?php

	// computes the fingerprint based on the request parameters
  $this->requestFingerprint = $this->computeFingerprint($this->customerId, $this->shopId, $this->password,
                                           $this->secret, $this->language,
                                           $this->sourceOrderNumber, $this->orderDescription,
                                           $this->amount, $this->currency);

  // sets all request parameters as assoziative array
  $request = array(
               "customerId" => $this->customerId,
               "shopId" => $this->shopId,
               "password" => $this->password,
               "language" => $this->language,
               "requestFingerprint" => $this->requestFingerprint,
               "sourceOrderNumber" => $this->sourceOrderNumber,
               "orderDescription" => $this->orderDescription,
               "amount" => $this->amount,
               "currency" => $this->currency
             );

  $response = $this->serverToServerRequest($this->URL_RECUR_PAYMENT, $request, $systemInfo);