<?php

include_once 'Basic.php';
class Settings extends Basic{
    
    public function deleteDoctor($id){
        $sql = "DELETE FROM doctors WHERE doctor_id = '".$id."'";
        $this->sqliexecute($sql);
    }
    
    public function setDoctor($name, $phone, $phone2, $uin) {
        $sql = "INSERT INTO `doctors` (`doctor`, `doctor_id`, `uin`, `phone`, `phone2`) VALUES ('".mysqli_real_escape_string($this->connect(),$name)."', NULL, '".mysqli_real_escape_string($this->connect(),$phone)."', '".mysqli_real_escape_string($this->connect(),$phone2)."',  '".mysqli_real_escape_string($this->connect(),$uin)."')";
        $this->sqliexecute($sql);
    }
    
    public function getHospital() {
        $sql = "SELECT * FROM hospital WHERE id=1";
        return $this->sqliexecute($sql);
    }
    
    public function deleteTest($id) {
        $sql = "DELETE FROM tests WHERE id=".mysqli_real_escape_string($this->connect(),$id)."";
        $this->sqliexecute($sql);
    }
    
    public function getTest($id) {
        $sql = "SELECT * FROM tests WHERE id = ".mysqli_real_escape_string($this->connect(),$id)."";
        $test = $this->sqliexecute($sql);
        return $test;
    }
    
    public function updateTest($test) {
        $sql = "UPDATE tests SET name = '".mysqli_real_escape_string($this->connect(),$test['name'])."', button = '".mysqli_real_escape_string($this->connect(),$test['button'])."', code = '".mysqli_real_escape_string($this->connect(),$test['code'])."',"
                . " up = '".mysqli_real_escape_string($this->connect(),$test['up'])."', "
                . " price = '".mysqli_real_escape_string($this->connect(),$test['price'])."', "
                . " down = '".mysqli_real_escape_string($this->connect(),$test['down'])."', "
                . " flag = '".mysqli_real_escape_string($this->connect(),$test['flag'])."', "
                . " unit = '".mysqli_real_escape_string($this->connect(),$test['unit'])."'"
                . " WHERE id = ".mysqli_real_escape_string($this->connect(),$test['id'])."";
        $this->sqliexecute($sql);
    }
    
    public function setBasicSettings($hospital, $doctor, $address, $phone, $mail, $web, $note, $lang) {
        $sql = "UPDATE hospital SET name= '".mysqli_real_escape_string($this->connect(),$hospital)."', "
                . " doctor= '".mysqli_real_escape_string($this->connect(),$doctor)."', "
                . " address = '".mysqli_real_escape_string($this->connect(),$address)."', "
                . " phone = '".mysqli_real_escape_string($this->connect(),$phone)."', "
                . " mail = '".mysqli_real_escape_string($this->connect(),$mail)."', "
                . " note = '".mysqli_real_escape_string($this->connect(),$note)."', "
            . " default_lang = '".mysqli_real_escape_string($this->connect(),$lang)."', "
                . " web = '".mysqli_real_escape_string($this->connect(),$web)."' "
                . "WHERE id = 1";
        echo $sql;
        $this->sqliexecute($sql);
    }

    public function editDoctor($name, $phone, $phone2, $uin, $doctor_id){
        $sql = "UPDATE doctors SET doctor = '".mysqli_real_escape_string($this->connect(),$name)."', phone = '".mysqli_real_escape_string($this->connect(),$phone)."', phone2 = '".mysqli_real_escape_string($this->connect(),$phone2)."', uin = '".mysqli_real_escape_string($this->connect(),$uin)."' WHERE doctor_id = ".mysqli_real_escape_string($this->connect(),$doctor_id)."";
        $this->sqliexecute($sql);

    }

    public function getDoctor($doctor_id){
        $sql = "SELECT * FROM doctors WHERE doctor_id = ".mysqli_real_escape_string($this->connect(),$doctor_id)."";
         return $this->sqliexecute($sql);

    }

    public function  getUsers(){
        $sql = "SELECT * FROM users";
        return $this->sqliexecute($sql);
    }

    public function deleteUser($user_id){
        $sql = "DELETE FROM users WHERE id = ".mysqli_real_escape_string($this->connect(),$user_id)."";
        $this->sqliexecute($sql);
    }

    public function getUser($user_id){
        $sql = "SELECT * FROM users WHERE id = ".mysqli_real_escape_string($this->connect(),$user_id)."";
        $user = $this->sqliexecute($sql);
        return $user;
    }

    public function editUser($name, $username, $password, $id, $lvl, $mail){
        $sql = "SELECT password FROM users WHERE id = '".$id."'";
        $user_pass = $this->sqliexecute($sql);
        
         $password_verify = password_verify($password, $user_pass[0]['password']);
        
        
        if($password_verify == 1){
            $sql = "UPDATE users SET name = '".$name."', username = '".$username."', lvl = '".$lvl."', mail = '".$mail."' WHERE id = '".$id."'";
            $this->sqliexecute($sql);
            return 1;
        }else{
            return 0;
        }

    }
    
    public function addUser($username, $password2, $lvl, $name) {
        $password = password_hash($password2, PASSWORD_DEFAULT);
       $sql = "INSERT INTO `users` (`username`, `password`, `lvl`, `id`, `name`, `status`) VALUES ('$username', '$password', '$lvl', NULL, '$name', 0)";
       $this->sqliexecute($sql);
        
    }
    
    public function checkUsername($username) {
        $sql = "SELECT username FROM users WHERE 1=1";
        $usernames = $this->sqliexecute($sql);
        $r = true;
        foreach ($username as $user){
            if($username == $user['username']){
                $r = false;
                echo $user['username'];
            }
        }
        return $r;
    }
    
