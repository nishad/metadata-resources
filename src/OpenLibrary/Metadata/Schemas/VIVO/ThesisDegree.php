<?php
    /**
     * Created by PhpStorm.
     * User: seanmcna
     * Date: 11/08/2015
     * Time: 2:59 PM
     */

    namespace OpenLibrary\Metadata\Schemas\VIVO;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;


    trait ThesisDegree
    {
        /**
         * @var AbstractProperty
         */
        protected $Degree;

        /**
         * @return AbstractProperty
         */
        public function getDegree ()
        {
            return $this->Degree;
        }


    }
