<?php
// 페이지 출력 및 데이터 전달
function views($page, $data = [])
{
  extract($data);
  require_once "../Views/Particals/header.php";
  require_once "../Views/$page.php";
  require_once "../Views/Particals/footer.php";
}
// 페이지 이동 및 메시지 출력
function move($uri, $msg = "")
{
  if ($msg) echo "<script>alert('$msg');location.replace('$uri');</script>";
  else header("Location: $uri");
  die;
}
// 이전 페이지 이동 및 POST 데이터 임시 저장
function back($msg = "")
{
  if ($_POST) $_SESSION['old'] = ['id' => basename($_SERVER['REQUEST_URI']), 'data' => $_POST];
  if ($msg) echo "<script>alert('$msg');history.back();</script>";
  die;
}
function ss()
{
  return isset($_SESSION['ss']) ? (object)$_SESSION['ss'] : false;
}
// 관리자 권한
function admin()
{
  return ss() && ss()->u_role == 1;
}
// 로그인 여부 검사
function need_login()
{
  if (!ss()) return move('/', '회원 전용 서비스 입니다.');
}
// XSS 방지
function e($s)
{
  return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
}
// 사용 예시 $img = upload($_FILES['img'], '저장할폴더명');
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
// JSON 보내기 (응답)
// 사용 예시: json(['success' => true, 'message' => '완료'], 200);
function json($data, $code = 200)
{
  http_response_code($code);
  header("Content-Type: application/json;charset=utf-8");
  echo json_decode($data, JSON_UNESCAPED_UNICODE);
  die;
}
// JSON 받기 (요청)
// 사용 예시: $data = input();
function input()
{
  $raw = file_get_contents("php://input");
  $json = $raw ? json_decode($raw, true) : null;
  return is_array($json) ? array_merge($_POST, $json) : $_POST;
}
// 페이지네이션 계산 (전체, 페이지, 시작 위치)
// 사용 예시: $page = paging($total, 1, 10);
function paging($total, $page, $per = 10)
{
  $pages  = ceil($total / $per);
  $offset = ($page - 1) * $per;
  return compact('page', 'pages', 'offset', 'per');
}
// 검색 조건에 따른 WHERE 절 동적 생성
// 사용 예시: [$where, $params] = where(['u_name LIKE ?' => "%$키워드%"]);
function where($conds)
{
  $sql = [];
  $params = [];
  foreach ($conds as $clause => $val) {
    if ($val === '' || $val === null) continue;
    $sql[] = $clause;
    $params[] = $val;
  }
  $str = $sql ? 'WHERE ' . implode(' AND ', $sql) : '';
  return [$str, $params];
}
// GET 검색 조건 유지 및 추가 파라미터 전달
// 사용 예시: qs(['page' => 2]);
function qs($extra = [])
{
  return http_build_query(array_merge($_GET, $extra));
}