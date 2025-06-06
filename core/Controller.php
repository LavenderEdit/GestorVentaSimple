<?php
namespace Core;

class Controller
{
    public function loadModel(string $model)
    {
        $modelPath = "/GestorSimple/models/" . $model . ".php";
        if (file_exists($modelPath)) {
            require_once $modelPath;
            $fullModelClass = "\\Models\\" . $model;
            return new $fullModelClass();
        } else {
            die("El modelo {$model} no existe.");
        }
    }

    public function loadView(string $view, array $data = [])
    {
        $viewPath = $_SERVER['DOCUMENT_ROOT'] . "/GestorSimple/views/" . $view . ".php";
        if (file_exists($viewPath)) {
            extract($data);
            require_once $viewPath;
        } else {
            die("La vista con la ruta {$viewPath}, {$view} no existe.");
        }
    }
}
