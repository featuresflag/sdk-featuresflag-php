<?php

namespace FeaturesFlag;

interface Config
{   
    public function getVersion(): string;
    public function getFeatures(): Features;
}