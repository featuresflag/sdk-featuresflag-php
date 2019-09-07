<?php

namespace FeaturesFlag;

interface Features extends ArrayAccess 
{   
    public function toArray(): array;
    public function add(Feature $feature): Features;
    public function remove(Feature $feature): Features; 
    public function contains(Feature $element) : bool;
    
    /**
     * @return int|string|false 
     */
    public function indexOf(Feature $element);
}