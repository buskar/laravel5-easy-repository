<?php
namespace Cheebo\Laravel\EasyRepository\Routine;

/**
 * Trait RepositoryPage
 *
 * Trait implements paginate for repositories
 *
 * @package Cheebo\Laravel\EasyRepository\Routine
 */
trait RepositoryPage
{

    /**
     * @param int $page
     * @param int $perPage
     * @param array $columns
     * @return mixed
     */
    public function page($page = 1, $perPage = 15, $columns = array('*')) {
        return $this->model->skip(($page - 1) * $perPage)->take($perPage + 1)->get($columns);
    }

}
