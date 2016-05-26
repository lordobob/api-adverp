<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\Osrecorrenteiten;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class OsrecorrenteitenRepository
 * @package namespace App\Repositories;
 */
class OsrecorrenteitenRepository extends BaseRepository implements RepositoryInterface
{
	/**
	 * Specify Model class name
	 *
	 * @return string
	 */
	public function model()
	{
		return Osrecorrenteiten::class;
	}

	/**
	 * Boot up the repository, pushing criteria
	 */
	public function boot()
	{
		$this->pushCriteria(app(RequestCriteria::class));
	}
}
