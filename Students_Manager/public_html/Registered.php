<?php
$n_Name=$_POST["n_Name"];
$n_Mail=$_POST["n_Email"];
$n_Age=$_POST["n_Age"];
$n_Phone=$_POST["n_PhNum"];
$pref_email=$_POST["pref_email"];
$pref_phone=$_POST["pref_phone"];
$levelmenu=$_POST["levelmenu"];
$n_Date=$_POST["n_date"];
$technical_info=$_POST["n_tech"];
$personal_info=$_POST["n_PI"];
$stfromhome=$_POST["sfromhome"];
class Student{
    private int $Stu_id;
    public string $Name;
    public string $Email;
    public int $Age;
    public string $Phone;
    public string $Date;
    public function __construct($n_id,$n_Name,$n_Mail,$n_Age,$n_Phone,$n_Date) {
        $this->$Stu_id=$n_id;      
        $this->Name=$n_Name;
        $this->Email=$n_Mail;
        $this->Age=$n_Age;
        $this->Phone=$n_Phone;
        $this->Date=$n_Date;
    }
    public function SetId($n_id) {
        $this-> $Stu_id=$n_id;
    }
    public function GetId() {
        return $this->n_id;
    }
    public function SetName($n_Name) {
        $this->Name=$n_Name;
    }
      public function GetName() {
        return $this->n_Name;
    }
     public function SetMail($n_Mail) {
        $this->Email=$n_Mail;
    }
      public function GetMail() {
        return $this->n_Mail;
    }
     public function SetAge($n_Age) {
        $this->Age=$n_Age;
    }
      public function GetAge() {
        return $this->n_Age;
    }
     public function SetPhone($n_Phone) {
        $this->Phone=$n_Phone;
    }
      public function GetPhone() {
        return $this->n_Phone;
    }
    public function SetDate($n_Date) {
        $this-> $Date=$n_Date;
    }
    public function GetDate() {
        return $this->n_Date;
    }
   
}
 $stu=new Student($n_Name,$n_Mail,$n_Age,$n_Phone,$n_Date);
 $stu->setName($n_Name);
 $stu->setMail($n_Mail);
 $stu->setAge($n_Age);
 $stu->setPhone($n_Phone);
 $stu->setDate($n_Date);
$Reg= array();
 function AddStudent() {
    array_push($Reg,$stu);
}
AddStudent();
function ListStudent($Reg){
    print_r($Reg);
}
function DeleteStudent($stu ) {
    unset($Reg[$stu]);
}
function EchoStudent($n_Name,$n_Mail,$n_Age,$n_Phone) {
    echo $stu->getName($n_Name);
    echo '</br>';
    echo  $stu->getMail($n_Mail);
    echo '</br>';
    echo $stu->getName($n_Age);
    echo '</br>';
    echo $stu->getPhone($n_Phone);
    echo '</br>';
    echo $stu->getDate($n_Date);
}
 



?>
