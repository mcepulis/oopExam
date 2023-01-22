<?php

namespace Oopexam\module1;
class Manager extends Employee
{
    public const EMPLOYEE_TYPE = 2;
    public int $overtimeHours;
    public function __construct(string $name, int $overtimeHours, float $salary)
{
    $this->overtimeHours = $overtimeHours;
    parent::__construct($name, $salary);
}

    public function calculateSalary()
    {
        return $this->salary + ($this->salary / 40 * $this->overtimeHours) * 2;
    }
}