<?php

class SpController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

var_dump('indddddß');exit;
        $kimono_result = json_decode(file_get_contents('https://www.kimonolabs.com/api/1zt5pqx6?apikey=woZPkSkRFS6bkosi4zQSAykupYsDwXYW'));

        $this->view->results = $kimono_result->results->collection1;

/*
        print_r('<pre>');
        var_dump($kimono_result->results->collection1);
        var_dump($kimono_result);
        print_r('</pre>');
        exit;

/*
        print_r('<pre>');
        var_dump($kimono_result);
        print_r('</pre>');

        exit;
*/
    }

}

