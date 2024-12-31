<?php
$phn=$_GET["phone"];
$url = 'https://railspaapi.shohoz.com/v1.0/app/auth/sign-up/request?android_app_version=11&android_device_id=2';

$data = array(
    'full_name' => 'JOY',
    'email' => 'joymiarana@gmail.com',
    'mobile_number' => $phn,
    'password' => 'Joy@#2024',
    'password_confirmation' => 'Joy@#2024',
    'identification_type' => '2',
    'identification_number' => '1508558655',
    'postal_code' => '6500',
    'address' => 'kalipur, dubolhati',
    'dob' => '2001-07-13'
);

$headers = array(
    'User-Agent: Mozilla/5.0',
    'Accept: application/json, text/plain, */*',
    'Accept-Language: en-US,en;q=0.5',
   'Content-Type: application/json',
    'Referer: https://railapp.railway.gov.bd/',
    'Origin: https://railapp.railway.gov.bd',
    'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: cross-site',
    'Connection: keep-alive'
);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    echo 'Api from :' . $response;
}

curl_close($ch);
?>
