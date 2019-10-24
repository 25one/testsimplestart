<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GrantRequest;
use App\Grant;


class GrantController extends Controller
{

    /**
     * The ModelGrant instance.
     *
     * @var \App\Grant
     */
    protected $model;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Grant $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return view('grant');
    }

    public function store(GrantRequest $request)
    {
    	$this->model::create($request->all());
        return redirect(route('grant'))->with('message-ok', __('Your message has been successfully sended'));;
    }
    
}
