<?php
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */

namespace DwollaSwagger;

class WebhooksApi {

  function __construct($apiClient = null) {
    if (null === $apiClient) {
      if (Configuration::$apiClient === null) {
        Configuration::$apiClient = new ApiClient(); // create a new API client if not present
        $this->apiClient = Configuration::$apiClient;
      }
      else
        $this->apiClient = Configuration::$apiClient; // use the default one
    } else {
      $this->apiClient = $apiClient; // use the one provided by the user
    }

    // Authentication methods
    $this->authSettings = array('oauth2');
  }

  private $apiClient; // instance of the ApiClient

  /**
   * get the API client
   */
  public function getApiClient() {
    return $this->apiClient;
  }

  /**
   * set the API client
   */
  public function setApiClient($apiClient) {
    $this->apiClient = $apiClient;
  }


  /**
   * hooksById
   *
   * Get webhooks by subscription id.
   *
   * @param string $id ID of webhook to get. (required)
   * @param int $limit How many results to return. (optional)
   * @param int $offset How many results to skip. (optional)
   * @return WebhookEventListResponse
   */
   public function hooksById($id, $limit = null, $offset = null) {

      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling hooksById');
      }


      // parse inputs
      $resourcePath = "/webhook-subscriptions/{id}/webhooks";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }// query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }


      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }



      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'WebhookEventListResponse');
  }

  /**
   * id
   *
   * Get a webhook by id.
   *
   * @param string $id ID of webhook to get. (required)
   * @return Webhook
   */
   public function id($id) {

      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling id');
      }


      // parse inputs
      $resourcePath = "/webhooks/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());




      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }



      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'Webhook');
  }

  /**
   * retriesById
   *
   * Get retries requested by webhook id.
   *
   * @param string $id ID of webhook to get retries for. (required)
   * @return WebhookRetryRequestListResponse
   */
   public function retriesById($id) {

      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling retriesById');
      }


      // parse inputs
      $resourcePath = "/webhooks/{id}/retries";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());




      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }



      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'WebhookRetryRequestListResponse');
  }

  /**
   * retryWebhook
   *
   * Retry a webhook by id.
   *
   * @param string $id ID of webhook to retry. (required)
   * @return WebhookRetry
   */
   public function retryWebhook($id) {

      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling retryWebhook');
      }


      // parse inputs
      $resourcePath = "/webhooks/{id}/retries";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());




      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }



      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'WebhookRetry');
  }


}
