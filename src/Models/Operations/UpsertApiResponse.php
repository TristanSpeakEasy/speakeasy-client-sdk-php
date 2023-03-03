<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;



class UpsertApiResponse
{
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Api $api = null;
    
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Error $error = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->api = null;
		$this->contentType = "";
		$this->error = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
