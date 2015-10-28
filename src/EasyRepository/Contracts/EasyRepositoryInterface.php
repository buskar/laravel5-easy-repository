<?php
namespace Cheebo\Laravel\EasyRepository\Contracts;

interface EasyRepositoryInterface
{

    /**
     * Returns Model class name
     *
     * @return mixed
     */
    public function model();


    /**
     * @return \Illuminate\Database\Eloquent\Model
     * @throws \Cheebo\Laravel\EasyRepository\Exceptions\EasyRepositoryException
     */
    public function makeModel();

}