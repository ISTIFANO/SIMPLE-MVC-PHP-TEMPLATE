<?php 


class Posts{
    function __construct()
    {
        $this->postModes= model('Post');
        
    }

    public function index(){
        
    }

    public function edit($id){

      $data =  $this->postModes->getPost($id);

    view('posts/edit',$post);
    }




}











?>