<?php

class Texi
{
  var $url;
  var $apikey;

  function __construct($url = '', $apikey = '')
  {
    $this->init($url, $apikey);
  }

  function init($url = '', $apikey = '')
  {
    $this->url = $url;
    $this->apikey = $apikey;
  }

  function send($recipient, $message)
  {
    $data = array(
      'apikey' => $this->apikey,
      'recipient' => $recipient,
      'message' => $message,
    );
    return $this->post($this->url . '/api/send', $data);
  }

  function post($url, $content)
  {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($content));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $output = curl_exec($ch);

    curl_close($ch);
    return $output;
  }
}

// Shorthand
function texi_send($url, $apikey, $recipient, $message)
{
  $texi = new Texi($url, $apikey);
  return $texi->send($recipient, $message);
}
