<?php

namespace FeaturesFlag;

use FeaturesFlag\Exception\UndefinedPropertyException;

class ApplicationContextImpl implements ApplicationContext
{
    /**
     * @var string
     */
    private $identifier;
    /**
     * @var array
     */
    private $fields;
    
    
    /**
     * __construct
     *
     * @param  string $identifier
     * @param  array $fields
     *
     * @return void
     */
    public function __construct(string $identifier, $fields = [])
    {
        $this->identifier = $identifier; 
        $this->fields = $fields;         
        $this->fields['identifier'] = $identifier;
    } 

    /**
     * __get
     *
     * @param  string $name
     *
     * @return void
     */
    public function __get(string $name)
    {
        if (array_key_exists($name, $this->fields)) {
            return $this->fields[$name];
        }

        throw new UndefinedPropertyException($name);        
    }

    /**
     * getIdentifier
     *
     * @return string
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }
}