<?php
namespace Cheebo\Laravel\EasyRepository\Routine;

/**
 * Trait RepositoryForceDelete
 *
 * Trait implements force delete for repositories
 *
 * @package Cheebo\Laravel\EasyRepository
 */
trait RepositoryForceDelete
{

    public function forceDelete($id) {
        $model = $this->model->find($id);
        if ($model) {
            $model->forceDelete();
        }
    }

}