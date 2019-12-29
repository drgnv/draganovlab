<?php

include_once 'Host.php';
class Basic extends Host{

    public function logIn($username, $password){
        
        $sql = "SELECT * FROM users WHERE username = '".mysqli_real_escape_string($this->connect(),$username)."'";
        $_SESSION['user_info'] = $this->sqliexecute($sql);
        $password_verify = password_verify($password, $_SESSION['user_info'][0]['password']);
        
        if(trim($_SESSION['user_info'][0]['username']) == trim($username) && $password_verify == 1){
            
            return true;
            
        }else{
            
            return false;
            
        }

    }

    public function newPatient($pname, $num, $doctor, $results, $date, $pay,$idn, $cito, $comment, $note) {
        if($this->checkPersonalInfo($idn) == false){
            $sql = "INSERT INTO `personal_info` (`pi_address`, `pi_phone`, `pi_mail`, `pi_gender`, `pi_blood_type`, `pi_workplace`, `pi_id`, `pi_patient_idn`) VALUES ('', '', '', 0, 'false', '', NULL, '".$idn."')";
            $this->sqliexecute($sql);
        }
        $userPass = $this->userPass();
       $sql = "INSERT INTO `patients` (`comment`, `note`, `number`, `names`, `doctor`, `date`, `id`, `username`, `password`, `pay`, `idn`, `cito`, `over`) VALUES ('".mysqli_real_escape_string($this->connect(), $comment)."', '".mysqli_real_escape_string($this->connect(), $note)."', '".mysqli_real_escape_string($this->connect(), $num)."', '".mysqli_real_escape_string($this->connect(), $pname)."', '".mysqli_real_escape_string($this->connect(), $doctor)."', '".mysqli_real_escape_string($this->connect(), $date)."', NULL, '".mysqli_real_escape_string($this->connect(), $userPass['username'])."', '".mysqli_real_escape_string($this->connect(), $userPass['password'])."', '".mysqli_real_escape_string($this->connect(), $pay)."', '".mysqli_real_escape_string($this->connect(), $idn)."', '".mysqli_real_escape_string($this->connect(), $cito)."', 'off')";
//echo $sql;
        $this->sqliexecute($sql);
        
        $sql="SELECT MAX(id) FROM patients";
        $_SESSION['patient_id'] = $this->sqliexecute($sql);
     
     //$sql = "INSERT INTO `results` (`test_code`, `result`, `patient_id`, `barcode`, `id`, `date`) VALUES (\'01.11\', \'4.5\', \'34\', \'0000423533\', NULL, CURRENT_TIMESTAMP)";
        foreach ($results as $key => $test) {
         $sql = "INSERT INTO `results` (`result`, `test_code`, `patient_id`, `id`, `date`, `patient_idn`) VALUES ('','".mysqli_real_escape_string($this->connect(), $test)."', ".mysqli_real_escape_string($this->connect(), $_SESSION['patient_id'][0]['MAX(id)']).", NULL, '".mysqli_real_escape_string($this->connect(), $date)."', '".mysqli_real_escape_string($this->connect(), $idn)."')";
         $this->sqliexecute($sql);
        }
//echo $sql;
       // print_r($results);
    }

    public function checkPersonalInfo($idn){
        $sql = "SELECT * FROM personal_info WHERE pi_patient_idn = '".$idn."'";
       $result = $this->sqliexecute($sql);
        if(is_array($result)){
            return $result;
        }else{
            return false;
        }
    }
    
    public function getDayResults($date) {
        $sql = "SELECT * FROM patients LEFT JOIN results ON patients.id=results.patient_id LEFT JOIN tests ON results.test_code=tests.code LEFT JOIN doctors ON patients.doctor=doctors.doctor_id WHERE patients.date='".mysqli_real_escape_string($this->connect(), $date)."' ORDER BY number ASC, results.test_code ASC"
                . "";
        $data = $this->sqliexecute($sql);
        return $data;
    }
    
