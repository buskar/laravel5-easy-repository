<?php
namespace Cheebo\Laravel\EasyRepository\Routine;

/**
 * Trait RepositoryFind
 *
 * Trait implements find for repositories
 *
 * @package Cheebo\Laravel\EasyRepository
 */
trait RepositoryFind
{

    /**
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function find($id, $columns = array('*')) {
        return $this->model->find($id, $columns);
    }

}