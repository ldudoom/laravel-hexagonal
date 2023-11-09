<?php

namespace Src\Example\User\Domain\ValueObject;

final class UserFullName
{
    private array $value;

    /**
     * @param array $value
     */
    public function __construct(array $value)
    {
        $this->value = $value;
    }

    /**
     * @return array
     */
    public function value(): array
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function firstname(): string
    {
        return $this->value['firstname'];
    }

    /**
     * @return string
     */
    public function lastname(): string
    {
        return $this->value['lastname'];
    }

    /**
     * @return string
     */
    public function fullname(): string
    {
        return $this->value['firstname'].' '.$this->value['lastname'];
    }
}
