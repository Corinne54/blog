<?php

namespace App\config;
use App\src\controller\BackController;
use App\src\controller\ErrorController;
use App\src\controller\FrontController;
use Exception;

class Router
{
    private $frontController;
    private $errorController;
    private $backController;
    private $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->frontController = new FrontController();
        $this->backController = new BackController();
        $this->errorController = new ErrorController();
    }

    public function run()
    {
        $route = $this->request->getGet()->get('route');
      var_dump($_GET);
      var_dump($this->request->getGet());
        try{
            if(isset($route))
            {
                if($route === 'article'){
                    $this->frontController->article($this->request->getGet()->get('articleId'));
                }

                elseif($route === 'adminArticle'){
                    $this->backController->adminArticle($this->request->getGet()->get('articleId'));
                }
                elseif ($route === 'addArticle'){
                    $this->backController->addArticle($this->request->getPost());
                }

// Add a comment
                else if (filter_input(INPUT_GET, 'route', FILTER_SANITIZE_STRING) === 'postComment') {
                    $this->frontController->addComment(filter_input(INPUT_GET, 'idArt', FILTER_SANITIZE_NUMBER_INT), filter_input_array(INPUT_POST));
                }

                else if ('route' === 'deleteComment') {
                    $this->backController->deleteComment(
                        $this->request->getGet()->get('commentId')
                    );
                }


                else if($_GET['route'] === 'EditComment'){
                    $this->backController->EditComment($this->request->getGet()->get('commentId'));
                }

                else if($_GET['route'] === 'updateComment'){
                    $this->backController->updateArticle($this->request->getPost());
                }




                else if($route=='adminHome'){

                 $this->backController->adminHome();
                }


                else if($_GET['route'] === 'deleteArticle' ){
                    $this->backController->deleteArticle($this->request->getGet()->get('articleId'));
                }


                else if($_GET['route'] === 'EditArticle'){
                    $this->backController->EditArticle($this->request->getGet()->get('articleId'));
                }

                else if($_GET['route'] === 'updateArticle'){
                    $this->backController->updateArticle($this->request->getPost());
                }

                else{
                    $this->errorController->errorNotFound();
                }
            }
            else{
                $this->frontController->home();
            }
        }
        catch (Exception $e)
        {
            $this->errorController->errorServer();
        }
    }
}