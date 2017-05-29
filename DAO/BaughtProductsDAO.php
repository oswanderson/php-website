<?php
class BaughtProductsDAO {

  public function insert(BaughtProducts $bp){

    $sql = sprintf('insert into BaughtProducts (userId, productId, productName, productDesc, productPrice) '
      .'values("%s","%s","%s", "%s", "%s")',
        $bp->getUserId(),
        $bp->getProductId(),
        $bp->getProductName(),
        $bp->getProductDesc()),
        $bp->getProductPrice()
        );

    mysqli_query( $sql );

    return $bp;
  }

  public function getById($userId){

    $pb = new BaughtProducts();
    $sql = sprintf('select * from BaughtProducts where userId = "%s"',$userId);

    $result = mysql_query($sql);

    while ($response = mysql_fetch_array($result)){
      $pb->setUserId( stripslashes( $response['userId']));
      $pb->setProductId( stripslashes( $response['productId']));
      $pb->setProductDesc( stripslashes( $response['productDesc']));
      $pb->setProductPrice( stripslashes( $response['productPrice']));
      $returnArray = clone $pb;
    }

    return $returnArray;
    }

}
?>
