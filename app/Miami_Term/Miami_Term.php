<?php
/**
 * Created by PhpStorm.
 * User: sharman4
 * Date: 7/12/18
 * Time: 4:20 PM
 */

namespace App\Miami_Term;


class Miami_Term
{
private $term_name;
private $term_code;

public function __construct($term_name, $term_code)
{
    $this->term_name = $term_name;
    $this->term_code = $term_code;
}

public static function getMiamiValues(array $data): Miami_Term
{
    if(!isset($data['term_name'])){
            throw new \InvalidArgumentException('Term name is required');
    }
    elseif(!isset($data['term_code'])){
        throw new \InvalidArgumentException('Term code is required');
    }

 return new Miami_Term($data['term_name'],$data['term_code']);
}

public function term_name():string
{
    return $this->term_name;
}

public function term_code():string
{
    return $this->term_code;
}
}