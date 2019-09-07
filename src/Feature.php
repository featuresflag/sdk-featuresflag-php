<?php

namespace FeaturesFlag;

interface Feature
{   
    public function getSid(): string;
    public function isActived(): bool;
    public function getCondition(): Condition;
    public function evaluate(ApplicationContext $applicationContext): bool;
}