<?php
namespace Cheebo\Laravel\EasyRepository\Routine;

/**
 * Trait RepositoryCreate
 *
 * Trait implements create for repositories
 *
 * @package Cheebo\Laravel\EasyRepository
 */
trait RepositoryCreate
{

    public function create(array $data) {
        return $this->model->create($data);
    }

}