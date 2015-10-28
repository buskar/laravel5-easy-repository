<?php
namespace Cheebo\Laravel\EasyRepository\Routine;

/**
 * Trait RepositoryPaginate
 *
 * Trait implements paginate for repositories
 *
 * @package Cheebo\Laravel\EasyRepository\Routine
 */
trait RepositoryPaginate
{

    /**
     * @param int $perPage
     * @param array $columns
     * @return mixed
     */
    public function paginate($perPage = 15, $columns = array('*')) {
        return $this->model->paginate($perPage, $columns);
    }

}