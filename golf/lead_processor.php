<?php


$photo_p  =   $_POST['photo_p'] ; 
$First_Name_p  =  $_POST['First_Name_p'] ; 
$id_pp_no_p  =  $_POST['id_pp_no_p'] ; 
$dob_p  =  $_POST['dob_p'] ; 
$pin_p  =  $_POST['pin_p'] ; 
$marrage_status_p  =  $_POST['marrage_status_p'] ; 
$No_children_p  =  $_POST['No_children_p'] ; 
$postal_add  =  $_POST['postal_add'] ; 
$postal_code  =  $_POST['postal_code'] ; 
$town  =  $_POST['town'] ;
$homwPhone  =  $_POST['homwPhone'] ; 
$mobile_No_p  =  $_POST['mobile_No_p'] ; 
$Office_No_p  =  $_POST['Office_No_p'] ; 
$email_p  =  $_POST['email_p'] ; 
$nationality_P  =  $_POST['nationality_P'] ; 
$employer_p  =  $_POST['employer_p'] ; 
$position_p  =  $_POST['position_p'] ; 
$sports_p  =  $_POST['sports_p'] ; 
$other_clubs_p  =  $_POST['other_clubs_p'] ; 
$expel_p  =  $_POST['expel_p'] ; 
$other_interest_p  =  $_POST['other_interest_p'] ; 
$email_opt_in  =  $_POST['email_opt_in'] ;  
$photo_s  =  $_POST['photo_s'] ; 
$fullname_s  =  $_POST['fullname_s'] ; 
$id_pp_s  =  $_POST['id_pp_s'] ;
$dob_s  =  $_POST['dob_s'] ; 
$pin_s  =  $_POST['pin_s'] ; 
$Phone_No_s  =  $_POST['Phone_No_s'] ; 
$office_No_s  =  $_POST['office_No_s'] ; 
$email_s  =  $_POST['email_s'] ; 
$nationality_s  =  $_POST['nationality_s'] ; 
$employer_s  =  $_POST['employer_s'] ; 
$occupation_s  =  $_POST['occupation_s'] ; 
$sports_s  =  $_POST['sports_s'] ; 
$clubs_s  =  $_POST['clubs_s'] ; 
$otherinterests_s  =  $_POST['otherinterests_s'] ; 
$photo_c1  =  $_POST['photo_c1'] ; 
$fname_c1  =  $_POST['fname_c1'] ; 
$dob_c1  =  $_POST['dob_c1'] ; 
$sports_c1  =  $_POST['sports_c1'] ; 
$otherint_c1  =  $_POST['otherint_c1'] ; 
$photo_c2  =  $_POST['photo_c2'] ; 
$fname_c2  =  $_POST['fname_c2'] ; 
$dob_c2  =  $_POST['dob_c2'] ; 
$sports_c2  =  $_POST['sports_c2'] ; 
$otherint_c2  =  $_POST['otherint_c2'] ; 
$photo_nk  =  $_POST['photo_nk'] ; 
$fname_nk  =  $_POST['fname_nk'] ; 
$phont_nk  =  $_POST['phont_nk'] ; 
$ralate_nk  =  $_POST['ralate_nk'] ; 
$fname_bn  =  $_POST['fname_bn'] ; 
$phone_bn  =  $_POST['phone_bn'] ; 
$relate_bn  =  $_POST['relate_bn'] ; 
$exist_cond  =  $_POST['exist_cond'] ; 
$Allergies  =  $_POST['Allergies'] ; 
$famdoc  =  $_POST['famdoc'] ; 
$med_ins  =  $_POST['med_ins'] ; 
$exist_cond_p  =  $_POST['exist_cond_p'] ; 
$Allergies_p  =  $_POST['Allergies_p'] ; 
$famdoc_p  =  $_POST['famdoc_p'] ; 
$med_ins_p  =  $_POST['med_ins_p'] ; 
$Allergies_s  =  $_POST['Allergies_s'] ; 
$famdoc_s  =  $_POST['famdoc_s'] ; 
$med_ins_s  =  $_POST['med_ins_s'] ; 
$exist_cond_c  =  $_POST['exist_cond_c'] ; 
$Allergies_c  =  $_POST['Allergies_c'] ; 
$famdoc_c  =  $_POST['famdoc_c'] ; 
$med_ins_c  =  $_POST['med_ins_c'] ; 
$verify_email  =  $_POST['verify_email'] ; 
$photo_n  =  $_POST['photo_n'] ; 
$fname_n  =  $_POST['fname_n'] ; 
$id_pp_n  =  $_POST['id_pp_n'] ; 
$dob_n  =  $_POST['dob_n'] ; 
$postal_n  =  $_POST['postal_n'] ; 
$postalcode_n  =  $_POST['postalcode_n'] ; 
$town_n  =  $_POST['town_n'] ; 
$Phone_n  =  $_POST['Phone_n'] ; 
$Allergies_n  =  $_POST['Allergies_n'] ; 
$id_pp_photo_p  =  $_POST['id_pp_photo_p'] ; 
$id_pp_photo_s  =  $_POST['id_pp_photo_s'] ; 
$pin_photo_p  =  $_POST['pin_photo_p'] ; 
$pin_photo_s  =  $_POST['pin_photo_s'] ; 
$bc_photo_c  =  $_POST['bc_photo_c'] ; 
$education_photo_p  =  $_POST['education_photo_p'] ; 
$HRletter_photo_p  =  $_POST['HRletter_photo_p'] ; 


