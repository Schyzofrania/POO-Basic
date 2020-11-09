<?php

namespace App;

class ValidationException extends \Exception {}

class Car 
    {
        private $hasParkBrake;
        private $currentSpeed;
        
        public function __construct($hasParkBrake)
        {
            $this->hasParkBrake = $hasParkBrake;
            $this->currentSpeed = 0;
        }

        public function setParkBrake($hasParkBrake)
        {
            $this->hasParkBrake = $hasParkBrake;
        }

        public function start()
        {
            if($this->hasParkBrake == 1)
            {
                throw new ValidationException('Exception catched<br>');
            }
            $this->currentSpeed = 15;
            return 'Started <br>';
        }
    }