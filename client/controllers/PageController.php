<?php
    
    class PageController 
	{
		private $view;
		private $client;
		
		public function __construct()
		{
            $this->view = new View();
			$this->client = new SoapClient(SOAP_AUTO);
			$this->view->categories = $this->client->getCategories();
			
		}
		
		public function index()
		{
			/*try
			{
				$this->view->result = $this->client->getData(3);
			}
			catch (SoapFault $e)
			{
				$this->view->result = $e->getMessage();
			}*/
			$this->view->cars = $this->client->getCars();
			$this->view->render('index');
		}
		
		public function error()
		{		
			$this->view->render('404');
		}
		
		public function detail()
		{
			$id = (int)$_GET['id'];
			try
			{
				$this->view->image = $this->client->getImage($id);
				$this->view->auto = $this->client->getInfoAuto($id);
			}
			catch (SoapFault $e)
			{
				$this->view->error = $e->getMessage();
			}
			$this->view->idauto = $id;
			$this->view->render('detail');
		}
		
		public function category()
		{
			$id = (int)$_GET['id'];
			try
			{
				$this->view->cars = $this->client->getCarsByCat($id);
			}
			catch (SoapFault $e)
			{
				$this->view->error = $e->getMessage();
			}
			$this->view->render('category');
		}
		
		public function order()
		{
			if(isset($_POST['order']))
			{
				$form = new ValidForm($_POST);
				$data = $form->validData();
                if (is_array($data))
				{
					try
					{
						$this->client->insertOrder($data);
						$this->view->success = 'Thanks for your choice';
					}
					catch (SoapFault $e)
					{
						$this->view->error = $e->getMessage();
					}
				}
				else
				{
					$this->view->error = $data;
				}
			}
			$this->view->render('order');
		}
		
		public function search()
		{
			if (isset($_POST['search']))
			{
				$data['model'] = $_POST['model'];
				$data['year'] = $_POST['year'];
				$data['color'] = $_POST['color'];
				$data['speed'] = (int)$_POST['speed'];
				$data['volume'] = (int)$_POST['volume'];
				$data['price'] = (float)$_POST['price'];
				try
				{
					$this->view->search = $this->client->getSearchResult((object)$data);
				}
				catch (SoapFault $e)
				{
						$this->view->message = $e->getMessage();
				}
			}
			$this->view->render('search');
		}
		
    }

