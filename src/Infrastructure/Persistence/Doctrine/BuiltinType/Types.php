<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\BuiltinType;

use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping\EmailAddressType;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping\StrType;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping\TextType;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping\UrlAddressType;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping\UuidType;

final class Types
{
    private const EMAIL_ADDRESS = 'email_address_value_object';
    private const STRING = 'string_value_object';
    private const TEXT = 'text_value_object';
    private const URL_ADDRESS = 'url_address_value_object';
    private const UUID = 'uuid_value_object';

    public const BUILTIN_TYPES_MAP = [
        self::EMAIL_ADDRESS => EmailAddressType::class,
        self::STRING => StrType::class,
        self::TEXT => TextType::class,
        self::URL_ADDRESS => UrlAddressType::class,
        self::UUID => UuidType::class,
    ];
}
