<?php

if(!function_exists('imageBaseURL')) {
  function imageBaseURL() {
    return config('app.url').'storage/app/';
  }
}
if(!function_exists('makeImageURL')) {
  function makeImageURL($path) {
    return imageBaseURL().$path;
  }
}
if(!function_exists('themeLoader')) {
  function themeLoader() {
    return config('app.url').'public/admin/assets/images/loader.gif';
  }
}
if(!function_exists('lightLoader')) {
  function lightLoader() {
    return config('app.url').'public/common_images/loader.gif';
  }
}
if(!function_exists('darkLoader')) {
  function darkLoader() {
    return baseUrl().'public/admin/images/dark-loader.gif';
  }
}
if(!function_exists('checkIcon')) {
  function checkIcon() {
    return 'https://images.vexels.com/media/users/3/157931/isolated/preview/604a0cadf94914c7ee6c6e552e9b4487-curved-check-mark-circle-icon-by-vexels.png';
  }
}
if(!function_exists('array_push_assoc')) {
    function array_push_assoc($array, $key, $value){
        $array[$key] = $value;
        return $array;
    }
}
if(!function_exists('customRound')) {
  function customRound($number) {
    $val = round(floatval(checkValue($number)),2);
    if (strpos($val, '.') !== false) {
        $arr = explode('.',$val);
        return $arr[0].'.'.@$arr[1].@$arr[2];
    }else{
        return $val;
    }
  }
}
if(!function_exists('GetRandomNos')) {
  function GetRandomNos($digits) {
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    if(strlen($pin) != $digits){
        GetRandomNos($digits);
    }
    return $pin; 
  }
}
if(!function_exists('NewUserMin')) {
  function NewUserMin() {
    return '120';
  }
}
if(!function_exists('RewardUserMin')) {
  function RewardUserMin() {
    return '60';
  }
}
if(!function_exists('checkSlot')) {
  function checkSlot($booking_date,$time) {
      if(strtotime($booking_date) > strtotime(date('Y-m-d'))){
        return '1';//upcoming
      }else if(strtotime($booking_date) < strtotime(date('Y-m-d'))){
        return '2';//previous
      }else if($booking_date==date('Y-m-d')){
        //today
        if(date('H',strtotime($time)) < date('H')){
            return '2';
        }else{
            return '3';
        }
      }else{
        return '0';//error
      }
  }
}
if(!function_exists('addHours')) {
  function addHours($hours,$time) {
    return date("H:i", strtotime('+'.$hours.' hours', strtotime($time)));
  }
}
if(!function_exists('addMin')) {
  function addMin($min,$time) {
    return date("H:i", strtotime('+'.$min.' minutes', strtotime($time)));
  }
}
if(!function_exists('addHoursDateWise')) {
  function addHoursDateWise($hours,$time) {
    return date("Y-m-d H:i:s", strtotime('+'.$hours.' hours', strtotime($time)));
  }
}
if(!function_exists('addDays')) {
  function addDays($date,$day) {
    return date('Y-m-d H:i:s', strtotime($date . " +$day day"));
  }
}
if(!function_exists('subtractDays')) {
  function subtractDays($date,$day) {
    return date('Y-m-d H:i:s', strtotime($date . " -$day day"));
  }
}
if(!function_exists('timeDiff')){
  function timeDiff($time1,$time2){
    $diff = strtotime($time1) - strtotime($time2);
    return gmdate("H:i", abs($diff));
  }
}
if(!function_exists('currentMonth')) {
  function currentMonth() {
    return (int)date('m');
  }
}
if(!function_exists('currentYear')) {
  function currentYear() {
    return date('Y');
  }
}
if(!function_exists('getMonthName')) {
  function getMonthName($monthNum) {
    return date('F', mktime(0, 0, 0, $monthNum, 10));;
  }
}
if(!function_exists('subtractHours')) {
  function subtractHours($hours,$time) {
    return date("G:i", strtotime('-'.$hours.' hours', strtotime($time)));
  }
}
if(!function_exists('addtoString')) {
  function addtoString($str, $item) {
    $parts = explode(',', $str);
    $parts[] = $item;

    return implode(',', $parts);
  }
}
if(!function_exists('removeSameinComma')) {
  function removeSameinComma($str) {
      return implode(',', array_keys(array_flip(explode(',', $str))));
  }
}
if(!function_exists('dateDiffInDays')) {
  function dateDiffInDays($date1, $date2)  
  { 
      // Calulating the difference in timestamps 
      $diff = strtotime($date2) - strtotime($date1); 
        
      // 1 day = 24 hours 
      // 24 * 60 * 60 = 86400 seconds 
      return abs(round($diff / 86400)); 
  } 
}
if(!function_exists('removeItemFromString')) {
  function removeItemFromString($str, $item) {
      $parts = explode(',', $str);

      while(($i = array_search($item, $parts)) !== false) {
          unset($parts[$i]);
      }

      return implode(',', $parts);
  }
}
if(!function_exists('whiteBgPic')) {
  function whiteBgPic() {
    return 'http://www.tsmgi.com/wp-content/uploads/2015/12/White-Background-Square.jpg.jpeg';
  }
}

