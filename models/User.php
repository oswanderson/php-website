<?php

    class User {
        
        private $userId = NULL;
        private $firstName = NULL;
        private $lastName = NULL;
        private $address = NULL;        
        private $password = NULL;
        private $email = NULL;
        private $cpf = NULL;

        function User()
        {

        }

        public  function getUserId (  )

        {

            return $this->userId;

        }


        public function getFirstName (  )

        {

            return $this->firstName;

        }


        function setFirstName($firstName)
        {
            $this->firstName = $firstName;
        }
        
        function getLastName (  )

        {

            return $this->lastName;

        }


        public  function setLastName ( $lastName )

        {

            $this->lastName = $lastName;

        }


        public  function getAddress (  )

        {

            return $this->address;

        }


        public  function setAddress ( $address )

        {

            $this->address = $address;

        }

        
         public  function getPassword (  )

        {

            return $this->password;

        }


        public  function setPassword ( $password )

        {

            $this->password= $password;

        }

        public  function getEmail (  )

        {

            return $this->email;

        }


        public  function setEmail ( $email )

        {

            $this->email = $email;

        }
        
        public  function getCpf (  )

        {

            return $this->cpf;

        }


        public  function setCpf ( $cpf )

        {

            $this->cpf = $cpf;

        }

    }