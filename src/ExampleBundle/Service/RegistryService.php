<?php

namespace ExampleBundle\Service;

class RegistryService
{
    private $services = [];

    public function addService(string $id)
    {
        $this->services[] = $id;
    }

    public function hasService($id): bool
    {
        return in_array($id, $this->services);
    }

    public function getAll(): array
    {
        return $this->services;
    }
}