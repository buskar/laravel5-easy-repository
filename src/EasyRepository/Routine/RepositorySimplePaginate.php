<?php
namespace Cheebo\Laravel\EasyRepository\Routine;

/**
 * Trait RepositorySimplePaginate
 *
 * Trait implements paginate for repositories
 *
 * @package Cheebo\Laravel\EasyRepository\Routine
 */
trait RepositorySimplePaginate
{

    /**
     * @param int $page
     * @param int $perPage
     * @param array $columns
     * @return mixed
     */
    public function paginate($page = 1, $perPage = 15, $columns = array('*'), $options = []) {
        $this->model->skip(($page - 1) * $perPage)->take($perPage + 1);
        return new Paginator($this->get($columns), $perPage, $page, $options);
        return $this->model->paginate($perPage, $columns);
    }

}
