<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\Senhasstatus;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class SenhasstatusRepository
 * @package namespace App\Repositories;
 */
class SenhasstatusRepository extends BaseRepository implements RepositoryInterface
{
	/**
	 * Specify Model class name
	 *
	 * @return string
	 */
	public function model()
	{
		return Senhasstatus::class;
	}

	/**
	 * Boot up the repository, pushing criteria
	 */
	public function boot()
	{
		$this->pushCriteria(app(RequestCriteria::class));
	}
}
