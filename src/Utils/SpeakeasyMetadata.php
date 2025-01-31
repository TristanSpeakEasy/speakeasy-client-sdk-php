<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Utils;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY|Attribute::IS_REPEATABLE)]
class SpeakeasyMetadata
{
    public string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @param array<\ReflectionAttribute<SpeakeasyMetadata>> $attributes
     * @return string | null
     */
    public static function find(array $attributes, string $type): string | null
    {
        foreach ($attributes as $attr) {
            $arguments = $attr->getArguments();
            if (count($arguments) !== 1) {
                return null;
            }

            $prefix = explode(":", $arguments[0], 2);
            if (count($prefix) !== 2) {
                return null;
            }

            if ($prefix[0] === $type) {
                return $arguments[0];
            }
        }

        return null;
    }
}