    public function searchByDate($start, $end) {
        $sql = "SELECT * FROM patients LEFT JOIN doctors ON patients.doctor=doctors.doctor_id WHERE date between '".mysqli_real_escape_string($this->connect(), $start)."' and '".mysqli_real_escape_string($this->connect(), $end)."'";
               
        $data = $this->sqliexecute($sql);
        return $data;
    }

    public function searchByDateNoPay($start, $end) {
        $sql = "SELECT * FROM patients LEFT JOIN doctors ON patients.doctor=doctors.doctor_id WHERE date between '".mysqli_real_escape_string($this->connect(), $start)."' and '".mysqli_real_escape_string($this->connect(), $end)."' AND pay != 'on'";

        $data = $this->sqliexecute($sql);
        return $data;
    }

    public function searchByDateAndStatus($start, $end, $status) {
        if($status == 'all'){
            $sql = "SELECT * FROM patients WHERE date between '".mysqli_real_escape_string($this->connect(), $start)."' and '".mysqli_real_escape_string($this->connect(), $end)."'";
        }
        if($status == 'over'){
            $sql = "SELECT * FROM patients WHERE over = 'on' AND date between '".mysqli_real_escape_string($this->connect(), $start)."' and '".mysqli_real_escape_string($this->connect(), $end)."'";
        }
        if($status == 'notover'){
            $sql = "SELECT * FROM patients WHERE over = 'off' AND  date between '".mysqli_real_escape_string($this->connect(), $start)."' and '".mysqli_real_escape_string($this->connect(), $end)."'";
        }


        $data = $this->sqliexecute($sql);
        return $data;
    }
    
    
    public function getPatientData($id) {
        $sql = "SELECT * FROM patients LEFT JOIN results ON patients.id=results.patient_id LEFT JOIN tests ON results.test_code=tests.code LEFT JOIN doctors ON patients.doctor = doctors.doctor_id  WHERE patients.id=".mysqli_real_escape_string($this->connect(), $id)." ORDER BY results.id";
        
        $raw_data=$this->sqliexecute($sql);
        return $raw_data;
    }
    
    public function getPatientNfo($id) {
        $sql = "SELECT * FROM patients WHERE patients.id=".mysqli_real_escape_string($this->connect(), $id)."";
        
        $raw_data=$this->sqliexecute($sql);
        return $raw_data;
    }


    public function getGender($idn){
        $idn_arr = explode('', $idn);
        //8 cifra chetno momche, nechetno momiche
        if(($idn_arr[8] % 2) == 0){
            //boy
            $gender = 'Мъж';
        }else{
            //girl
            $gender='Жена';
        }
        return $gender;
    }

    public function printRequestById($id) {
        $sql = "SELECT * FROM patients LEFT JOIN results ON patients.id=results.patient_id LEFT JOIN tests ON results.test_code=tests.code LEFT JOIN doctors ON patients.doctor=doctors.doctor_id WHERE patients.id=".mysqli_real_escape_string($this->connect(), $id)."";
        
        $raw_data=$this->sqliexecute($sql);
        
        $data['patient']['names'] =  $raw_data[0]['names'];
        $data['patient']['doctor'] =  $raw_data[0]['doctor'];
        $data['patient']['date'] =  $raw_data[0]['date'];
        $data['patient']['number'] =  $raw_data[0]['number'];
        $data['patient']['cito'] = $raw_data[0]['cito'];
        $x=0;
        foreach ($raw_data as $key => $value) {
            $data['patient']['tests'][$value['flag']][$x] = $value['name'];
            $x++;
        }
        return $data;
    }
    
    public function userPass() {
       $user = $this->randomStr(10);
       $pass = $this->randomStr(10);
       
        $data['username'] = $user;
        $data['password'] = $pass;
        return $data;

    }
    
