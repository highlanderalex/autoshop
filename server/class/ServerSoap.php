<?php
    
	require_once (dirname(__FILE__).'/../models/CategoryModel.php');
	require_once (dirname(__FILE__).'/../models/AutoModel.php');
	require_once (dirname(__FILE__).'/../models/OrderModel.php');

    class ServerSoap 
	{
		private $model;
		
		public function __construct()
		{
			
		}
		
		public function getCategories()
        {
			$model = new CategoryModel();
            $res = $model->returnCategories();
            return $res;
        }
		
		public function getCars()
        {
			$model = new AutoModel();
            $res = $model->returnAllAuto();
            return $res;
        }
		
		public function getImage($id)
        {
			$model = new AutoModel();
            $res = $model->returnImage($id);
			if(!empty($res))
			{
				return $res;
			}
			else
			{
				throw new SoapFault('Server', 'ID auto do not exist');
			}
        }
		
		public function getGalary($id)
        {
			$model = new AutoModel();
            $res = $model->returnGalary($id);
			if(!empty($res))
			{
				return $res;
			}
			else
			{
				throw new SoapFault('Server', 'ID auto do not exist');
			}
        }
		
		public function getInfoAuto($id)
        {
			$model = new AutoModel();
            $res = $model->returnInfoAuto($id);
			if(!empty($res))
			{
				return (object)$res;
			}
			else
			{
				throw new SoapFault('Server', 'ID auto do not exist');
			}
        }
		
		public function getSearchResult($obj)
        {
			$model = new AutoModel();
            $res = $model->returnSearchResult($obj);
			if(!empty($res))
			{
				return $res;
			}
			else
			{
				throw new SoapFault('Server', 'Search return empty');
			}
        }
		
		public function insertOrder($data)
        {
			$model = new OrderModel();
            $res = $model->insertOrder($data);
			if($res)
			{
				return $res;
			}
			else
			{
				throw new SoapFault('Server', 'Order not insert');
			}
        }
		
		public function getCarsByCat($id)
        {
			$model = new AutoModel();
            $res = $model->returnAutoByCat($id);
			if(!empty($res))
			{
				return $res;
			}
			else
			{
				throw new SoapFault('Server', 'ID category do not exist');
			}
        }
    }

