<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Combustivei extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXCOMBUSTIVEIS', 'COMBUSTIVEL'];

	protected $table = 'COMBUSTIVEIS';

	protected $primaryKey = 'CODCOMBUSTIVEL';

}
