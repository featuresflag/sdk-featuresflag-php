<?php

namespace FeaturesFlag\Exception;

class UndefinedPropertyException extends Throwlable
{

    public function __construct(string $property)
    {
        $message = 'Undefined property: ' . $property;
        parent::__construct($message);
    }   
}