if(!function_exists('defaultServiceIcon')) {
  function defaultServiceIcon() {
    return 'https://library.kissclipart.com/20180905/tww/kissclipart-hospital-service-icon-clipart-patient-health-care-5c2a364778bf67b9.jpg';
  }
}
if(!function_exists('proPic')){
  function proPic(){
    return 'https://themevedanta.com/wp-content/uploads/2018/10/avatar.png';
  }
}

if(!function_exists('reqError')){
  function reqError($string){
    return 'The '.$string.' field is required.';
  }
}

if(!function_exists('appName')){
  function appName(){
    return 'WalkIn';
  }
}
if(!function_exists('encodeIt')) {
  function encodeIt($str) {
    return base64_encode($str);
  }
}

if(!function_exists('decodeIt')) {
  function decodeIt($str) {
    return base64_decode($str);
  }
}

if(!function_exists('SQLStatus')) {
  function SQLStatus($sql) {
    if($sql){
        return 1;
    }else{
        return 0;
    }
  }
}

if(!function_exists('SQLProfilePic')) {
  function SQLProfilePic() {
    $query_string = "CASE WHEN users.profile_pic='' OR users.profile_pic='0' OR users.profile_pic IS NULL THEN '".defaultProPic()."' WHEN users.profile_pic LIKE '%http%' THEN users.profile_pic ELSE CONCAT('".baseUrl()."','public/profile_pics/',users.profile_pic) END AS pro_pic_url";
    return $query_string;
  }
}

if(!function_exists('SQLProfilePicSingle')) {
  function SQLProfilePicSingle() {
    $query_string = "CASE WHEN profile_pic='' OR profile_pic='0' OR profile_pic IS NULL THEN '".defaultProPic()."' WHEN social_provider_type!='' THEN CONCAT('".baseUrl()."','public/profile_pics/',profile_pic) ELSE CONCAT('".baseUrl()."','public/profile_pics/',profile_pic) END AS pro_pic_url";
    return $query_string;
  }
}

