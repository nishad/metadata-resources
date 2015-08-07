<?php

    namespace OpenLibrary\Metadata\Schemas\WGS84;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    class Property extends AbstractProperty {

        private $uri = " http://www.w3.org/2003/01/geo/wgs84_pos#";

        private $label = "";

        private $name = "wgs84_pos";

        private $description = "Basic Geo (WGS84 Lat/Long) Property";

        private $value;

        public function __construct($value, $uri = false, $name = false, $label = false){
            if($uri){
                $this->uri .= "{$uri}";
            }

            if($name){
                $this->name .= ".{$name}";
            }

            if($label){
                $this->label = $label;
            }

            $this->value = $value;
        }

        /**
         * @return string
         */
        public function getUri ()
        {
            return $this->uri;
        }

        /**
         * @param string $uri
         */
        public function setUri ($uri)
        {
            $this->uri = $uri;
        }

        /**
         * @return string
         */
        public function getLabel ()
        {
            return $this->label;
        }

        /**
         * @param string $label
         */
        public function setLabel ($label)
        {
            $this->label = $label;
        }

        /**
         * @return string
         */
        public function getName ()
        {
            return $this->name;
        }

        /**
         * @param string $name
         */
        public function setName ($name)
        {
            $this->name = $name;
        }

        /**
         * @return mixed
         */
        public function getValue ()
        {
            return $this->value;
        }

        /**
         * @param mixed $value
         */
        public function setValue ($value)
        {
            $this->value = $value;
        }

        /**
         * @return string
         */
        public function getDescription ()
        {
            return $this->description;
        }

        /**
         * @param string $description
         */
        public function setDescription ($description)
        {
            $this->description = $description;
        }
    }
