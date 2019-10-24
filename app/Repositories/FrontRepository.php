<?php

namespace App\Repositories;

use App\Models\ {
    Grant
};

//use App\Grant;

class FrontRepository
{
    /**
     * The Front-Models instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model_grant;


    /**
     * Create a new FrontRepository instance.
     *
     * @param  \App\Models\Joined $model_grant (?Models)
     */
    public function __construct(Grant $grant)
    {
        $this->model_grant = $grant;
    }

    /**
     * Store grant-message.
     *
     * @param  \App\Http\Requests\GrantRequest $request
     * @return void
     */
    public function store($request)
    {
        $this->model_grant::create($request->all());
    }  

}

