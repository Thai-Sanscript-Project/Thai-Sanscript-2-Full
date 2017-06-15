<?PHP

include_once 'config.inc';


$url = $config['url'] . "/aksharamukha-api.php";

$params = array("src" => "burmese", "tgt" => "unicode", "natural" => "true", "text" => filter_input(INPUT_POST, "src"));

$url .= "?" . http_build_query($params);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($ch);

//$xml=simplexml_load_string($data) or die("Error: Cannot create object");
echo $data;

curl_close($ch);