$child1 = array
(

      "fullname"=> "$fname_c1",
      "dob"=> "$dob_c1",
      "otherinterests"=> "$otherint_c1",
      "preexistingcondition"=> "$exist_cond_c",
      "allergy"=> "$Allergies_c",
      "doctor"=> "$famdoc_c",
      "medicalinsurance"=> "$med_ins_c"
    
);

$child2 = array
    (
"fullname"=> "$fname_c2",
      "dob"=> "$dob_c2",
      "otherinterests"=> "$otherint_c2",
      "preexistingcondition"=> "$exist_cond_c",
      "allergy"=> "$Allergies_c",
      "doctor"=> "$famdoc_c",
      "medicalinsurance"=> "$med_ins_c"
);

$children = array($child1,$child2);

$bdata= array(

  "fullname"=> "$First_Name_p",
  "idpassport"=> "$id_pp_no_p",
  "pinno"=> "$pin_p",
  "maritalstatus"=> "$marrage_status_p",
  "noofchildren"=> "$No_children_p",
  "postalcode"=> "$postal_code",
  "postaladdress"=> "$postal_add",
  "city"=> "$town",
  "homephone"=> "$homwPhone",
  "mobileno"=> "$mobile_No_p",
  "officeno"=> "$Office_No_p",
  "emailaddress"=> "$email_p",
  "nationality"=> "$nationality_P",
  "employer"=> "$employer_p",
  "position"=> "$position_p",
  "otherclubs"=> "$other_clubs_p",
  "otherclubsexpelled"=> TRUE,
  "expelledreasons"=> "$expel_p",
  "dob"=> "$dob_p",
  "spousename"=> "$fullname_s",
  "spousedob"=> "$dob_s",
  "spouseidpassport"=> "$id_pp_s",
  "spousepin"=> "$pin_s",
  "spousemobileno"=> "$Phone_No_s",
  "spouseofficeno"=> "$office_No_s",
  "spouseemail"=> "$email_s",
  "spousenationality"=> "$nationality_s",
  "spouseemployer"=> "$employer_s",
  "spouseoccupation"=> "$occupation_s",
  "spouseotherclub"=> "$clubs_s",
  "introducedby"=> "null",
  "datecreated"=> time(),
  "nextofkinname"=> "$fname_nk",
  "nextofkinmobile"=> "$phont_nk",
  "nextofkinrelationship"=> "$ralate_nk",
  "childapplication"=> "$children",
  "beneficiaryname"=> "$fname_bn",
  "beneficiaryrelationship"=> "$relate_bn",
  "beneficiarymobileno"=> "$phone_bn",
  "nannyname"=> "$fname_n",
  "nannydob"=> "$dob_n",
  "nannyidpassport"=> "$id_pp_n",
  "nannypostaladdress"=> "$postal_n",
  "nannypostalcode"=> "$postalcode_n",
  "nannucity"=> "$town_n",
  "nannymobileno"=> "$Phone_n",
  "nannyallegy"=> "$Allergies_n"
)
;


$url2 = 'http://widevisions-001-site2.htempurl.com/api/WadiDegla/SaveMemberDetails';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url2);
$curl_post_data = $bdata;
$data_string = json_encode($curl_post_data);
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
$curl_response = curl_exec($curl);
curl_close ($curl);
$updated2 = json_decode($curl_response);
print_r($updated2);

//print_r($data_string);

/*
 print_r($_POST);
    //Or:
    foreach ($_POST as $key => $value)
        echo $key.'='.$value.'<br />';
*/
?>