if(!function_exists('SplitSlots')) {
  function SplitSlots($Duration="60", $opening_time, $closing_time, $break_start_time, $break_end_time,$date,$store_id){

      $ReturnArray = array();// Define output
      $MorningArray = array();
      $AfternoonArray = array();
      $EveningArray = array();

      $AddMins  = $Duration * 60;

      $StartTime    = strtotime($opening_time); //Get Timestamp
      $EndTime      = strtotime($closing_time) - $AddMins; //Get Timestamp

      if($StartTime >= $EndTime){
        return $ReturnArray;
      }

      $morningEndTime = strtotime(morningEndTime());
      $afternoonStartTime = strtotime(afternoonStartTime());
      $afternoonEndTime = strtotime(afternoonEndTime());
      $eveningStartTime = strtotime(eveningStartTime());

      $opening_time = strtotime($opening_time);
      $closing_time = strtotime($closing_time);
      $break_start_time = (!is_null($break_start_time) && !empty($break_start_time)) ? strtotime($break_start_time) : '';
      $break_end_time = (!is_null($break_end_time) && !empty($break_end_time)) ? strtotime($break_end_time) : '';
      $is_break = false;
      if(!empty($break_start_time) && !empty($break_end_time)){
          $is_break = true;
      }

      while ($StartTime <= $EndTime) //Run loop
      {
          //$ReturnArray[] = date ("H:i", $StartTime);
          $end_time = $StartTime + $AddMins;
          $is_available = 1;
          //$is_lunch = 0;
          if($is_break){
            if($StartTime >= $break_start_time && $StartTime < $break_end_time){
                $is_available = 0;
                //$is_lunch = 1;
            }
          }

          $isBooked = App\StoreBooking::isBooked($date,date("H:i", $StartTime),$store_id);
          $is_available = ($isBooked) ? 0 : $is_available;
          
          if($end_time <= $morningEndTime){
              $MorningArray[] = array(
                'start_time' => date("H:i", $StartTime),
                'end_time' => date("H:i", $end_time), 
                'is_available' => $is_available,
                //'is_lunch' => $is_lunch
              );
          }else if($end_time <= $afternoonEndTime){
              $AfternoonArray[] = array(
                'start_time' => date("H:i", $StartTime),
                'end_time' => date("H:i", $end_time), 
                'is_available' => $is_available,
                //'is_lunch' => $is_lunch
              );
          }else{
              $EveningArray[] = array(
                'start_time' => date("H:i", $StartTime),
                'end_time' => date("H:i", $end_time), 
                'is_available' => $is_available,
                //'is_lunch' => $is_lunch
              );
          }
          // $ReturnArray[] = array(
          //   'start_time' => date("H:i", $StartTime),
          //   'end_time' => date("H:i", $end_time), 
          //   'is_available' => 1
          // );
          $StartTime += $AddMins; //Endtime check
      }
      return ['morning_slots' => $MorningArray, 'afternoon_slots' => $AfternoonArray, 'evening_slots' => $EveningArray];
      //return $ReturnArray;
  }
}

if(!function_exists('allowKeys')) {
  function allowKeys($arr) {
    array_push($arr,'version_key','version_name','method');
    return $arr;
  }
}

if(!function_exists('jsonResponse')) {
  function jsonResponse($code, $msg, $data='', $other='0', $name='', $val='') {
    if(empty($data) && $data!='0'){
      return response()->json(['code' => (string)$code, 'message' => $msg, 'data'=>[] ]);
    }else if($other=='1'){
      return response()->json(['code' => (string)$code, 'message' => $msg, 'data' => $data, $name => $val]);
    }else{
      return response()->json(['code' => (string)$code, 'message' => $msg, 'data' => $data]);
    }
  }
}

if(!function_exists('jsonResponseRequestError')) {
  function jsonResponseRequestError($code, $msg, $data='', $other='0', $name='', $val='') {
    if(empty($data) && $data!='0'){
      return response()->json(['code' => (string)$code, 'message' => $msg, 'data'=>[] ]);
    }else if($other=='1'){
      return response()->json(['code' => (string)$code, 'message' => $msg, 'data' => $data, $name => $val]);
    }else{
      return response()->json(['code' => (string)$code, 'message' => $msg, 'data' => $data]);
    }
  }
}

