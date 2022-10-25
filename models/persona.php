<?php
class Persona extends Model{
    public $id;
    public $contact_no;
    public $lastname;
    public $createdtime;


    //contruir objeto persona
    public function __construct($id, $contact_no,$lastname,$createdtime)
    {
        parent::__construct();
        $this->id = $id;
        $this->contact_no = $contact_no;
        $this->lastname = $lastname;
        $this->createdtime = $createdtime;
    }

}
?>