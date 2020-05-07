<?
    namespace App\Repositories;

    use App\Repositories\Interfaces\RepositoryInterface;
    use App\Models\CompanyModel;
    class CompanyRepository implements RepositoryInterface
    {
        public function all()
        {

        }

        public function create()
        {

        }

        public function update()
        {
        }

        public function delete()
        {

        }

        public function findById($id)
        {
            return CompanyModel::find($id);
        }
           /**
         * @desc Show the job detail
         */
        public function show()
        {

        }
    }
?>