<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\Montagensstatussitem;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class MontagensstatussitemRepository
 * @package namespace App\Repositories;
 */
class MontagensstatussitemRepository extends BaseRepository implements RepositoryInterface
{
	/**
	 * Specify Model class name
	 *
	 * @return string
	 */
	public function model()
	{
		return Montagensstatussitem::class;
	}

	/**
	 * Boot up the repository, pushing criteria
	 */
	public function boot()
	{
		$this->pushCriteria(app(RequestCriteria::class));
	}
}