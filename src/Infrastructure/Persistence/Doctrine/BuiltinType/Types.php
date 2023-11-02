<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\BuiltinType;

use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping\BirthdayType;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping\BooleanType;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping\CreatedAtType;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping\DateTimeType;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping\DateType;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping\DecimalType;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping\DeletedAtType;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping\EmailAddressType;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping\LongTextType;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping\NumberType;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping\TextType;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping\UpdatedAtType;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping\UrlAddressType;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping\UuidType;

final class Types
{
    // BOOL
    private const BOOLEAN = 'boolean_value_object';

    // FLOAT
    private const DECIMAL = 'decimal_value_object';

    // INT
    private const NUMBER = 'number_value_object';

    // STRING
    private const TEXT = 'text_value_object';
    private const LONG_TEXT = 'long_text_value_object';
    private const EMAIL_ADDRESS = 'email_address_value_object';
    private const URL_ADDRESS = 'url_address_value_object';
    private const UUID = 'uuid_value_object';

    // DATETIME
    private const DATETIME = 'datetime_value_object';
    private const CREATED_AT = 'created_at_value_object';
    private const UPDATED_AT = 'updated_at_value_object';
    private const DELETED_AT = 'deleted_at_value_object';

    // DATE
    private const DATE = 'date_value_object';
    private const BIRTHDAY = 'birthday_value_object';

    public const BUILTIN_TYPES_MAP = [
        self::BOOLEAN => BooleanType::class,

        self::DECIMAL => DecimalType::class,

        self::NUMBER => NumberType::class,

        self::TEXT => TextType::class,
        self::LONG_TEXT => LongTextType::class,
        self::EMAIL_ADDRESS => EmailAddressType::class,
        self::URL_ADDRESS => UrlAddressType::class,
        self::UUID => UuidType::class,

        self::DATETIME => DateTimeType::class,
        self::CREATED_AT => CreatedAtType::class,
        self::UPDATED_AT => UpdatedAtType::class,
        self::DELETED_AT => DeletedAtType::class,

        self::DATE => DateType::class,
        self::BIRTHDAY => BirthdayType::class,
    ];
}
