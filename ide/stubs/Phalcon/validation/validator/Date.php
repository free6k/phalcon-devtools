<?php

namespace Phalcon\Validation\Validator;

/**
 * Phalcon\Validation\Validator\Date
 * Checks if a value is a valid date
 * <code>
 * use Phalcon\Validation\Validator\Date as DateValidator;
 * $validator->add('date', new DateValidator([
 * 'format' => 'd-m-Y',
 * 'message' => 'The date is invalid'
 * ]));
 * $validator->add(['date','anotherDate'], new DateValidator([
 * 'format' => [
 * 'date' => 'd-m-Y',
 * 'anotherDate' => 'Y-m-d'
 * ],
 * 'message' => [
 * 'date' => 'The date is invalid',
 * 'anotherDate' => 'The another date is invalid'
 * ]
 * ]));
 * </code>
 */
class Date extends \Phalcon\Validation\Validator
{

    /**
     * Executes the validation
     *
     * @param mixed $validation 
     * @param string $field 
     * @return bool 
     */
    public function validate(\Phalcon\Validation $validation, $field) {}

    /**
     * @param mixed $value 
     * @param mixed $format 
     * @return bool 
     */
    private function checkDate($value, $format) {}

}
