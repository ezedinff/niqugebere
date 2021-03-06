<?php
namespace App\EzBuilder;
class EzTableBuilder{
    static public function getTable($inputs, $values){
        $table = self::getTableHeader($inputs['headers']);
        $table.= self::getTableBody($inputs['columns'],$inputs['buttons'],$values);
        return $table;
    }
    static public function getTableHeader($headers){
        $part1 = '<table class="table-responsive bordered striped">
                    <thead>
                      <tr>';
        $part2 = '<th>No.</th>';
        for ($i=0; $i < sizeof($headers); $i++){
            $part2 .= '<th>'.$headers[$i] . '</th>';
        }
        $part3 = '    </tr>
                    </thead>';
        return $part1 . $part2 . $part3;
    }
    static public function getTableBody($columns,$buttons,$values){
        $part1 = '<tbody>';
        $j = 1;
        $part2final = '';
        $e = "/edit";
        foreach ($values as $value){
            $part2start = '<tr><td>'.$j.'</td>';
            for ($i=0; $i < (sizeof($columns)); $i++){
                $part2start .= '<td>'.$value[$columns[$i]] .'</td>';
            }
            for ($i=0; $i < (sizeof($buttons)-1); $i++){
                $edit = $buttons['edit'] .'/'.$value->id .$e;
                $delete = $buttons['delete'] .'/' .$value->id;
                $part2start .= '<td>'.self::getTableEditButton($edit);
                $part2start .= self::getTableDeleteButton($delete).'</td>';
            }
            $part2start .= '</tr>';
            $part2final .= $part2start;
            $j++;
        }
        $part2final .= '</tr></tbody></table>';
        return $part1 . $part2final;

    }
    static public function getTableEditButton($action){
        return '<a href="'.url($action).'" class="fa fa-edit btn teal white-text"></a>';
    }
    static public function getTableDeleteButton($action){
        $postForm = '
			<form action = "'.url($action).'" method = "POST" style="display:inline;">
                '.method_field('DELETE').'
                '.csrf_field().'
                <button type = "submit" class="btn wave-effects red fa fa-trash-o"></button>
		    </form>';
        return $postForm;
    }
}