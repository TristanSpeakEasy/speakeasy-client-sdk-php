<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;


class GetEmbedAccessTokenResponse
{
	
    public string $contentType;
    
    /**
     * OK
     * 
     * @var ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\EmbedAccessTokenResponse $embedAccessTokenResponse
     */
	
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\EmbedAccessTokenResponse $embedAccessTokenResponse = null;
    
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
		$this->contentType = "";
		$this->embedAccessTokenResponse = null;
		$this->error = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
