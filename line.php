 <?php
  

function send_LINE($msg){
 $access_token = 'bbx/oESdgiIAhGyezmwehsTc+8EZF/S60BBL6X2hYmT8vq7Si2tJba9sAcYLkDJnWXhakeGFivFe1UlpdqDrGFwnN4OGhgjjeAfyosKO6ci8sbRvFYXUwd1/fvQ+eCvuQfpwm2hb52tJyIVU2V+WtQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U0f6271ec5746fb7ed1d9e30a445a7b4e',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