if(!function_exists('jsonResponseRequestSuccess')) {
  function jsonResponseRequestSuccess($code, $msg, $data='', $other='0', $name='', $val='') {
    if(empty($data) && $data!='0'){
      return response()->json(['code' => $code, 'successMsg' => $msg, 'errors' => $msg, 'data'=>[] ]);
    }else if($other=='1'){
      return response()->json(['code' => $code, 'successMsg' => $msg, 'data' => $data, $name => $val]);
    }else{
      return response()->json(['errorCode' => $code, 'successMsg' => $msg, 'data' => $data]);
    }
  }
}

if(!function_exists('imageFullPath')) {
  function imageFullPath($folder, $string, $social_provider_type='') {
    if(!empty($social_provider_type)){
        return $string;
    }else{
        return baseUrl().$folder.$string;
    }
    
  }
}

if(!function_exists('checkEmpty')) {
  function checkEmpty($value) {
    if(!empty($value) && !is_null($value)){
      return $value;
    }else{
      return '';
    }
  }
}
if(!function_exists('checkValue')) {
  function checkValue($value) {
    if(!empty($value) && !is_null($value)){
      return $value;
    }else{
      return 0;
    }
  }
}
if(!function_exists('lastURI')) {
  function lastURI($link) {
    $link_array = explode('/',$link);
    return end($link_array);
  }
}

if(!function_exists('makeImgsPath')) {
  function makeImgsPath($string) {
    if(strpos($string, ',')){
      $array = explode(",",$string);
      foreach ($array as $value) {
          $full_path[] = baseUrl().'public/rest_images/'.$value;
      }
      return implode(',', $full_path);
    }else{
      return baseUrl().'public/rest_images/'.$string;
    }
  }
}

if(!function_exists('hasError')) {
  function hasError($value,$errors) {
    if($errors->has($value)){
        echo  '<span class="help-block">
            <strong>'.$errors->first($value).'</strong>
        </span>';
    }
  }
}

if(!function_exists('myArray')) {
  function myArray($object) {
    return (array)$object;
  }
}

if(!function_exists('defaultPass')) {
  function defaultPass() {
    return '123456';
  }
}

if(!function_exists('defaultEmail')) {
  function defaultEmail() {
    return 'user'.rand('0000','9999').'@dummy.com';
  }
}


if(!function_exists('orginalUid')) {
  function orginalUid($uid) {
    $arr = explode('_', $uid);
    return $arr[2];
    $uid = base64_decode($arr[1]);
    if(strpos($uid, '_')){
      $arr = explode('_', $uid);
      if($arr){
        return $arr[1];
      }else{
        return '0';
      }
    }else{
      return '0';
    }
    
    
  }
}

if(!function_exists('clean')){
  function clean($string){
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
  }
}
function SendGrid($to, $subject, $content, $from){
  $url = 'https://api.sendgrid.com/';
  $user = 'xxxxxxxxxxxxxxxx'; //replace with sendgrid username
  $pass = 'xxxxxxxxxxxxxx'; //replace with sendgrid pass
  $fileName = 'license.txt'; //the file to attach
  //$filePath = dirname(__FILE__); //assuming file is in script folder(replace with whatever path)

  $params = array(
      'api_user'  => $user,
      'api_key'   => $pass,
      'to'        => $to, //replace with your To: address
      'subject'   => $subject,
      'html'      => $content,
      'from'      => $from, //replace with your From: address
      //'bcc'       => 'bccaddress@domain.com', //replace with your Bcc: address
      //'files['.$fileName.']' => '@'.$filePath.'/'.$fileName
    );

  //print_r($params);

  $request =  $url.'api/mail.send.json';

  // Generate curl request
  $session = curl_init($request);

  // Tell curl to use HTTP POST
  curl_setopt ($session, CURLOPT_POST, true);

  // Tell curl that this is the body of the POST
  curl_setopt ($session, CURLOPT_POSTFIELDS, $params);

  // Tell curl not to return headers, but do return the response
  curl_setopt($session, CURLOPT_HEADER, false);
  // Tell PHP not to use SSLv3 (instead opting for TLS)
  curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
  curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

  // obtain response
  $response = curl_exec($session);
  curl_close($session);

  // print everything out
  //print_r($response); //{"message":"success"}
}

