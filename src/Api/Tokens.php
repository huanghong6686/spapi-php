<?php
/**
* This class is autogenerated by the Spapi class generator
* Date of generation: 2022-01-09
* Specification: https://github.com/amzn/selling-partner-api-models/blob/main/models/tokens-api-model/tokens_2021-03-01.json
* Source MD5 signature: 78dba016bb1e3de8e4d9d213a5991057
*
*
* Selling Partner API for Tokens 
* The Selling Partner API for Tokens provides a secure way to access a customer's PII (Personally Identifiable Information). You can call the Tokens API to get a Restricted Data Token (RDT) for one or more restricted resources that you specify. The RDT authorizes subsequent calls to restricted operations that correspond to the restricted resources that you specified.

For more information, see the [Tokens API Use Case Guide](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/use-case-guides/tokens-api-use-case-guide/tokens-API-use-case-guide-2021-03-01.md).
*/
namespace DoubleBreak\Spapi\Api;
use DoubleBreak\Spapi\Client;

class Tokens extends Client {

  /**
  * Operation createRestrictedDataToken
  *
  */
  public function createRestrictedDataToken($body = [])
  {
    return $this->send("/tokens/2021-03-01/restrictedDataToken", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  public function createRestrictedDataTokenAsync($body = [])
  {
    return $this->sendAsync("/tokens/2021-03-01/restrictedDataToken", [
      'method' => 'POST',
      'json' => $body
    ]);
  }
}
