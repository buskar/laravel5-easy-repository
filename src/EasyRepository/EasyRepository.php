<?php
namespace Cheebo\Laravel\EasyRepository;

use Cheebo\Laravel\EasyRepository\Contracts\EasyRepositoryInterface;
use Cheebo\Laravel\EasyRepository\Exceptions\EasyRepositoryException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as App;

abstract class EasyRepository implements EasyRepositoryInterface
{

    /**
     * @var App
     */
    private $app;

    /**
     * @var Model
     */
    protected $model;

    /**
     * @param App $app
     */
    public function __construct(App $app) {
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    abstract function model();

    /**
     * @return \Illuminate\Database\Eloquent\Model
     * @throws \Cheebo\Laravel\EasyRepository\Exceptions\EasyRepositoryException
     */
    public function makeModel() {
        $model = $this->app->make($this->model());

        if (!$model instanceof Model)
            throw new EasyRepositoryException("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");

        return $this->model = $model;
    }

}