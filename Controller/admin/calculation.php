<?php
/**
 * Created by PhpStorm.
 * User: furkan
 * Date: 2.04.2021
 * Time: 20:27
 */

class Calculation extends Controller {

    public function add(){

        $this->view('admin/calculationadd');
    }

    public function list(){
        $calculations = $this->model('calculations');
        $calculationsList = $calculations->getAll();
        $this->view('admin/calculationlist', [
            'calculationsList' => $calculationsList
        ]);
    }

    public function create(){
        if(isset($_POST)) {

            $name = $_POST['name'];
            $method = $_POST['method'];
            $widthArea = $_POST['width-area'];
            $widthValue = $_POST['width-value'];
            $minWidth = $_POST['min-width'];
            $widthIncrease = $_POST['width-increase'];
            $w1 = $_POST['w1'];
            $w2 = $_POST['w2'];
            $heightArea = $_POST['height-area'];
            $heightValue = $_POST['height-value'];
            $minHeight = $_POST['min-height'];
            $heightIncrease = $_POST['height-increase'];
            $h1 = $_POST['h1'];
            $h2 = $_POST['h2'];
            $whMinHeight = $_POST['wh-min-height'];
            $whHeightIncrease = $_POST['wh-height-increase'];
            $whW1 = $_POST['wh-w1'];
            $whW2 = $_POST['wh-w2'];
            $whH1 = $_POST['wh-h1'];
            $whH2 = $_POST['wh-h2'];
            $amount = $_POST['amount-number'];

            $calculation = $this->model('calculations');
            $calculationCreate = $calculation->create($name, $method, $widthArea, $widthValue, $minWidth, $widthIncrease, $w1, $w2, $heightArea, $heightValue, $minHeight, $heightIncrease, $h1, $h2, $whMinHeight, $whHeightIncrease, $whW1, $whW2, $whH1, $whH2, $amount);
            header('Location: calculationmethodlist');
        }
    }
}