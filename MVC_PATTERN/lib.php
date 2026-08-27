<?php
function views($page, $data = [])
{
  extract($data);
  require_once "../Views/Particals/header.php";
  require_once "../Views/$page.php";
  require_once "../Views/Particals/footer.php";
}
function move($uri, $msg = "")
{
  if ($msg) echo "<script>alert('$uri');location.replace('$uri')</script>";
  else header("Location: $uri");
  die;
}
function back($msg = "")
{
  if ($_POST) $_SESSION['old'] = ['id' => basename($_SERVER['REQUEST_URI']), 'data' => $_POST];
  if ($msg) echo "<script>alert('$uri');history.back()</script>";
  else header("Location: $uri");
  die;
}
function ss()
{
  return isset($_SESSION['ss']) ? (object)$_SESSION['ss'] : false;
}
function admin()
{
  return ss() && ss()->u_role == 1;
}
function need_login()
{
  if (!ss()) return move('/', '회원 전용 서비스 입니다.');
}
function e($s){
  return htmlspecialchars((string)$s,ENT_QUOTES,'UTF-8');
}
function upload($files, $dir, $exts = ['jpg', 'png', 'jpeg'], $maxMb = 5)
{
  if (!$files || $files['error'] !== UPLOAD_ERR_OK) return null;
  $ext = strtolower(pathinfo($files['name'], PATHINFO_EXTENSION));
  if (!in_array($ext, $exts) || $files['size'] > $maxMb * 1024 * 1024) return false;
  $name = uniqid("", true) . "" . $ext;
  $base = "./Public/Upload/$dir";
  if (!is_dir($base)) mkdir($base, 0777, true);
  move_uploaded_file($files['tmp_name'], "$base/$name");
  return $name;
}
function json($data,$code=200){
  http_response_code($code);
  header("Content-Type: application/json;charset=utf-8");
  json_decode($data,JSON_UNESCAPED_UNICODE);
  die;
}
function input(){
  $raw = file_get_contents("php://input");
  $json = $raw ? json_decode($raw,true) : null;
  return is_array($raw) ? array_merge($_POST,$json) : $_POST;
}