function sendPush($device_id, $title, $body, $notif_data, $device_type = '1'){
    if(!array_key_exists("title",$notif_data))
    {
        $notif_data['title'] = urldecode($title);
    }
    if(!array_key_exists("body",$notif_data))
    {
        $notif_data['body'] = urldecode($body);
    }
    if(!array_key_exists("sound",$notif_data))
    {
        $notif_data['sound'] = 'default';
    }
    if($device_type=='2'){//IOS
        $fcmApiKey = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";//Key could be same in my case both are different
        $fields = [
            'time_to_live'      =>  604800,
            'priority'          =>  'high',
            'registration_ids'  =>  array($device_id),
            'notification'      =>  [
                                        'title' => urldecode($title),
                                        'body'  => urldecode($body),
                                        'sound' => 'default',
                                        'badge' => '1'
                                    ],
            'data'  =>  $notif_data,
            'gcm'   =>  [],
            'apns'  =>  [],
        ];
    }else{//Andriod
        $fcmApiKey = 'xxxxxxxxxxxxxxxxxxxxxxxxxxx';//Key could be same in my case both are different
        
        $fields = [
            'time_to_live'      =>  604800,
            'priority'          =>  'high',
            'registration_ids'  =>  array($device_id),
            // 'notification'      =>  [
            //                             'title' => urldecode($title),
            //                             'body'  => urldecode($body),
            //                             'sound' => 'default',
            //                             'badge' => '1'
            //                         ],
            'data'  =>  $notif_data,
            'gcm'   =>  [],
            'apns'  =>  [],
        ];
    } 
    //echo $device_type;
    
    //Google URL
    $url = 'https://fcm.googleapis.com/fcm/send';

    $headers = array(
        'Authorization: key=' . $fcmApiKey,
        'Content-Type: application/json'
    );

    $ch = curl_init(); 
    curl_setopt( $ch,CURLOPT_URL, $url );
    curl_setopt( $ch,CURLOPT_POST, true );
    curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
    curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
    
    // Execute post
    $result = curl_exec($ch);
    if ($result === FALSE) {
        // return curl_error($ch);
        $result = curl_exec($ch);
        if ($result === FALSE) {
            return false;
        }
    }
    //echo $result;die;
    // Close connection
    curl_close($ch); 
    return $result;
    
}

function sendWebPush($title,$body,$url,array $token){

  define('SERVER_API_KEY', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');

  $tokens = $token;
  $registrationIds = $tokens;
  $header = [
    'Authorization: Key=' . SERVER_API_KEY,
    'Content-Type: Application/json'
  ];

  $msg = [
    'title' => $title,
    'body' => $body,
    'icon' => '',
    'url' => $url
  ];

  $payload = [
    'registration_ids'  => $registrationIds,
    'data'        => $msg
  ];

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode( $payload ),
    CURLOPT_HTTPHEADER => $header
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    //echo "cURL Error #:" . $err;
  } else {
    //echo $response;
  }

}

function sendSMS($phone,$msg){
    //$message = rawurlencode('The OTP to input in the Test app for authentication is '.$otp);
    $message = rawurlencode($msg);
    ///$url = "https://api.textlocal.in/send/?apiKey=".$apiKey."&sender=Test&numbers=".$phone."&message=".$message;
    $url = "http://smpp.valueleaf.com/sendsms.jsp?user=EEMPLTr&password=1170e55bbeXX&senderid=smsnow&mobiles=".$phone."&sms=".$message;
    //echo $url;die;
    $ch = curl_init();
    $timeout = 5;
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    
    $data = curl_exec($ch);
    
    curl_close($ch);
    
    return $data;
}

