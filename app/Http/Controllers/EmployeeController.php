<?php

namespace App\Http\Controllers;
use App\repository\CommonRepository;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    private $repository;
    public function __construct(CommonRepository $repository)
    {
        $this ->repository = $repository;
    }
    public  function getAll(){
        return $this->repository->getAll();
    }
}
