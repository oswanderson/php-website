  <?php
      class BaughtProducts {

          private $purchaseId = NULL;
          private $userId = NULL;
          private $productId = NULL;
          private $productName = NULL;
          private $productDesc = NULL;
          private $productPrice = NULL;

          public function BaughtProducts(){

          }

          public function getPurchaseId(){
              return $this->purchaseId;
          }

          public function setPurchaseId($purchaseId){
              $this->purchaseId = $purchaseId;
          }

          public function getUserId(){
              return $this->userId;
          }

          public function setUserId($userId){
              $this->userId = $userId;
          }

          public function getProductId(){
              return $this->productId;
          }

          public function setProductName($productName){
              $this->productId = $productName;
          }

          public function getProductName(){
              return $this->productName;
          }

          public function setProductId($productName){
              $this->productName = $productName;
          }

          public function getProductDesc(){
              return $this->productDesc;
          }

          public function setProductDesc($productDesc){
              $this->productDesc = $productDesc;
          }

          public function getProductPrice(){
              return $this->productPrice;
          }

          public function setProductPrice($productPrice){
              $this->productPrice = $productPrice;
          }

      }

?>