if(!function_exists('DiffBwDates')){
  function DiffBwDates($date_1,$date_2,$type){
    // Declare and define two dates 
    $date1 = strtotime($date_1);  //"2016-06-01 22:45:00"
    $date2 = strtotime($date_2);  //"2018-09-21 10:44:01"
      
    // Formulate the Difference between two dates 
    $diff = abs($date2 - $date1);  
      
    //TYPE 1 for Year, 2 for Months, 3 for Days, 4 for Hours, 5 for Minutes, 6 for Seconds 

    // To get the year divide the resultant date into 
    // total seconds in a year (365*60*60*24) 
    $type_1 = floor($diff / (365*60*60*24));  //YEARS
    $years  = $type_1;
      
      
    // To get the month, subtract it with years and 
    // divide the resultant date into 
    // total seconds in a month (30*60*60*24) 
    $type_2 = floor(($diff - $years * 365*60*60*24) 
                                   / (30*60*60*24));  //MONTHS
    $months = $type_2;                               
                                   
      
      
    // To get the day, subtract it with years and  
    // months and divide the resultant date into 
    // total seconds in a days (60*60*24) 
    $type_3 = floor(($diff - $years * 365*60*60*24 -  
                 $months*30*60*60*24)/ (60*60*24)); //DAYS
    $days = $type_3;    
      
      
    // To get the hour, subtract it with years,  
    // months & seconds and divide the resultant 
    // date into total seconds in a hours (60*60) 
    $type_4 = floor(($diff - $years * 365*60*60*24  
           - $months*30*60*60*24 - $days*60*60*24) 
                                       / (60*60));  //HOURS
    $hours = $type_4;  
      
      
    // To get the minutes, subtract it with years, 
    // months, seconds and hours and divide the  
    // resultant date into total seconds i.e. 60 
    $type_5 = floor(($diff - $years * 365*60*60*24  
             - $months*30*60*60*24 - $days*60*60*24  
                              - $hours*60*60)/ 60);  //MINUTES
    
    $minutes = $type_5;
      
    // To get the minutes, subtract it with years, 
    // months, seconds, hours and minutes  
    $type_6 = floor(($diff - $years * 365*60*60*24  
             - $months*30*60*60*24 - $days*60*60*24 
                    - $hours*60*60 - $minutes*60));  //SECONDS
    $seconds = $type_6;
    
    if($type=='3'){
        return $days;
    }
    if($type=='4'){
        return $hours;
    }
    if($type=='5'){
        return $minutes;
    }

  }
}

if(!function_exists('GetTotalMinDiff')){
  function GetTotalMinDiff($date_1,$date_2){
    $days = DiffBwDates($date_1,$date_2,'3');
    $hr = DiffBwDates($date_1,$date_2,'4');
    $min = DiffBwDates($date_1,$date_2,'5');

    $min_1 = '0';$min_2 = '0';$min_3 = $min;
    if($days!='0'){
      $hrs = $days * 24;
      $min_1 = $hrs * 60;
    }
    if($hr!='0'){
      $min_2 = $hr * 60;
    }

    return $min_1 + $min_2 + $min_3;
  }
}

function cashFreePayment($orderId='',$orderAmount='',$orderCurrency=''){

  $curl = curl_init();

  $fields = array(
      'orderId'=> $orderId,
      'orderAmount'=> $orderAmount,
      'orderCurrency'=> $orderCurrency,
  );

  //print_r($fields);die;
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://test.cashfree.com/api/v2/cftoken/order",//for live api.cashfree.com
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode($fields),
    CURLOPT_HTTPHEADER => array(
      "cache-control: no-cache",
      "content-type: application/x-www-form-urlencoded",
      "postman-token: 6a0110a8-94c9-7b80-4dfa-5a374d75584c",
      "x-client-id: 3135047b8b4792253c267ac8105313",
      "x-client-secret: d33b7593f6153e2e53dc5c8e1d5c16a5f6ee3507"
      // "x-client-id: 1580870f99cd4855a229963ee80851",
      //"x-client-secret: 3f64363dd17796d906be62767c52405b1951d37c"
    ),
  ));
   
  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);
  return json_decode($response);
  // if ($err) {
  //   echo "cURL Error #:" . $err;
  // } else {
  //   echo $response;
  // }
}

