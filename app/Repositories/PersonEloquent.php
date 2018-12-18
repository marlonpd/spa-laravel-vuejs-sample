<?php
namespace App\Repositories;

use App\Person;

class PersonEloquent implements PersonInterface
{
    /**
     * @var Person
     */
    private $model;

    /**
     * Person constructor.
     * @param Person $model
     */
    public function __construct(Person $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getById(int $id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function update(int $id, array $attributes)
    {
        $person = $this->getById($id);
        $person->update($attributes);
        return $person;
    }
    
    public function delete(int $id)
    {
        $this->getById($id)->delete();
        return true;
    }
}