    public function randomStr($length) {
         $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    

    
    public function getOnlineData($id) {
        $sql = "SELECT names, username, password FROM patients WHERE id = ".mysqli_real_escape_string($this->connect(), $id)."";
        return $this->sqliexecute($sql);
    }

  
    
  public function getAllDoctors() {
     $sql="SELECT * FROM doctors";
     return $this->sqliexecute($sql);
  }
  
  public function getAllTests() {
      $sql = "SELECT * FROM tests";
      $tests =  $this->sqliexecute($sql);
      $x=0;
      foreach ($tests as $key => $value) {
          if($value['flag'] != 'cbc'){
              $t[$x]=$value;
              $x++;
          }
      }
      $y=0;
      foreach ($t as $key => $value) {
          if($value['flag'] != 'ur'){
              $t2[$y]=$value;
              $y++;
          }
      }
      
      $z=0;
      foreach ($t2 as $key => $value) {
          if($value['flag'] != 's'){
              $t3[$y]=$value;
              $y++;
          }
      }
      
      $m=0;
      foreach ($t3 as $key => $value) {
          if($value['flag'] != 'akr'){
              $t4[$m]=$value;
              $m++;
          }
      }
     // return $t4;
      
      $p=0;
      foreach ($t4 as $key => $value) {
          if($value['flag'] != 'dif'){
              $t5[$p]=$value;
              $p++;
          }
      }
      
      $p=0;
      foreach ($t5 as $key => $value) {
          if($value['flag'] != 'ele'){
              $t6[$p]=$value;
              $p++;
          }
      }

      $p=0;
      foreach ($t6 as $key => $value) {
          if($value['flag'] != 'kzp'){
              $t7[$p]=$value;
              $p++;
          }
      }
      return $t7;
  }
  
  public function getDayPatientList() {
      $date = date('Y-m-d');
      $sql = "SELECT * FROM patients LEFT JOIN doctors ON patients.doctor=doctors.doctor_id WHERE date = '".mysqli_real_escape_string($this->connect(), $date)."'";
      return $this->sqliexecute($sql);
  }
  
  public function deleteById($id) {
      $sql = "DELETE FROM patients WHERE id=".mysqli_real_escape_string($this->connect(), $id)."";
      $this->sqliexecute($sql);
      $sql2 = "DELETE FROM results WHERE patient_id=".mysqli_real_escape_string($this->connect(), $id)."";
      $this->sqliexecute($sql2);
  }
  
  public function updatePatient($data){
      $sql = "UPDATE patients SET "
              . "number = ".mysqli_real_escape_string($this->connect(), $data['number']).", "
              . "names = '".mysqli_real_escape_string($this->connect(), $data['name'])."', "
              . "doctor = '".mysqli_real_escape_string($this->connect(), $data['doctor'])."', "
              . "date = '".mysqli_real_escape_string($this->connect(), $data['date'])."',"
              . "comment = '".mysqli_real_escape_string($this->connect(), $data['comment'])."',"
              . "note = '".mysqli_real_escape_string($this->connect(), $data['note'])."',"
              . "idn = '".mysqli_real_escape_string($this->connect(), $data['idn'])."',"
              . "cito = '".mysqli_real_escape_string($this->connect(), $data['cito'])."',"
              . " over = '".mysqli_real_escape_string($this->connect(), $data['over'])."' "
              . "WHERE id = ".mysqli_real_escape_string($this->connect(), $data['id'])."";
      
      $this->sqliexecute($sql);
     
      foreach ($data['results'] as $test_code => $result) {
          $sql2 = "UPDATE `results` SET `date`='".mysqli_real_escape_string($this->connect(), $data['date'])."', `result`='".mysqli_real_escape_string($this->connect(), $result)."' WHERE `test_code`='".mysqli_real_escape_string($this->connect(), $test_code)."' AND `patient_id` = ".mysqli_real_escape_string($this->connect(), $data['id'])."";
         
          $this->sqliexecute($sql2);
         
      }
  }
  
  public function getHospitalInfo() {
      $sql = "SELECT * FROM hospital";
      return $this->sqliexecute($sql);
  }
  
  public function checkCBC($tests) {
      foreach ($tests as $key => $test) {
          if($test == '01.01'){
              unset($tests[$key]);
              return true;
          }
      }
  }
  
  public function checkEle($tests) {
      foreach ($tests as $key => $test) {
          if($test == '15.00'){
              unset($tests[$key]);
              return true;
          }
      }
  }
  

  
  public function checkUrin($tests) {
      foreach ($tests as $key => $test) {
          if($test == '01.08'){
            
              return true;
          }
      }
  }
  
  
  public function checkAkr($tests) {
      foreach ($tests as $key => $test) {
          if($test == '66.00'){
              unset($tests[$key]);
              return true;
          }
      }
  }
  
  public function checkDif($tests) {
      foreach ($tests as $key => $test) {
          if($test == '01.40'){
              unset($tests[$key]);
              return true;
          }
      }
  }

    public function checkKzp($tests) {
        foreach ($tests as $key => $test) {
            if($test == '62.00'){
                unset($tests[$key]);
                return true;
            }
        }
    }
  
  function array_group_by(array $array, $key)
	{
		if (!is_string($key) && !is_int($key) && !is_float($key) && !is_callable($key) ) {
			trigger_error('array_group_by(): The key should be a string, an integer, or a callback', E_USER_ERROR);
			return null;
		}
		$func = (!is_string($key) && is_callable($key) ? $key : null);
		$_key = $key;
		// Load the new array, splitting by the target key
		$grouped = [];
		foreach ($array as $value) {
			$key = null;
			if (is_callable($func)) {
				$key = call_user_func($func, $value);
			} elseif (is_object($value) && isset($value->{$_key})) {
				$key = $value->{$_key};
			} elseif (isset($value[$_key])) {
				$key = $value[$_key];
			}
			if ($key === null) {
				continue;
			}
			$grouped[$key][] = $value;
		}
		// Recursively build a nested grouping if more parameters are supplied
		// Each grouped array value is grouped according to the next sequential key
		if (func_num_args() > 2) {
			$args = func_get_args();
			foreach ($grouped as $key => $value) {
				$params = array_merge([ $value ], array_slice($args, 2, func_num_args()));
				$grouped[$key] = call_user_func_array('array_group_by', $params);
			}
		}
		return $grouped;
	}
        
        public function getCbcCount() {
            
            $sql_count = "SELECT COUNT(*) FROM `tests` WHERE flag = 'cbc'";
            $count = $this->sqliexecute($sql_count);
            return $count[0]['COUNT(*)'];
            
        }
        
        public function getEleCount() {
            
            $sql_count = "SELECT COUNT(*) FROM `tests` WHERE flag = 'ele'";
            $count = $this->sqliexecute($sql_count);
            return $count[0]['COUNT(*)'];
            
        }
        
        public function getUrineCount() {
            
            $sql_count = "SELECT COUNT(*) FROM `tests` WHERE flag = 'ur'";
            $count = $this->sqliexecute($sql_count);
            return $count[0]['COUNT(*)'];
            
        }
        
        public function getAkrCount() {
            
            $sql_count = "SELECT COUNT(*) FROM `tests` WHERE flag = 'akr'";
            $count = $this->sqliexecute($sql_count);
            return $count[0]['COUNT(*)'];
            
        }

        public function getDifCount() {

            $sql_count = "SELECT COUNT(*) FROM `tests` WHERE flag = 'dif'";
            $count = $this->sqliexecute($sql_count);
            return $count[0]['COUNT(*)'];

        }

    public function getKzpCount() {

        $sql_count = "SELECT COUNT(*) FROM `tests` WHERE flag = 'kzp'";
        $count = $this->sqliexecute($sql_count);
        return $count[0]['COUNT(*)'];

    }
        
        public function addTests($tests, $patient_id, $date, $patient_idn) {
            foreach ($tests as $key=>$test_code) {
                if($test_code == '01.01'){
                    $cbc_count = $this->getCbcCount()+1;
                    $count = 1;
                    $base = "99.0";
                    while ($count <= $cbc_count) {
                      $sql = "INSERT INTO `results` (`test_code`, `patient_id`, `id`, `date`, `patient_idn`) VALUES (".$base.$count.", ".$patient_id.", NULL, '".$date."', '".$patient_idn."')";
                      $this->sqliexecute($sql);
                      $count++;
                    }

                    $sql="DELETE FROM `results` WHERE `test_code` = \"01.01\" ";
                    $this->sqliexecute($sql);
                }

                if($test_code == '01.08'){
                    
                    $count = 1;
                    $base = "88.0";
                    while ($count <= 8) {
                      $sql = "INSERT INTO `results` (`test_code`, `patient_id`, `id`, `date`, `patient_idn`) VALUES (".$base.$count.", ".$patient_id.", NULL, '".$date."', '".$patient_idn."')";
                      $this->sqliexecute($sql);
                      $count++;
                    }

                    $sql="DELETE FROM `results` WHERE `test_code` = \"01.08\" ";
                    $this->sqliexecute($sql);
                
                }

                if($test_code == '66.00'){
                     $count = 1;
                    $base = "66.0";
                    $akr_count = $this->getAkrCount();
                    while ($count <= $akr_count) {
                      $sql = "INSERT INTO `results` (`test_code`, `patient_id`, `id`, `date`, `patient_idn`) VALUES (".$base.$count.", ".$patient_id.", NULL, '".$date."', '".$patient_idn."')";
                      $this->sqliexecute($sql);
                      $count++;
                    }

                    $sql="DELETE FROM `results` WHERE `test_code` = \"66.00\" ";
                    $this->sqliexecute($sql);
                }

                 if($test_code == '01.40'){
                     
                      $count = 1;
                    $base = "44.0";
                    while ($count <= 5) {
                      $sql = "INSERT INTO `results` (`test_code`, `patient_id`, `id`, `date`, `patient_idn`) VALUES (".$base.$count.", ".$patient_id.", NULL, '".$date."', '".$patient_idn."')";
                      $this->sqliexecute($sql);
                      $count++;
                    }

                    $sql="DELETE FROM `results` WHERE `test_code` = \"01.\" ";
                    $this->sqliexecute($sql);

                }

                $sql = "INSERT INTO `results` (`test_code`, `patient_id`, `id`, `date`, `patient_idn`) VALUES ('".mysqli_real_escape_string($this->connect(),$test_code)."', ".mysqli_real_escape_string($this->connect(),$patient_id).", NULL, '".mysqli_real_escape_string($this->connect(),$date)."', '".$patient_idn."')";
                $this->sqliexecute($sql);

            }
        }
        
        public function searchNameId($search, $type) {
            if($type == "name"){
                   $sql="SELECT *FROM patients LEFT JOIN doctors ON patients.doctor=doctors.doctor_id WHERE names  LIKE '%".mysqli_real_escape_string($this->connect(), $search)."%'";
            }
            if($type == "id"){
                $sql="SELECT *FROM patients LEFT JOIN doctors ON patients.doctor=doctors.doctor_id WHERE number = '".mysqli_real_escape_string($this->connect(), $search)."'";
            }
            if($type == "idn"){
                $sql="SELECT *FROM patients LEFT JOIN doctors ON patients.doctor=doctors.doctor_id WHERE idn = '".mysqli_real_escape_string($this->connect(), $search)."'";
            }
            return $this->sqliexecute($sql);
            
        }
        
        public function overCount() {
            $date = date('Y-m-d');
            $sql = "SELECT COUNT('over') FROM patients WHERE date = '".mysqli_real_escape_string($this->connect(),$date)."' AND over='on'";
            return $this->sqliexecute($sql);
        }
        
        public function totalForDay() {
            $date = date('Y-m-d');
            $sql = "SELECT COUNT('over') FROM patients WHERE date = '".mysqli_real_escape_string($this->connect(),$date)."'";
            return $this->sqliexecute($sql);
        }
        
        public function addTest($name, $button, $unit, $code, $group, $up, $down, $price) {
            $sql = "INSERT INTO `tests` (`price`, `name`, `button`, `code`, `up`, `down`, `unit`, `flag`, `id`)"
                    . " VALUES "
                    . "('".mysqli_real_escape_string($this->connect(),$price)."', '".mysqli_real_escape_string($this->connect(),$name)."', '".mysqli_real_escape_string($this->connect(),$button)."', '".mysqli_real_escape_string($this->connect(),$code)."', '".mysqli_real_escape_string($this->connect(),$up)."', '".mysqli_real_escape_string($this->connect(),$down)."', '".mysqli_real_escape_string($this->connect(),$unit)."', '".mysqli_real_escape_string($this->connect(),$group)."', NULL)";
            $this->sqliexecute($sql);
        }

       /* public function oldResults($patient_idn){
            
          //  $sql="SELECT * FROM results LEFT JOIN tests ON results.testcode = tests.code WHERE patient_idn = ".mysqli_real_escape_string($this->connect(),$patient_idn)."";
           $sql =  "SELECT * FROM results 
          LEFT JOIN tests ON tests.code = results.test_code
          WHERE results.patient_idn = ".mysqli_real_escape_string($this->connect(),$patient_idn)."";
            $patient_results = $this->sqliexecute($sql);
            return $patient_results;
        }*/

    public function oldResults($patient_idn){
        //  $sql="SELECT * FROM results LEFT JOIN tests ON results.testcode = tests.code WHERE patient_idn = ".mysqli_real_escape_string($this->connect(),$patient_idn)."";
        $sql =  "SELECT * FROM patients
          WHERE idn = ".mysqli_real_escape_string($this->connect(),$patient_idn)."";
        $patient_dates = $this->sqliexecute($sql);
        return $patient_dates;
    }

        public function accessControl($userLevel) {
            if($userLevel < "3"){
                session_destroy();
                header("Location: ../index.php");
            }
        }
        
        public function calculateLdl($patient_id) {
             $sql = "SELECT `test_code`, `result` FROM `results` WHERE `patient_id` = ".mysqli_real_escape_string($this->connect(),$patient_id)." && (`test_code` = \"01.19\" || `test_code` = \"01.20\" || `test_code` = \"01.21\")";
             $lip = $this->sqliexecute($sql);
             $ldlmgdl = ($lip[0]['result']*38.67) - ($lip[1]['result']*38.67) - (($lip[2]['result']*38.67)/5);
             $ldlmmoll=$ldlmgdl/38.67;
             $check = $ldlmmoll+5;
             if($check>5){
                 return "LDL - ".$ldlmmoll."mmol/L";
             }else{
                 return "Липсват CHOL, HDL или триглицериди";
             }
             
        }
        
  
        public function getResultsByPatientId($patient_id) {
            $sql = "SELECT * FROM results LEFT JOIN tests ON results.test_code = tests.code WHERE patient_id = ".mysqli_real_escape_string($this->connect(),$patient_id)."";
            return $this->sqliexecute($sql);
        }
        
        public function deleteTestsFromPatient($patient_id, $test_codes) {
            foreach ($test_codes as $key => $test_code) {
                $sql = "DELETE FROM results WHERE patient_id = ".mysqli_real_escape_string($this->connect(),$patient_id)." and test_code = '".mysqli_real_escape_string($this->connect(),$test_code)."'";
            $this->sqliexecute($sql);
            }
            
        }
        
        public function anionGap($patient_id) {
            $sql = "SELECT `test_code`, `result` FROM `results` WHERE `patient_id` = ".mysqli_real_escape_string($this->connect(),$patient_id)." && (`test_code` = \"01.19\" || `test_code` = \"01.20\" || `test_code` = \"01.21\")";
             $lip = $this->sqliexecute($sql);
             $ldlmgdl = ($lip[0]['result']*38.67) - ($lip[1]['result']*38.67) - (($lip[2]['result']*38.67)/5);
             $ldlmmoll=$ldlmgdl/38.67;
             $check = $ldlmmoll+5;
             if($check>5){
                 return "LDL - ".$ldlmmoll."mmol/L";
             }else{
                 return "Липсват CHOL, HDL или триглицериди";
             }
            $ClCO2 = $Cl+$CO2;
            $anion_gap = $Na-$ClCO2;
            return $anion_gap;
        }

    public function searchPatiens($names, $idn, $start, $end)
    {
        if(strlen($idn) > 4){
        $sql = "SELECT `names`, `number` FROM patients WHERE `idn` = '".mysqli_real_escape_string($this->connect(),$idn)."' AND `date` BETWEEN  '".$start."' AND '".$end."'";
        return $this->sqliexecute($sql);
        }

        if(strlen($names) > 1){
            $sql2 = "SELECT * FROM `patients` WHERE names LIKE '%mysqli_real_escape_string($this->connect(),$idn)%' ";
          //  echo $sql2;
           return  $this->sqliexecute($sql2);
        }
    }

    public function maxPatientId(){
        $sql="SELECT MAX(number) FROM patients";
        return $this->sqliexecute($sql);
    }


    public function secureInput($input, $expected_type, $expexted_lenght=100){

        $input_lengt = str_len($input);
        $input_type = gettype($input);

        if($input_type == $expected_type && $input_lengt <= $expexted_lenght){


        }else{
            return false;
        }

    }

    public function getLanguage(){
        $sql="SELECT default_lang FROM hospital WHERE id = 1";
        return $this->sqliexecute($sql);
    }

    public function getPersonalInfo($idn){
        $sql = "SELECT * FROM personal_info WHERE pi_patient_idn = '".mysqli_real_escape_string($this->connect(),$idn)."'";
      return $this->sqliexecute($sql);
    }

    public function updatePersonalInfo($pi){
        $sql = "UPDATE personal_info SET
        `pi_address` = '".mysqli_real_escape_string($this->connect(),$pi['address'])."',
         `pi_phone` = '".mysqli_real_escape_string($this->connect(), $pi['phone'])."',
         `pi_mail` = '".mysqli_real_escape_string($this->connect(),$pi['mail'])."',
         `pi_blood_type` = '".mysqli_real_escape_string($this->connect(),$pi['blood_type'])."',
         `pi_gender` = '".mysqli_real_escape_string($this->connect(),$pi['gender'])."',
         `citizenship` = '".mysqli_real_escape_string($this->connect(),$pi['citizenship'])."',
         `zdr_knizkha_num` = '".mysqli_real_escape_string($this->connect(),$pi['zdr_knizkha_num'])."',
         `rec_knizkha_num` = '".mysqli_real_escape_string($this->connect(),$pi['rec_knizkha_num'])."',
          `lak_num` = '".mysqli_real_escape_string($this->connect(),$pi['lak_num'])."',
          `pi_lk_num` = '".mysqli_real_escape_string($this->connect(),$pi['lk_num'])."',
          `pi_out_date` = '".mysqli_real_escape_string($this->connect(),$pi['out_date'])."',
          `pi_exp_date` = '".mysqli_real_escape_string($this->connect(),$pi['exp_date'])."',
          `pi_out_place` = '".mysqli_real_escape_string($this->connect(),$pi['out_place'])."',
          `pi_fam_anamneza` = '".mysqli_real_escape_string($this->connect(),$pi['fam_anamneza'])."',
          `pi_life_anamneza` = '".mysqli_real_escape_string($this->connect(),$pi['life_anamneza'])."',
          `pi_alergi` = '".mysqli_real_escape_string($this->connect(),$pi['alergi'])."',
         `pi_workplace` = '".mysqli_real_escape_string($this->connect(),$pi['work_place'])."'
         WHERE pi_patient_idn = '".mysqli_real_escape_string($this->connect(),$pi['idn'])."'";
        $this->sqliexecute($sql);
        //return $sql;
    }

    public function egn_valid($egn) {
        $EGN_WEIGHTS = array(2,4,8,5,10,9,7,3,6);
       // global $EGN_WEIGHTS;
        if (strlen($egn) != 10)
            return false;
        $year = substr($egn,0,2);
        $mon  = substr($egn,2,2);
        $day  = substr($egn,4,2);
        if ($mon > 40) {
            if (!checkdate($mon-40, $day, $year+2000)) return false;
        } else
            if ($mon > 20) {
                if (!checkdate($mon-20, $day, $year+1800)) return false;
            } else {
                if (!checkdate($mon, $day, $year+1900)) return false;
            }
        $checksum = substr($egn,9,1);
        $egnsum = 0;
        for ($i=0;$i<9;$i++)
            $egnsum += substr($egn,$i,1) * $EGN_WEIGHTS[$i];
        $valid_checksum = $egnsum % 11;
        if ($valid_checksum == 10)
            $valid_checksum = 0;
        if ($checksum == $valid_checksum)
            return true;
    }

}
