<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class GenerateOpenApiSpecRequest
{
    public \Speakeasy\SpeakeasyClientSDK\models\operations\GenerateOpenApiSpecPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\GenerateOpenApiSpecPathParams();
	}
}