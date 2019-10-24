<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;

trait Indexable
{
    /**
     * The Repository instance.
     *
     * @var \App\Repositories\CardRepository
     * @var ...     
     */
    protected $repository;

    /**
     * The namespace
     *
     * @var string
     */
    protected $namespace; //...

    /**
     * The pagination number.
     *
     * @var int
     */
    //protected $nbrPages;

    /**
     * Display spart-view
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->namespace . '.grant', ['seo' => $this->getParameters()]);
    }

    /**
     * Get parameters.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    protected function getParameters()
    {
        // Default parameters
        $parameters = config("parameters." . $this->namespace . '.seo');

        return $parameters;
    }    

}