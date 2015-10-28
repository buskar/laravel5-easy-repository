<?php
namespace Cheebo\Laravel\EasyRepository\Routine;

/**
 * Trait RepositoryUpdate
 *
 * Trait implements findBy for repositories
 *
 * @package Cheebo\Laravel\EasyRepository
 */
trait RepositoryUpdate
{

    public function update(array $data, $attr, $attribute = "id") {
        $this->model->where($attribute, $attr)->update($data);
    }

}