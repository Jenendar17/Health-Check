<?php

date_default_timezone_set('Asia/Kolkata');
require 'PHPMailerAutoload.php';
include_once 'helperClass.php' ;

/**
 * Description of emailClass
 *
 * @author admin
 */
class EmailClass {

    var $fromname = 'Concorde Tech Turf';
    var $defaultUrl = 'mohanritteka.indiahomes.com';

    public function callback() {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $mobile = $_REQUEST['mobile'];
        $source = $_REQUEST['source']; 
        $coutrycode = $_REQUEST['CountryCode']; 
        $validMobile = EmailClass::validationCheckMobile($mobile);

        if ($source === 'Speak to an Expert' || $source === 'Popup Form' || $source === 'Price Popup' || $source === 'Fixed Callback') {
            setcookie('popout', 'it works');
            
            if ($validMobile === true) {
                $this->_callbackin5minutes($name, $email, $mobile, $countryCode, $_REQUEST['Comment'], '' . $this->defaultUrl. ' - ' . $source, $_REQUEST['projectid']);  
            } 

            return $validMobile;

        } elseif ($source === 'Footer Form' || $source === 'Instant Callback') {
            setcookie('popout', 'it works');           
            $validEmail = EmailClass::validationCheckEmail($email);
            if (($validMobile === true) && ($validEmail === true)) {
                if($source === 'Footer Form'){unset($_SESSION['captcha']);}
                $this->_callbackin5minutes($name, $email, $mobile, $countryCode, $_REQUEST['Comment'], '' . $this->defaultUrl. ' - ' . $source, $_REQUEST['projectid']);    
                
                return $validMobile;
            } else{
                $errorMsg = 'Enter a valid mobile number and/or email address.';
                return $errorMsg;
            }
        } 
    }

    public static function validationCheckMobile($mobile) {
        $msg = true;
        if (empty($mobile) || strlen($mobile) >= 18 || strlen($mobile) <= 3 || $mobile === 'Mobile:' || !(EmailClass::is_mobileNumber($mobile))) {
            $msg = 'Enter a valid mobile number.';
            return $msg;
        }
        return $msg;
    }

    public static function validationCheckEmail($email) {
        $msg = true;
        if (empty($email) || !(EmailClass::isValidEmail($email)) || $email === 'Email:') {
            $msg = 'Enter a valid email address.';
            return $msg;
        }
        return $msg;
    }

    public static function isValidEmail($email) {
        //return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);
        return filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/@.+\./', $email);
    }

    public static function is_mobileNumber($mobile) {
        $regex1 = '123456789';
        $regex2 = '1234567890';
        $regex3 = '0123456789';

        if (preg_match('/^([0-9])\1*$/', $mobile)) {
            return false;
        } elseif ($mobile == $regex1) {
            return false;
        } elseif ($mobile == $regex2) {
            return false;
        } elseif ($mobile == $regex3) {
            return false;
        } elseif (preg_match("/[^0-9]/", $mobile)) {
            return false;
        } else {
            return true;
        }
    }

    public function _callbackin5minutes($name, $email, $mobile, $countryCode, $comments, $screenName, $projectID) {
        $key = 'SEM';
        $campaignName = $_COOKIE['vaLead_Campaign'];
        $channelName = $_COOKIE['vaLead_Channel'];
        $keyword = $_COOKIE['vaLead_Keyword'];
        $placement = $_COOKIE['vaLead_Placement'];
        $device = $_COOKIE['vaLead_Device'];
        
        $utmSource = $_COOKIE['vaLead_UtmSourceName'];
        $utmMedium = $_COOKIE['vaLead_UtmMediumName'];
        $utmCampaign = $_COOKIE['vaLead_UtmCampaignName'];        

        $ip_add =  helperClass::getIpAddr();

        //$ChannelDetails = "Source of traffic: VT, Project Name: ". $this->fromname .", Client Name:". $name .", Campaign Name:". $campaignName .", Channel Name:". $channelName .", Keyword:". $keyword .", Placement:". $placement .", Device:". $device;
        $ChannelDetails = "Source of traffic: VT, Project Name: .". $this->fromname ." , Client Name:". $name .", Campaign Name:". $campaignName .", Channel Name:". $channelName .", Keyword:". $keyword .", Placement:". $placement .", Device:". $device .", UTM Source Name:". $utmSource .", UTM Medium Name:". $utmMedium .", UTM Campaign Name:". $utmCampaign;

        if ($countryCode!="") {
            $mobile = $countryCode.$mobile;
        }   

        $url =  "http://www.indiahomes.com/util.html?";
        $url .= "action=genericFormFill";
        $url .= "&name=". urlencode($name) ."";
        $url .= "&mobileNumber=". urlencode($mobile) ."";
        $url .= "&emailId=".  urlencode( $email ) . "";
        $url .= "&via=".  urlencode($key) ."";
        $url .= "&viaDetails=".  urlencode($ChannelDetails). "";
        $url .= "&projectId=".  urlencode($projectID) ."";
        $url .= "&ip=". urlencode($ip_add) ."";
        $url .= "&screenName=". urlencode($screenName);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_exec($ch);
        curl_close($ch);

        
    }
}

?>