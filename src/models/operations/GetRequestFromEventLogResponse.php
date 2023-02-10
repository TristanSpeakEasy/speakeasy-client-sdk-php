<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class GetRequestFromEventLogResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\Error $error;
    
    public int $statusCode;
    
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\UnboundedRequest $unboundedRequest;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->statusCode = 0;
		$this->unboundedRequest = null;
	}
}