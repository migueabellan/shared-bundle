<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Domain\Exception;

final class InvalidArgumentException extends \InvalidArgumentException
{
    private const CODE = 500;

    public function __construct(private string $key, private array $params = [])
    {
        $message = str_replace(array_keys($this->params), array_values($this->params), $this->key);

        parent::__construct($message, self::CODE);
    }
}
