<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;


class GetAllForVersionApiEndpointsResponse
{
    /**
     * OK
     * 
     * @var ?array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiEndpoint> $apiEndpoints
     */
	
    public ?array $apiEndpoints = null;
    
	
    public string $contentType;
    
    /**
     * Default error response
     * 
     * @var ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Error $error
     */
	
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Error $error = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->apiEndpoints = null;
		$this->contentType = "";
		$this->error = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
