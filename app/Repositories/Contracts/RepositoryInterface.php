<?php
namespace App\Repositories\Contracts;

interface RepositoryInterface
{

    /**
     * Fetch all data
     * Pass column(s) if want to fetch only specified column
     * else will fetch all by default
     *
     * @param array $columns
     * @return mixed
     */
    public function all($columns = array('*'));

    public function paginate($perPage = 15, $columns = array('*'));

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function find($id, $columns = array('*'));

    public function findBy($field, $value, $columns = array('*'));

}