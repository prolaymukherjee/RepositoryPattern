<?php


namespace App\repository;


use App\Employee;

class CommonEloquent implements CommonRepository
{
    private $model;

        public function __construct(Employee $model){
            $this->model = $model;
        }

        public function getAll(){
            return $this->model->all();

        }

        public function getById($id){
            return $this->model->findById($id);
        }

        public function create(array $attributes){
            return $this.$this->model->create($attributes);
        }
        public function update($id, array $attributes){
            $employee = $this->model->findOrFail($id);
            $employee->update($attributes);
            return $employee;
        }

        public function delete($id){
            $this->model->getById(id)->delete();
            return true;
        }
}