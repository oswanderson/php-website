<?php

class UserDAO {

        public function insert(User $userObj)
        {      
            $servername = "localhost";
            $username = "root";
            $password = "";
            // Create connection
            
            $conn = new mysqli($servername, $username, $password, "project", 3305);

            // Check connection
            if ($conn->connect_error) {
                echo ''.$conn->connect_error;
                return false;
            }

            $sql = 'insert into users (firstName,lastName,address,cpf,password,email)'
                    .'values( \''.$userObj->getFirstName().'\','
                    .'\''.$userObj->getLastName().'\','
                    .'\''.$userObj->getAddress().'\','
                    .'\''.$userObj->getCpf().'\','
                    .'\''.$userObj->getPassword().'\','
                    .'\''.$userObj->getEmail().'\');';

            if ($conn->query($sql) == FALSE){
                echo $conn->connect_error;
                return false;
            }
            return true;
        }

        public function getAll( )
        {
            $userObj = new User( );

            $returnArray = array( );    

            $sql = 'select * from users';

            $result = mysql_query( $sql );

            while( $response = mysql_fetch_array( $result ) ) {            

                $userObj->setUserId( stripslashes( $response['userId'] ) );

                $userObj->setFirstName( stripslashes( $response['firstName'] ) );

                $userObj->setLastName( stripslashes( $response['lastName'] ) );

                $userObj->setAddress( stripslashes( $response['address'] ) );

                $userObj->setEmail( stripslashes( $response['email'] ) );

                $userObj->setCpf( stripslashes( $response['cpf'] ) );        

                $returnArray[] = clone $userObj;
            }
            return $returnArray;       

        }
        
        public function getById( $id )
        {

            $userObj = new User( );

            $sql = sprintf( 'select * from users where userId = "%s"',

                            $id

                          );

            $result = mysql_query( $sql );

            while ( $response = mysql_fetch_array( $result ) ) {

                
                $userObj->setUserId( stripslashes( $response['userId'] ) );

                $userObj->setFirstName( stripslashes( $response['firstName'] ) );

                $userObj->setLastName( stripslashes( $response['lastName'] ) );

                $userObj->setAddress( stripslashes( $response['address'] ) );

                $userObj->setEmail( stripslashes( $response['email'] ) );

                $userObj->setCpf( stripslashes( $response['cpf'] ) );
                

                $returnArray = clone $userObj;

            }

            return $returnArray;

        }

    }