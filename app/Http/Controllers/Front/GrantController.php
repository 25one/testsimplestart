<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
//use App\Http\Requests\GrantRequest;
//use App\Grant;

use App\ {
    Http\Controllers\Controller,
    Repositories\FrontRepository,
    Http\Requests\GrantRequest,
    Http\Controllers\Traits\Indexable    

};


class GrantController extends Controller
{
    use Indexable;

    /**
     * The ModelGrant instance.
     *
     * @var \App\Grant
     */
    //protected $model;

    /**
     * The GrantRepository instance.
     *
     * @var \App\Repositories\GrantRepository
     */
    //protected $repository; //in Trait

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct(Grant $model)
    public function __construct(FrontRepository $repository)    
    {
        //$this->middleware('auth'); 
        //$this->middleware('admin')->only('create', 'store', 'edit', 'update', 'destroy');      
          
        //$this->model = $model;
        $this->repository = $repository;
        $this->namespace = 'front';
    }

    // in Trait
    //public function index()
    //{
    //    return view('front.grant');
    //}

    public function store(GrantRequest $request)
    {
    	//$this->model::create($request->all());
        $this->repository->store($request);
        return redirect(route('grant'))->with('message-ok', __('Your message has been successfully sended'));
    }
    
}
