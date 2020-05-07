<?php
    namespace App\Repositories\Interfaces;

    interface CompanyInterface
    {
       
        public function all();

        public function create();

        public function update();

        public function delete();

        public function show();

    }

?>