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


                else if ($route === 'postComment') {
                    $this->frontController->addComment(filter_input(INPUT_GET, 'idArt', FILTER_SANITIZE_NUMBER_INT), filter_input_array(INPUT_POST));

                }

                else if ($route === 'deleteComment') {
                    $this->backController->deleteComment($this->request->getGet()->get('commentId'));
                }


                else if($_GET['route'] === 'EditComment'){
                    $this->backController->EditComment($this->request->getGet()->get('commentId'));
                }

                else if($_GET['route'] === 'updateComment'){
                    $this->backController->updateComment($this->request->getPost());
                }

                else if ($_GET['route']=== 'reportComment') {
                    $this->frontController->reportComment(filter_input(INPUT_GET, 'commentId', FILTER_SANITIZE_NUMBER_INT), filter_input(INPUT_GET, 'articleId'));
                }

                else if ($_GET['route']=== 'cancelReportComment') {
                    $this->backController->cancelReportComment(filter_input(INPUT_GET, 'commentId', FILTER_SANITIZE_NUMBER_INT), filter_input(INPUT_GET, 'articleId'));
                }

                else if($route=='adminHome') {
                    if (isset($_SESSION['id'])) {

                        $this->backController->adminHome();
                    } else {
                        $this->frontController->home();
                    }
                }

                else if ($route==='register') {

               $this->frontController->register($this->request->getPost());
                }


                else if ($route==="updatePassword") {

                    $this->backController->updatePassword($this->request->getPost());
                }

                elseif($route == 'logIn'){
                    $this->frontController->logIn($this->request->getPost());
                }

                elseif($route == 'logout'){
                    $this->backController->logout();
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

                else if($_GET['route']==='quisuisje'){

                    $this->frontController->quisuisje();
                }

                else if($_GET['route']==='leschapitres'){

                    $this->frontController->leschapitres();
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