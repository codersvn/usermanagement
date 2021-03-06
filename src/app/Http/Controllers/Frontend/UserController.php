<?php

namespace VCComponent\Laravel\User\Http\Controllers\Frontend;

use App\Entities\User;
use VCComponent\Laravel\User\Contracts\FrontendUserController;
use VCComponent\Laravel\User\Http\Controllers\ApiController;
use VCComponent\Laravel\User\Traits\UserMethodsFrontend;

class UserController extends ApiController implements FrontendUserController
{
    use UserMethodsFrontend;

    protected $repository;
    protected $validator;
    protected $transformer;
}
