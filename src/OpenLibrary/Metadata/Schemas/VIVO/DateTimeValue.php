<?php
    /**
     * Created by PhpStorm.
     * User: seanmcna
     * Date: 11/08/2015
     * Time: 2:59 PM
     */

    namespace OpenLibrary\Metadata\Schemas\VIVO;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;


    trait DateTimeValue
    {
        /**
         * @var AbstractProperty
         */
        protected $GraduationDate;

        /**
         * @return AbstractProperty
         */
        public function getGraduationDate ()
        {
            return $this->GraduationDate;
        }

    }
