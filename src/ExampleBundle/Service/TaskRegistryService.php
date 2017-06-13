<?php

namespace ExampleBundle\Service;

class TaskRegistryService
{
    /**
     * @var array
     */
    private $services = [];

    /**
     * @param string $id
     */
    public function addService(string $id)
    {
        $this->services[] = $id;
    }

    /**
     * @param $id
     *
     * @return bool
     */
    public function hasService($id): bool
    {
        return in_array($id, $this->services);
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        return $this->services;
    }
}