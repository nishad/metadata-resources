<?php

    namespace OpenLibrary\Metadata\Schemas\WGS84\Properties;
    use OpenLibrary\Metadata\Schemas\WGS84\Property;

    class Long extends Property
    {
        private $uriPart = 'long';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'long';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Longitude', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'Longitude (λ) - may be specified in DMS, Decimal Degrees etc.';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
