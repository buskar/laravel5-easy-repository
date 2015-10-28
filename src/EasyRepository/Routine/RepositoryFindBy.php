<?php
namespace Cheebo\Laravel\EasyRepository\Routine;

/**
 * Trait RepositoryFindBy
 *
 * Trait implements findBy for repositories
 *
 * @package Cheebo\Laravel\EasyRepository
 */
trait RepositoryFindBy
{

    /**
     * @param $attribute
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->model->where($attribute, '=', $value)->first($columns);
    }

}