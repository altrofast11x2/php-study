<?php
function view($page, $data = [])
{
  extract($data);
  require_once "../Views/Particals/header.php";
  require_once "../Views/$page.php";
  require_once "../Views/Particals/footer.php";
}
function move($uri, $msg = "")
{
  if ($msg) echo "<script>alert('$msg');location.replace('$uri');</script>";
  else header("Location: $uri");
  die;
}
function back($msg = "")
{
  if ($msg) echo "<script>alert('$msg');history.back();</script>";
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
function need_login($uri, $msg)
{
  if (!ss()) return move($uri, $msg);
}
function e($s)
{
  return htmlspecialchars($s, (string) ENT_QUOTES, 'UTF-8');
}
function upload($file, $dir, $maxMb = 5, $exts = ['png', 'jpg', 'jpeg'])
{
  if (!$file || $file['error'] !== UPLOAD_ERR_OK) return null;
  $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
  if (!in_array($ext, $exts) || $file['size'] > $maxMb * 1024 * 1024) return false;
  $name = uniqid('') . '.' . $ext;
  $base = "../Public/$dir";
  if (!is_dir($base)) mkdir($base, 0777, true);
  move_uploaded_file($file['tmp_name'], "$base/$name");
  return $name;
}
function input()
{
  $raw = file_get_contents("php://input");
  $json = $raw ? json_decode($raw, true) : null;
  return is_array($json) ? array_merge($_POST, $json) : $_POST;
}
function json($data, $code = 200)
{
  http_response_code($code);
  header('Content-Type: application/json; charset=utf-8');
  echo json_encode($data, JSON_UNESCAPED_UNICODE);
  die;
}