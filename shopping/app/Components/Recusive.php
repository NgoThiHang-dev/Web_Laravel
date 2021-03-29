<?php
namespace App\Components;

class Recusive{

    private $data;
    private $htmlSlelect='';
    public function __construct($data)
    {
        $data->data=$data;
    }


    function categoryRecusive($id = 0, $text='')
    {
        foreach ($this->data as $value)
        {
            if ($value['parent_id'] == $id){
                $this->htmlSlelect .= "<option>".$text.$value['name']."</option>";
                $this->categoryRecusive($value['id'], $text.'-');
            }
        }
        return $this->htmlSlelect;
    }


}

