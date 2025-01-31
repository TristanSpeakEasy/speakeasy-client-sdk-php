<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/**
 * Plugin - A plugin is a short script that is run against ingested requests
 * 
 * @package Speakeasy\SpeakeasyClientSDK\Models\Shared
 * @access public
 */
class Plugin
{
	#[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $code;
    
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('eval_hash')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $evalHash = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('plugin_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $pluginId;
    
	#[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $title;
    
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('workspace_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $workspaceId;
    
	public function __construct()
	{
		$this->code = "";
		$this->createdAt = null;
		$this->evalHash = null;
		$this->pluginId = "";
		$this->title = "";
		$this->updatedAt = null;
		$this->workspaceId = "";
	}
}
