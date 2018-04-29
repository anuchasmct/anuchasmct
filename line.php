 <?php
  

function send_LINE($msg){
 $access_token = 'uFGEJYG4XiBO5kqPzxO/1srV2YjjQMrjSNj1vN6xYgKSoEVz0hwJCnqRQszWcHvv+tustrIeyLm25XwtO81og80hqDCHb5pojQ9H0nEIOkp3yKyJzUgarCsszfxoh9Xy8VeOMnVd4wvDNNP8U7xvpQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'b72e593621c44ea57a80c0203b563809',
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
