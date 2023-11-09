<?php

namespace Src\Example\Shared\Domain\Exceptions;

class CustomException extends \Exception
{
    public function toException(): array
    {
        $classTemp = new \ReflectionClass(get_class($this));
        $class = explode('\\', $classTemp->getName());

        return [
            'status' => $this->getCode(),
            'error' => true,
            'class' => end($class),
            'message' => $this->getMessage(),
        ];
    }
}