    public function setAnalizer($analizer) {
        $sql = "INSERT INTO `analizers` (`name`, `category`, `date`, `id`) VALUES ('".$analizer['name']."', '".$analizer['category']."', '".$analizer['date']."', NULL)";
        $this->sqliexecute($sql);
        $sql2 = "SELECT name FROM `analizers` WHERE name = '".$analizer['name']."'";
        $analizer_name = $this->sqliexecute($sql2);
        if(strlen($analizer_name[0]['name'])>2){
            return true;
        }else{
            return false;
        }
    }
    
    public function getAnalizers() {
        $sql = "SELECT * FROM `analizers`";
        return $this->sqliexecute($sql);
    }
    
    public function getAnalizerById($id) {
        $sql = "SELECT * FROM `analizers` WHERE id = ".$id."";
       return $this->sqliexecute($sql);
    }
    
    public function editAnalizerById($name, $category, $id) {
        $sql = "UPDATE analizers SET name = '".$name."', category = '".$category."' WHERE id = ".$id."";
        $this->sqliexecute($sql);
    }
    
    public function checkUniqueCategoty($category_code) {
        $sql = "SELECT * FROM test_categories WHERE category_code = '".$category_code."";
        $category = $this->sqliexecute($sql);
        if(strlen($category[0]['category_code'])>1){
            return false;
        }else{
            return true;
        }
    }
    
    public function setCategory($category_name, $category_code) {
        $sql = "INSERT INTO `test_categories` (`category_name`, `category_code`) VALUES ('".$category_name."', '".$category_code."')";
        $this->sqliexecute($sql);
    }
    
    public function getCbc() {
        $sql = "SELECT * FROM tests WHERE flag = 'cbc'";
        return $this->sqliexecute($sql);
    }
    
    public function getEle() {
        $sql = "SELECT * FROM tests WHERE flag = 'ele'";
        return $this->sqliexecute($sql);
    }
    
    public function getUrine() {
        $sql = "SELECT * FROM tests WHERE flag = 'ur'";
        return $this->sqliexecute($sql);
    }
    
    public function getAkr() {
        $sql = "SELECT * FROM tests WHERE flag = 'akr'";
        return $this->sqliexecute($sql);
    }

    public function getTestPanel(){
        $sql = "SELECT * FROM settings WHERE id = 1";
        return $this->sqliexecute($sql);
    }

    public function setTestPanel($selected_setting){
        $sql = "UPDATE `settings` SET `setting_selected` = '".$selected_setting."' WHERE `settings`.`id` = 1";
        return $this->sqliexecute($sql);
    }

    public function printOuts($type, $mode, $start_date, $end_date, $doctor_id, $patient_idn){

        if($type == 'tests'){
            if($mode=='all'){
                $sql = "SELECT * FROM patients LEFT JOIN results ON patients.id=results.patient_id LEFT JOIN tests ON results.test_code=tests.code";
            }
            if($mode=='dates'){
                $sql = "SELECT * FROM patients LEFT JOIN results ON patients.id=results.patient_id LEFT JOIN tests ON results.test_code=tests.code WHERE patients.date between '".mysqli_real_escape_string($this->connect(), $start_date)."' and '".mysqli_real_escape_string($this->connect(), $end_date)."'";
            }
        }

        if($type == 'doctor'){
            if($mode=='all'){
                $sql = "SELECT * FROM patients LEFT JOIN results ON patients.id=results.patient_id LEFT JOIN tests ON results.test_code=tests.code LEFT JOIN doctors ON patients.doctor=doctors.doctor_id WHERE patients.doctor =".mysqli_real_escape_string($this->connect(), $doctor_id)."";
            }
            if($mode=='dates'){
                $sql = "SELECT * FROM patients LEFT JOIN results ON patients.id=results.patient_id LEFT JOIN tests ON results.test_code=tests.code LEFT JOIN doctors ON patients.doctor=doctors.doctor_id WHERE patients.date between '".mysqli_real_escape_string($this->connect(), $start_date)."' and '".mysqli_real_escape_string($this->connect(), $end_date)."' AND patients.doctor =".mysqli_real_escape_string($this->connect(), $doctor_id)." ";
            }
        }

        if($type == 'patient'){
            if($mode=='all'){
                $sql = "SELECT * FROM patients LEFT JOIN results ON patients.id=results.patient_id LEFT JOIN tests ON results.test_code=tests.code LEFT JOIN doctors ON patients.doctor=doctors.doctor_id WHERE patients.idn = '".mysqli_real_escape_string($this->connect(), $patient_idn)."'";
            }
            if($mode=='dates'){
                $sql = "SELECT * FROM patients LEFT JOIN results ON patients.id=results.patient_id LEFT JOIN tests ON results.test_code=tests.code LEFT JOIN doctors ON patients.doctor=doctors.doctor_id WHERE patients.idn = '".mysqli_real_escape_string($this->connect(), $patient_idn)."' AND patients.date between '".mysqli_real_escape_string($this->connect(), $start_date)."' and '".mysqli_real_escape_string($this->connect(), $end_date)."'";
            }
        }
//echo $sql;
        return $this->sqliexecute($sql);
    }


    public function getEnquiry($type)
    {
        if($type == '1'){

        }

        if($type == '2'){

        }

        if($type == "3"){
            $sql = "SELECT name, test_code FROM results LEFT JOIN tests ON results.test_code = tests.code";
        }

        return $this->sqliexecute($sql);

    }
}

