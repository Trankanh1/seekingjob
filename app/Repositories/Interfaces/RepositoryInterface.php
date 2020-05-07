<?php
    namespace App\Repositories\Interfaces;

    interface RepositoryInterface
    {
       
        public function all();

        public function create();

        public function update();

        public function delete();

        public function show();

    }

?>