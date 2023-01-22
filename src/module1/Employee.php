<?php

namespace Oopexam\module1;
class Employee 
{
    public const EMPLOYEE_TYPE = 1;
    public string $name; 
    protected float $salary;
    protected int $experience;
    private int $id;

    public function __construct (string $name, float $salary)
    {
       $this->name = $name;
       $this->salary = $salary;
       $this->id = rand();
    }

    public function setExperience(int $experience)
    {
        $this->experience = $experience;
    }

    public function getExperience()
    {
        return $this->experience;
    }

    public function getId()
    {
        return $this->id;
    }

    public function calculateSalary()
    {
        return $this->salary;
    }

    public function __toString()
    {
        return "Darbuotojas {$this->id}: {$this->name} - {$this->salary} EUR";
    }

    public function __clone()
    {
        return $this->id = 0;
    }

    public static function getTypeDescription(): string
    {
        return "Darbuotojo tipas:" . self::EMPLOYEE_TYPE;
    }
}