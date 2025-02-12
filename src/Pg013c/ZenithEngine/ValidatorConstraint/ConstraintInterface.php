<?php

declare(strict_types=1);

namespace Apsensa\ZenithEngine\ValidatorConstraint;

use Symfony\Component\Validator\Constraint;

interface ConstraintInterface
{
    public function getConstraint(bool $isRequired): Constraint;
}
