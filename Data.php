<?php


class Data
{
    protected $data = [
        ['id' => 1, 'parent_id' => null, 'name' => 'Овощи'],
        ['id' => 2, 'parent_id' => null, 'name' => 'Фрукты'],
        ['id' => 3, 'parent_id' => 1, 'name' => 'капуста'],
        ['id' => 4, 'parent_id' => 2, 'name' => 'яблоки'],
        ['id' => 5, 'parent_id' => 2, 'name' => 'грушы'],
        ['id' => 6, 'parent_id' => 1, 'name' => 'картошка'],
        ['id' => 7, 'parent_id' => null, 'name' => 'Молочное'],
        ['id' => 8, 'parent_id' => 4, 'name' => 'Голден'],
        ['id' => 9, 'parent_id' => 6, 'name' => 'картофель розовый'],
        ['id' => 10, 'parent_id' => 7, 'name' => 'сыр'],
        ['id' => 11, 'parent_id' => 9, 'name' => 'картофель розовый мытый'],
    ];

    public function getData()
    {
        return $this->data;
    }
}