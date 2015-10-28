<?php
namespace Cheebo\Laravel\EasyRepository\Routine;

/**
 * Trait RepositoryAll
 *
 * Trait implements all for repositories
 *
 * @package Cheebo\Laravel\EasyRepository
 */
trait RepositoryAll
{

    /**
     * @param array $columns
     * @return mixed
     */
    public function all($columns = array('*')) {
        return $this->model->get($columns);
    }

}