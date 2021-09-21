<?php
 Class Contact extends Controller{

   function index(){

     $data['page_title']="Contact us";
     $this->view("music/contact",$data);
   }

 }


 ?>
