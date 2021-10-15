<?php namespace App\Http\Controllers;

use Session;
use Request;
use DB;
use CRUDbooster;
use crocodicstudio\crudbooster\controllers\CBController;

class SiswaController extends CBController {


    public function cbInit() {
        # START CONFIGURATION DO NOT REMOVE THIS LINE
        $this->table               = 'siswas';
        $this->primary_key         = 'id';
        // $this->title_field         = "name";
        $this->button_action_style = 'button_icon'; 
        $this->button_import       = FALSE; 
        $this->button_export       = FALSE; 
        # END CONFIGURATION DO NOT REMOVE THIS LINE
    
        # START COLUMNS DO NOT REMOVE THIS LINE
        $this->col = array();
        $this->col[] = array("label"=>"Nama","name"=>"nama");
        $this->col[] = array("label"=>"Kelas","name"=>"kelas");
        $this->col[] = array("label"=>"Alamat","name"=>"alamat");
        $this->col[] = array("label"=>"Skor","name"=>"skor");      
        # END COLUMNS DO NOT REMOVE THIS LINE

        # START FORM DO NOT REMOVE THIS LINE
        $this->form = array();      
        $this->form[] = array("label"=>"Nama","name"=>"nama",'required'=>true,'type'=>'text');
        $this->form[] = array("label"=>"Kelas","name"=>"kelas",'required'=>true,'type'=>'text');        
        $this->form[] = array("label"=>"Alamat","name"=>"alamat","type"=>"text");                                          
        $this->form[] = array("label"=>"Skor","name"=>"skor","type"=>"number", "value"=>0);                       
        # END FORM DO NOT REMOVE THIS LINE
                
    }

    public function hook_before_edit(&$postdata,$id) { 
        
    }
    public function hook_before_add(&$postdata) {      
        
    }
}
