<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/**
 * EmbedAccessTokenResponse
 * An EmbedAccessTokenResponse contains a token that can be used to embed a Speakeasy dashboard.
 */
class EmbedAccessTokenResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('access_token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $accessToken;
    
	public function __construct()
	{
		$this->accessToken = "";
	}
}