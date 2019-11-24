<?php

include_once 'Settings.php';

class Mdds extends Settings{

    public function getMddByPatient($patient_id){
        $sql = "SELECT complete_date, id FROM `mdds`  WHERE `patient_id` = ".mysqli_real_escape_string($this->connect(),$patient_id)."";
        $mdd = $this->sqliexecute($sql);
        return $mdd;
    }

    public function getMddById($mdd_id){
        $sql = "SELECT * FROM `mdds`  LEFT JOIN doctors ON mdds.doctor_id = doctors.doctor_id  WHERE mdds.id = ".mysqli_real_escape_string($this->connect(),$mdd_id)."";
        $mdd = $this->sqliexecute($sql);
        return $mdd;
    }

    public function setMdd($no_money, $out_date, $complete_date, $num_mdd, $al_num, $doctor_id,
            $rzc_code, $zam_naet, $mkb, $mkb2, $mdd_type, $paket, $code1t, $code2t, $code3t,
            $code4t, $code5t,$code6t, $code1, $code2, $nzok, $patient_id){

              //  . " '".mysqli_real_escape_string($this->connect(), $complete_date)."',"

        $sql = "INSERT INTO `mdds` (`num_mdd`, `out_date`, `complete_date`, `doctor_id`, `rzk`, `zam_doc_id`, `nzok_num`, `mkb`, `paket_id`, `mkb2`, `type_mdd_id`, `test_code1`, `test_code2`, `test_code3`, `test_code4`, `test_code5`, `test_code6`, `no_money`, `id`, `patient_id`, `al_num`, `code1`, `code2`)"
                . " VALUES ('".$num_mdd."', '".$out_date."', '".$complete_date."', '".$doctor_id."', '".$rzc_code."', '".$zam_naet."', '".$nzok."', '".$mkb."', '".$paket."', '".$mkb2."', '".$mdd_type."', '".$code1t."', '".$code2t."', '".$code3t."', '".$code4t."', '".$code5t."', '".$code6t."', '".$no_money."', NULL, '".$patient_id."', '".$al_num."', '".$code1."', '".$code2."')";
        $this->sqliexecute($sql);
        //echo $sql;
    }

    public function updateMdd($mdd_id, $out_date, $complete_date, $num_mdd, $al_num, $doctor_id,
            $rzc_code, $mkb, $mkb2, $mdd_type, $paket, $code1t, $code2t, $code3t,
            $code4t, $code5t,$code6t, $code1, $code2, $nzok,$patient_idn, $patient_names, $patient_id){

      //  $sql2 ="UPDATE patients SET "
        //      . "idn = ".mysqli_real_escape_string($this->connect(), $patient_idn).", "
          //      . " names = '".mysqli_real_escape_string($this->connect(), $patient_names)."' "
            //  . "WHERE id = ".mysqli_real_escape_string($this->connect(), $patient_id)."";
     // $this->sqliexecute($sql2);

        $sql = "UPDATE `mdds` SET `out_date`= '".mysqli_real_escape_string($this->connect(), $out_date)."',
                `complete_date`= '".mysqli_real_escape_string($this->connect(), $complete_date)."',
                `num_mdd`= '".mysqli_real_escape_string($this->connect(), $num_mdd)."',
                `al_num`= '".mysqli_real_escape_string($this->connect(), $al_num)."',
                `rzk`= '".mysqli_real_escape_string($this->connect(), $rzc_code)."',
                `mkb`='".mysqli_real_escape_string($this->connect(), $mkb)."',
                `mkb2`='".mysqli_real_escape_string($this->connect(), $mkb2)."',
                `type_mdd_id`= ".mysqli_real_escape_string($this->connect(), $mdd_type).",
                `paket_id`= '".mysqli_real_escape_string($this->connect(), $paket)."',
                `test_code1`='".mysqli_real_escape_string($this->connect(), $code1t)."',
                `test_code2`='".mysqli_real_escape_string($this->connect(), $code2t)."',
                `test_code3`='".mysqli_real_escape_string($this->connect(), $code3t)."',
                `test_code4`='".mysqli_real_escape_string($this->connect(), $code4t)."',
                `test_code5`='".mysqli_real_escape_string($this->connect(), $code5t)."',
                `test_code6`='".mysqli_real_escape_string($this->connect(), $code6t)."',
                `code1`='".mysqli_real_escape_string($this->connect(), $code1)."',
                `code2`='".mysqli_real_escape_string($this->connect(), $code2)."',
                `nzok_num`='".mysqli_real_escape_string($this->connect(), $nzok)."',
                `doctor_id` = ".mysqli_real_escape_string($this->connect(), $doctor_id)." WHERE `id` = ".mysqli_real_escape_string($this->connect(), $mdd_id)."";
     $this->sqliexecute($sql);
    }

    public function getAllMdds(){

    }

    public function getMddsByDate($start_date, $end_date){

    }

    public function getMddTypes(){

        $sql = "SELECT * FROM  mdd_types";
        return $this->sqliexecute($sql);

    }

}