<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class SchemaDiffValueChange
{
    /**
     * Represents the previous value of the element.
     * 
     * @var string $from
     */
	#[\JMS\Serializer\Annotation\SerializedName('From')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $from;
    
    /**
     * Represents the current value of the element.
     * 
     * @var string $to
     */
	#[\JMS\Serializer\Annotation\SerializedName('To')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $to;
    
	public function __construct()
	{
		$this->from = "";
		$this->to = "";
	}
}
