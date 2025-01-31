<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use \Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class UpsertApiEndpointRequest
{
	
    public UpsertApiEndpointPathParams $pathParams;
    
    /**
     * A JSON representation of the ApiEndpoint to upsert.
     * 
     * @var \Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiEndpointInput $request
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiEndpointInput $request;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiEndpointPathParams();
		$this->request = new \Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiEndpointInput();
	}
}
