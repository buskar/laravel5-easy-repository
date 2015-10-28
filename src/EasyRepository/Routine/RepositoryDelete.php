<?php
namespace Cheebo\Laravel\EasyRepository\Routine;

/**
 * Trait RepositoryDelete
 *
 * Trait implements delete for repositories
 *
 * @package Cheebo\Laravel\EasyRepository
 */
trait RepositoryDelete
{

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id) {
        return $this->model->destroy($id);
    }

}