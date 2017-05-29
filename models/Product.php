<?php


  class Product {
        
        private  $productId = NULL;

        private  $productName = NULL;

        private  $productDesc = NULL;

        private  $productPrice = NULL;

        public  function product( ) {

        }

        public  function getProductId (  )

        {

            return $this->ProductId;

        }


        public  function setProductId ( $productId )

        {

            $this->productId = $productId;

        }


        public  function getProductName (  )

        {

            return $this->productName;

        }


        public  function setProductName ( $productName)

        {

            $this->productName = $productName;

        }


        public  function getProductDesc (  )

        {

            return $this->productDesc;

        }


        public  function setProductDesc( $productDesc)

        {

            $this->productDesc = $productDesc;

        }


        public  function getProductPrice(  )

        {

            return $this->productPrice;

        }


        public  function setProductPrice ( $productPrice )

        {

            $this->productPrice = $productPrice;

        }


    }

