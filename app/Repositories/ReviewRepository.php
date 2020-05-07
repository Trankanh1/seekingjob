<?php
    namespace App\Repositories;

    use App\Repositories\Interfaces\RepositoryInterface;
    use Illuminate\Support\Facades\Model;
    use App\Models\JobModel;

    class ReviewRepository implements RepositoryInterface
    {

        /**
         * @desc List all the jobs
         */
        public function all()
        {
        
        }

        /**
         * @desc create a new job
         */
        public function create()
        {

        }

        /**
         * @desc Update the job information
         */
        public function update()
        {

        }
        
        /**
         * @desc Remove the job
         */
        public function delete()
        {

        }

        /**
         * @desc Show the job detail
         */
        public function show()
        {

        }

        /**
         * @desc Set the associated model
         */
        public function setModel(Model $model)
        {
            $this->model = $model;
            return $this;
        }

        /**
         * 
         * @desc Get the associated model
         */
        public function getModel()
        {
            return $this->model;
        }
    }

?>