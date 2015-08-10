<?php

    namespace OpenLibrary\Metadata\Schemas\OpenAnnotation\Properties;

    use OpenLibrary\Metadata\Schemas\OpenAnnotation\Property;

    /**
     * Class HasTarget
     *
     * @package OpenLibrary\Metadata\Schemas\OpenAnnotation\Properties
     */
    class HasTarget extends Property
    {
        /**
         * @var string
         */
        protected $uri = "alternative";

        /**
         * @var string
         */
        protected $label = "Alternative";

        /**
         * @var string
         */
        protected $name = "alternative";//becomes dc.contributor

        /**
         * @param            $value
         * @param bool|false $label
         */
        public function __construct($value,$label = false){
            if(!$label){
                $label = $this->label;
            }
            parent::__construct($value,$this->uri,$this->name,$label);
        }
    }