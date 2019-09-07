<?php

namespace FeaturesFlag;

interface Condition
{
    public function evaluate(ApplicationContext $applicationContext): bool;
}