<?php 
	include '../config/main.inc.php';

	function listPosts(){
        global $cnx;
        
        $sql = "SELECT * FROM post ORDER BY id DESC";
    
        $req = $cnx->query($sql) or die(print_r($cnx->errorInfo( )));
    
        $posts = [];
    
        while($rows = $req->fetch()){
        $posts[] = $rows;
        }   
    
        $req->closeCursor();
        return $posts;
    }
    
    

    function deletePost($id){
        global $cnx;

        $sql = 'DELETE FROM post WHERE id= "'.$id.'"';
        
        $cnx->exec($sql) or die(print_r($cnx->errorInfo( )));
        
    }

    function editPost($id,$title,$desc,$image,$public){
        global $cnx;

        $sql = 'UPDATE post SET title=:title,description=:desc,image=:image,public=:public where id='.$id;
        
        $req = $cnx->prepare($sql)  or die(print_r($cnx->errorInfo( )));

        $req -> execute(array(
            'tiltle' =>  $title,
            'desc' =>  $desc,
            'image' =>  $image,
            'public'  =>  $public
        ));

    }

    function strlList($post){
        $post = substr($post, 10, 150) .'...';

        echo $post;
}

function listPagination($debut,$nbre_element){
    global $cnx;
    
    $sql = "SELECT * FROM post ORDER BY id DESC limit $debut,$nbre_element";

    $req = $cnx->query($sql) or die(print_r($cnx->errorInfo( )));

    $aff = [];

    while($rows = $req->fetch()){
    $aff[] = $rows;
    }   

    $req->closeCursor();
    return $aff;
}
 ?>
