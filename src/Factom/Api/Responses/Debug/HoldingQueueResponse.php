<?php
namespace Factom\Api\Responses\Debug;

//one-to-one mapping for main object
class HoldingQueueResponse
{
    public $Messages;                   //String
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}