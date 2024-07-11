<?php
include 'db.php' ;
$sql ="SELECT user_id ,product_id FROM user_interaction";
$result = mysqli_query($conn,$sql);
$userPreferences = [];
while($row = mysqli_fetch_assoc($result)){
    $userPreferences[$row['user_id']] = $row['product_id'];
}

class TreeNode{
    public $productId ;
    public $children =[];
    public function __construct($productId){
        $this->productId = $productId ;
    }
}

class PreferenceTree {
    public $root;
    public function __construct(){
        $root = new TreeNode(null);
    }  

    public function addUserPreferences($userId,$preferences){
        $currentNode = $this->root;
        foreach($preferences as $productId){
            if(!isset($currentNode->children[$productId])){
                $currentNode->children[$productId] = new TreeNode($productId);
            }
            $currentNode = $currentNode->children[$productId];
        }   
    }

    public function getRecommendations($userId,$preferences){
        $recommanndations = [];
        foreach($preferences as $productId){
            if(isset($this->root->children[$productId])){
                $childNode = $this->root->chidren[$productId];
                foreach($childNode->children as $recommendedProductId => $node){
                    if (!in_array($recommendedProductId, $preferences)) {
                        $recommendations[] = $recommendedProductId;
                    }
                }
            }
        }
        return $recommendations;
    }

}

$preferenceTree = new PreferenceTree();
foreach ($userPreferences as $userId => $preferences) {
    $preferenceTree->addUserPreferences($userId, $preferences);
}

function getRecommendationsForUser($userId, $preferences, $preferenceTree) {
    return $preferenceTree->getRecommendations($userId, $preferences);
}
?>