<?php
class ProductDAO{

  public function insert( Product $productObj){

    $sql = sprintf('insert into products (productName, productDesc,productPrice) '
      .'values(%s,%s,%s,%s,%s)',
        addslashes($productObj->getProductName()),
        addslashes($productObj->getProductDesc()),
        addslashes($productObj->getProductPrice())
      );

      mysqli_query($sql);
      $productObj->setUserId(mysql_insert_id());

      return $productObj;
    }

    public function getAll()
    {
      $productObj = new User();
      $returnArray = array();

      $sql = 'select * from products';
      $result = mysql_query($sql);

      while($response = mysql_fetch_array($result)){
        $productObj->setUserId(stripslashes($response['productId']));
        $productObj->setFirstName(stripslashes($response['productName']));
        $productObj->setLastName( stripslashes( $response['productDesc']));
        $productObj->setAddress( stripslashes( $response['productPrice']));

        $returnArray[] = clone $productObj;
      }

      return $returnArray;
    }

    public function getById($id){

      $productObj = new Product();
      $sql = sprintf( 'select * from users where userId = "%s"', $id);

            $result = mysql_query( $sql );

            while ( $response = mysql_fetch_array( $result ) ) {


                $productObj->setProductId( stripslashes( $response['productId'] ) );

                $productObj->setProductName( stripslashes( $response['productName'] ) );

                $productObj->setProductDesc( stripslashes( $response['productDesc'] ) );

                $productObj->setProductPrice( stripslashes( $response['productPrice'] ) );




                $returnArray = clone $productObj;

            }

            return $returnArray;

        }

    }
