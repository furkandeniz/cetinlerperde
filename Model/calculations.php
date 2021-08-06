<?php
/**
 * Created by PhpStorm.
 * User: furkan
 * Date: 6.08.2021
 * Time: 16:15
 */

class Calculations extends Model {

    public function getAll() {
        return $this->db->query('SELECT * FROM calculation_method WHERE status = 1')->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($name, $method, $widthArea, $widthValue, $minWidth, $widthIncrease, $w1, $w2, $heightArea, $heightValue, $minHeight, $heightIncrease, $h1, $h2, $whMinHeight, $whHeightIncrease, $whW1, $whW2, $whH1, $whH2, $amount) {
        $query = $this->db->prepare('INSERT INTO calculation_method SET rule_name = :prule_name, form_of_calculation = :pform_of_calculation, width_before_the_procedure = :pwidth_before_the_procedure, width_before_the_procedure_number = :pwidth_before_the_procedure_number, width_min_width = :pwidth_min_width, width_amount_increase = :pwidth_amount_increase, width_w1 = :pwidth_w1, width_w2 = :pwidth_w2, height_before_the_procedure = :pheight_before_the_procedure, height_before_the_procedure_number = :pheight_before_the_procedure_number, height_min_height = :pheight_min_height, height_amount_increase = :pheight_amount_increase, height_w1 = :pheight_w1, height_w2 =:pheight_w2, wh_min_wh = :pwh_min_wh, wh_amount_increase = :pwh_amount_increase, wh_w1 = :pwh_w1, wh_w2 = :pwh_w2, wh_h1 = :pwh_h1, wh_h2 = :pwh_h2, amount = :pamount');
        $create = $query->execute(array(
            'prule_name' => $name,
            'pform_of_calculation' => $method,
            'pwidth_before_the_procedure' => $widthArea,
            'pwidth_before_the_procedure_number' => $widthValue,
            'pwidth_min_width' => $minWidth,
            'pwidth_amount_increase' => $widthIncrease,
            'pwidth_w1' => $w1,
            'pwidth_w2' => $w2,
            'pheight_before_the_procedure' => $heightArea,
            'pheight_before_the_procedure_number' => $heightValue,
            'pheight_min_height' => $minHeight,
            'pheight_amount_increase' => $heightIncrease,
            'pheight_w1' => $h1,
            'pheight_w2' => $h2,
            'pwh_min_wh' => $whMinHeight,
            'pwh_amount_increase' => $whHeightIncrease,
            'pwh_w1' => $whW1,
            'pwh_w2' => $whW2,
            'pwh_h1' => $whH1,
            'pwh_h2' => $whH2,
            'pamount' => $amount,
        ));
        if($create) {
            $lastId = $this->db->lastInsertId();
            return $lastId;
        }
    }
}