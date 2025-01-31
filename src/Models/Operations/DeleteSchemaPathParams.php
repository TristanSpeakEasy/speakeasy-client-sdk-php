<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use \Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class DeleteSchemaPathParams
{
    /**
     * The ID of the Api to delete schemas for.
     * 
     * @var string $apiID
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiID')]
    public string $apiID;
    
    /**
     * The revision ID of the schema to delete.
     * 
     * @var string $revisionID
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=revisionID')]
    public string $revisionID;
    
    /**
     * The version ID of the Api to delete metadata for.
     * 
     * @var string $versionID
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=versionID')]
    public string $versionID;
    
	public function __construct()
	{
		$this->apiID = "";
		$this->revisionID = "";
		$this->versionID = "";
	}
}
