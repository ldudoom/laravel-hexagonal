<?php

namespace Src\Example\User\Domain\ValueObject;

use Carbon\Carbon;

class UserTimestamp
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
    public function createdAt(): string
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', strtotime($this->value['created_at']))->toDayDateTimeString();
    }

    /**
     * @return string
     */
    public function updatedAt(): string
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', strtotime($this->value['updated_at']))->toDayDateTimeString();
    }
}