if(!function_exists('getStartAndEndDate')) {
  function getStartAndEndDate($week, $year) {
    $dto = new DateTime();
    $dto->setISODate($year, $week);
    $ret['week_start'] = date('Y-m-d',strtotime($dto->format('Y-m-d')));
    $dto->modify('+6 days');
    $ret['week_end'] = date('Y-m-d',strtotime($dto->format('Y-m-d')));
    return $ret;
  }
}


if(!function_exists('deleteFile')){
  function deleteFile($path=''){
    if(!empty($path)){\Storage::delete($path);}
  }
}

if(!function_exists('flagViceVersa')){
  function flagViceVersa($current){
    return ($current==1) ? 0 : 1;
  }
}


function uploadFile($targetDir, $request, $fileName)
{
    $file = $request->file($fileName);
    $ext = $file->getClientOriginalExtension();
    $newFileName = date('YmdHis') . time() . Str::random(10) . '.' . $ext;
    $path = $request->file($fileName)->storeAs($targetDir, $newFileName);
    if ($path){
        return ['errorMsg' => "File successfully uploaded.", 'errorCode' => 0, 'fileName' => $path];
    }else{
        return ['errorMsg' => "Sorry, there was an error uploading your file.", 'errorCode' => 1];
    }
}

function uploadFiles($targetDir, $request, $fileName)
{
    $files = $request->file($fileName);
    $status = 1;
    $fileCounter = 1;
    $fileNames = [];
    foreach ($files as $file)
    {
        $ext = $file->getClientOriginalExtension();
        $newFileName = date('YmdHis') . time() . Str::random(10) . $fileCounter . '.' . $ext;
        $path = $file->storeAs($targetDir, $newFileName);
        if ($path){
            $fileNames[] = $newFileName;
        }else{
            $status = 0;
            break;
        }
        $fileCounter++;
    }
    if ($status){
        return ['errorMsg' => "Files successfully uploaded.", 'errorCode' => 0, 'fileNames' => $fileNames];
    }else{
        return ['errorMsg' => "Sorry, there was an error uploading your file(s).", 'errorCode' => 1];
    }
}

function stockClass($available){
  return ($available > 10) ? 'text-green' : 'text-red';
}

if(!function_exists('guestId')){
  function guestId(){
    return str_shuffle('cannabis').'_'.mt_rand(99,99999);
  }
}


if(!function_exists('userGuestId')){
  function userGuestId(){
    return Cookie::get('can_guest_id');
  }
}

if(!function_exists('makeDiscountPrice')){
  function makeDiscountPrice($original,$disc_type,$disc,$only_disc=0){
    if($only_disc==1){
      return customRound(checkValue($original * $disc/100));
    }
    if($disc_type==2){
      $price = $original - $disc;
    }else if($disc_type==1){
      $price = $original - checkValue($original * $disc/100);
    }else{
      $price = 0;
    }
    $price = ($price < 0) ? 0 : $price;
    return customRound($price);
  }
}

function isCustomerLogin(){
  return session()->has('user_session_data');
}

function testHelper(){
  return "I am Helper";
}

if(!function_exists('genOrderID')) {
  function genOrderID($user_id) {
    return strtoupper(GetRandomNos(6).str_shuffle('order').$user_id.date("is"));
  }
}

if(!function_exists('genStoreID')) {
  function genStoreID($user_id) {
    return strtoupper('S'.$user_id.GetRandomNos(4).date("is"));
  }
}

if(!function_exists('genBookingID')) {
  function genBookingID() {
    return strtoupper('BK'.GetRandomNos(6).date("is"));
  }
}

if(!function_exists('genInvNo')) {
  function genInvNo($user_id) {
    return strtoupper(GetRandomNos(2).str_shuffle('inv').$user_id.date("is"));
  }
}

