<?php
declare(strict_types=1);

namespace Arctix\Core\Repositories;

use Arctix\Core\Models\Model;

/**
 * Repository
 *
 * @author bu0nq <hello@bu0nq.ru>
 */
abstract class Repository
{
    /**
     * @var Model
     */
    protected Model $model;

    /**
     * @return void
     */
    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    /**
     * @return Model
     */
    protected function run() : Model
    {
        return clone $this->model;
    }

    /**
     * @return string
     */
    abstract protected function getModelClass() : string;
}
