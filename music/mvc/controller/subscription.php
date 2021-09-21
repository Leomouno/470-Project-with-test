<?php
 Class Subscription extends Controller{

   function index(){

     $data['page_title']="Subscription";
     $this->view("music/subscription",$data);
   }

 }