function orderStatus($status){
  if($status==0){
    return ['msg'=> 'Order Receive','icon'=>asset('public/website/img/11_myOrders_107.png')];
  }else if($status==1){
    return ['msg'=> 'On the Way','icon'=>asset('public/website/img/11_myOrders_94.png')];
  }else if($status==2){
    return ['msg'=> 'Shipped','icon'=>asset('public/website/img/11_myOrders_77.png')];
  }else if($status==3){
    return ['msg'=> 'Order Received','icon'=>asset('public/website/img/11_myOrders_70.png')];
  }else{
    return ['msg'=>'','icon'=>''];
  }
}

if(!function_exists('putNullifEmpty')) {
  function putNullifEmpty($value) {
    if(!empty($value) && !is_null($value)){
      return (string)$value;
    }else{
      return NULL;
    }
  }
}

function milesDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 3959){//6371000
  // convert from degrees to radians
  $latFrom = deg2rad($latitudeFrom);
  $lonFrom = deg2rad($longitudeFrom);
  $latTo = deg2rad($latitudeTo);
  $lonTo = deg2rad($longitudeTo);

  $latDelta = $latTo - $latFrom;
  $lonDelta = $lonTo - $lonFrom;

  $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
    cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
  return $angle * $earthRadius;
}

function morningEndTime(){
  return '12:00';
}

function afternoonStartTime(){
  return '12:00';
}

function afternoonEndTime(){
  return '17:00';
}

function eveningStartTime(){
  return '17:00';
}

function admin_user_type(){
  return 1;
}

function vendor_user_type(){
  return 2;
}

function artist_user_type(){
  return 3;
}

function customer_user_type(){
  return 4;
}

function maxMiles(){
  return 10000000;
}

function callDistanceFunc($request,$with_alias=1){
  if($with_alias==1){
      return 'ROUND(GetDistanceInMiles("'.$request->latitude.'","'.$request->longitude.'",latitude,longitude),2) as distance';
  }else{
      return 'ROUND(GetDistanceInMiles("'.$request->latitude.'","'.$request->longitude.'",latitude,longitude),2)';
  }
}

function getWeekday($date) {//1 to 7 Mon to Sun
    return date('w', strtotime($date));
}

function rightNowLocalDT(){ 
    return date("Y-m-d H:i:s", strtotime(date("Y-m-d H:i:s"))+(@$_COOKIE['TzOffMin']*60));
}

function localDate(){
  $local_now = rightNowLocalDT();
  return date("Y-m-d",strtotime($local_now));
}

function localTimeNow(){
  $local_now = rightNowLocalDT();
  return date("H:i",strtotime($local_now));
}

function formatAdd($addObj){
  return ucwords($addObj->line_1.' '.$addObj->line_2.', Pincode - '.$addObj->zip_code.', '.$addObj->city.', '.$addObj->state.', '.$addObj->country);
}

function unsetMultiple($removeKeys, $arr){
  // foreach($removeKeys as $key) {
  //    unset($arr[$key]);
  // }
  return array_diff_key($arr, array_flip($removeKeys));
}

function thisLastOrMonth($monthNum){
  if($monthNum==date('m')){
      $month = 'This Month';
  }else if($monthNum==date('m')-1){
      $month = 'Last Month';
  }else{
      $month = getMonthName($monthNum);
  }
  return $month;
}

function compareAndGetPercentage($newFigure, $oldFigure)
{
    if($newFigure === 0 && $oldFigure === 0){
      return 0;
    }else if($newFigure > 0){
      return (1 - $oldFigure / $newFigure) * 100;
    }else{
      return '-'.$oldFigure.'00';
    }
}

function humanDate($date){
  return date('j M, y',strtotime($data));
}

function monthArrVal(){
  return [0,0,0,0,0,0,0,0,0,0,0,0];
}

?>