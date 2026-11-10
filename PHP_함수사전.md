# PHP 함수 사전 (A~Z 총정리)

> 형식: `함수명(인자)` → 하는 일 → **리턴값**
---

## A

| 함수 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `abs` | `abs(-5)` | 절댓값 → `5` |
| `addslashes` | `addslashes("it's")` | `'` `"` `\` 앞에 역슬래시 → `"it\'s"` |
| `array_chunk` | `array_chunk($arr, 3)` | 3개씩 쪼갬 → 2차원 배열 |
| `array_chunk` | `array_chunk($arr, 3, true)` | 키 보존하며 쪼갬 → 2차원 배열 |
| `array_column` | `array_column($rows, 'name')` | 2차원에서 컬럼 하나만 → 1차원 배열 |
| `array_column` | `array_column($rows, 'name', 'id')` | id를 키로 name 매핑 → 연관 배열 |
| `array_combine` | `array_combine($keys, $vals)` | 키배열+값배열 합침 → 연관 배열 |
| `array_count_values` | `array_count_values($arr)` | 값별 등장 횟수 → `['a'=>2]` |
| `array_diff` | `array_diff($a, $b)` | $a에만 있는 값 → 배열 |
| `array_diff_key` | `array_diff_key($a, $b)` | 키 기준 차집합 → 배열 |
| `array_fill` | `array_fill(0, 5, null)` | 0번부터 5칸 채움 → 배열 |
| `array_fill_keys` | `array_fill_keys(['a','b'], 0)` | 키들에 같은 값 → `['a'=>0,'b'=>0]` |
| `array_filter` | `array_filter($a, fn($v) => $v > 5)` | 조건 통과만 (키 유지) → 배열 |
| `array_filter` | `array_filter($a)` | falsy 전부 제거 → 배열 |
| `array_flip` | `array_flip($a)` | 키↔값 뒤집기 → 배열 |
| `array_intersect` | `array_intersect($a, $b)` | 교집합 → 배열 |
| `array_intersect_key` | `array_intersect_key($a, $허용키)` | 허용 키만 남김 → 배열 |
| `array_is_list` | `array_is_list($a)` | 0부터 순서대로인 배열인지 (8.1+) → bool |
| `array_key_exists` | `array_key_exists('k', $a)` | 키 존재 (값 null이어도 true) → bool |
| `array_key_first` | `array_key_first($a)` | 첫 번째 키 → mixed |
| `array_key_last` | `array_key_last($a)` | 마지막 키 → mixed |
| `array_keys` | `array_keys($a)` | 키 전부 → 배열 |
| `array_keys` | `array_keys($a, "값")` | 그 값을 가진 키들 → 배열 |
| `array_map` | `array_map(fn($v) => $v * 2, $a)` | 각 요소 변환 → 새 배열 |
| `array_map` | `array_map(null, $a, $b)` | 두 배열 zip → 2차원 배열 |
| `array_merge` | `array_merge($a, $b)` | 병합 (숫자키 재인덱싱) → 배열 |
| `array_merge_recursive` | `array_merge_recursive($a, $b)` | 깊은 병합 → 배열 |
| `array_multisort` | `array_multisort($col, SORT_DESC, $rows)` | 다중 컬럼 정렬 → bool (원본 수정) |
| `array_pad` | `array_pad($a, 5, 0)` | 길이 5까지 0으로 채움 → 배열 |
| `array_pop` | `array_pop($a)` | 끝 요소 꺼냄 (원본 제거) → 값 |
| `array_product` | `array_product($a)` | 전부 곱셈 → 숫자 |
| `array_push` | `array_push($a, 1, 2)` | 끝에 추가 → 새 길이 |
| `array_rand` | `array_rand($a)` | 랜덤 키 1개 → 키 |
| `array_rand` | `array_rand($a, 2)` | 랜덤 키 2개 → 배열 |
| `array_reduce` | `array_reduce($a, fn($c,$v) => $c+$v, 0)` | 누적 계산 → 단일 값 |
| `array_replace` | `array_replace($a, $b)` | 같은 키를 덮어씀 → 배열 |
| `array_reverse` | `array_reverse($a)` | 순서 뒤집기 → 배열 |
| `array_reverse` | `array_reverse($a, true)` | 키 보존하며 뒤집기 → 배열 |
| `array_search` | `array_search("값", $a)` | 값의 키 찾기 → 키 또는 `false` |
| `array_shift` | `array_shift($a)` | 맨 앞 꺼냄 (인덱스 재정렬) → 값 |
| `array_slice` | `array_slice($a, 1, 2)` | 1번부터 2개 복사 → 배열 |
| `array_slice` | `array_slice($a, -3)` | 뒤에서 3개 → 배열 |
| `array_splice` | `array_splice($a, 1, 2)` | 잘라내기 (원본 수정) → 잘린 배열 |
| `array_sum` | `array_sum($a)` | 전부 더하기 → 숫자 |
| `array_unique` | `array_unique($a)` | 중복 제거 (키 유지) → 배열 |
| `array_unshift` | `array_unshift($a, 0)` | 맨 앞에 추가 → 새 길이 |
| `array_values` | `array_values($a)` | 값만 + 인덱스 재정렬 → 배열 |
| `array_walk` | `array_walk($a, function(&$v,$k){ $v++; })` | 원본 수정하며 순회 → bool |
| `arsort` | `arsort($a)` | 값 내림차순 (키 유지) → bool |
| `asort` | `asort($a)` | 값 오름차순 (키 유지) → bool |

## B

| 함수 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `base64_encode` | `base64_encode($s)` | base64 인코딩 → 문자열 |
| `base64_decode` | `base64_decode($s)` | base64 디코딩 → 문자열 |
| `base_convert` | `base_convert("ff", 16, 2)` | 진법 변환 → `"11111111"` |
| `basename` | `basename("/a/b/c.php")` | 파일명만 → `"c.php"` |
| `basename` | `basename($p, ".php")` | 확장자 뗀 파일명 → `"c"` |
| `bcadd` | `bcadd("0.1", "0.2", 2)` | 정밀 덧셈 (bcmath) → `"0.30"` |
| `bcsub` / `bcmul` / `bcdiv` | `bcmul("2.5", "4", 2)` | 정밀 뺄셈/곱셈/나눗셈 → 문자열 |
| `bin2hex` | `bin2hex(random_bytes(16))` | 바이너리 → 16진 문자열 (토큰 생성) |
| `bindec` | `bindec("1010")` | 2진 → 10진 → `10` |
| `boolval` | `boolval("0")` | bool 변환 → `false` |

## C

| 함수 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `call_user_func` | `call_user_func($fn, $a, $b)` | 콜백을 인자 나열해서 호출 → 콜백 리턴값 |
| `call_user_func_array` | `call_user_func_array($fn, [$a, $b])` | **배열을 인자로 펼쳐서** 호출 → 리턴값 (Router가 사용) |
| `ceil` | `ceil(4.1)` | 올림 → `5.0` |
| `checkdate` | `checkdate(2, 30, 2026)` | 실제 존재하는 날짜인지 → `false` |
| `chr` | `chr(65)` | 아스키 코드 → 문자 `"A"` |
| `chunk_split` | `chunk_split($s, 4, "-")` | 4글자마다 구분자 삽입 → 문자열 |
| `class_exists` | `class_exists('PDO')` | 클래스 존재 여부 → bool |
| `compact` | `compact('a', 'b')` | 변수명 → 배열 `['a'=>$a]` |
| `constant` | `constant('PI')` | 문자열로 상수 읽기 → 값 |
| `copy` | `copy($src, $dst)` | 파일 복사 → bool |
| `count` | `count($a)` | 개수 → int |
| `count` | `count($a, COUNT_RECURSIVE)` | 다차원 전체 개수 → int |
| `ctype_alpha` | `ctype_alpha($s)` | 영문자만인지 → bool |
| `ctype_digit` | `ctype_digit($s)` | 숫자만인지 (문자열 기준) → bool |
| `ctype_alnum` | `ctype_alnum($s)` | 영문+숫자만인지 → bool |
| `ctype_space` | `ctype_space($s)` | 공백만인지 → bool |
| `curl_init` | `$ch = curl_init($url)` | cURL 핸들 생성 → 핸들 |
| `curl_setopt_array` | `curl_setopt_array($ch, [...])` | 옵션 일괄 설정 → bool |
| `curl_exec` | `curl_exec($ch)` | 요청 실행 → 응답 문자열 |
| `curl_getinfo` | `curl_getinfo($ch, CURLINFO_HTTP_CODE)` | 응답 정보 → 값 |
| `curl_close` | `curl_close($ch)` | 핸들 닫기 → void |
| `current` | `current($a)` | 현재 포인터 값 → 값 |

## D

| 함수 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `date` | `date("Y-m-d H:i:s")` | 현재 시각 포맷 → 문자열 |
| `date` | `date("Y-m-d", $ts)` | 타임스탬프 포맷 → 문자열 |
| `date_default_timezone_set` | `date_default_timezone_set('Asia/Seoul')` | 기본 시간대 설정 → bool |
| `debug_backtrace` | `debug_backtrace()` | 호출 스택 → 배열 |
| `decbin` | `decbin(10)` | 10진 → 2진 → `"1010"` |
| `dechex` | `dechex(255)` | 10진 → 16진 → `"ff"` |
| `decoct` | `decoct(8)` | 10진 → 8진 → `"10"` |
| `define` | `define("PI", 3.14)` | 런타임 상수 정의 → bool |
| `defined` | `defined("PI")` | 상수 존재 여부 → bool |
| `dirname` | `dirname("/a/b/c.php")` | 상위 경로 → `"/a/b"` |
| `disk_free_space` | `disk_free_space("/")` | 남은 용량 → float |

## E

| 함수 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `empty` | `empty($v)` | falsy면 true (미선언도 경고 X) → bool |
| `end` | `end($a)` | 마지막 요소 → 값 |
| `error_log` | `error_log(print_r($v, true))` | 로그 파일에 기록 → bool |
| `error_reporting` | `error_reporting(E_ALL)` | 에러 보고 수준 설정 → int |
| `explode` | `explode(",", "a,b,c")` | 문자열 쪼개기 → `['a','b','c']` |
| `explode` | `explode(",", $s, 2)` | 최대 2조각 → 배열 |
| `extension_loaded` | `extension_loaded('gd')` | 확장 모듈 로드 여부 → bool |
| `extract` | `extract(['a' => 1])` | 배열 키를 변수로 → 개수 (views()가 사용) |

## F

| 함수 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `fclose` | `fclose($fp)` | 파일 닫기 → bool |
| `fdiv` | `fdiv(1, 0)` | 0으로 나눠도 예외 없음 → `INF` |
| `feof` | `feof($fp)` | 파일 끝인지 → bool |
| `fgetcsv` | `fgetcsv($fp)` | CSV 한 줄 → 배열 |
| `fgets` | `fgets($fp)` | 한 줄 읽기 → 문자열 |
| `file` | `file($p, FILE_IGNORE_NEW_LINES)` | 줄 단위로 전부 → 배열 |
| `file_exists` | `file_exists($p)` | 파일/폴더 존재 → bool |
| `file_get_contents` | `file_get_contents($p)` | 통째로 읽기 → 문자열 |
| `file_get_contents` | `file_get_contents("php://input")` | 요청 본문 읽기 (JSON 받을 때) |
| `file_put_contents` | `file_put_contents($p, $data)` | 통째로 쓰기 → 바이트 수 |
| `file_put_contents` | `file_put_contents($p, $s, FILE_APPEND)` | 이어쓰기 (로그) → 바이트 수 |
| `filemtime` | `filemtime($p)` | 마지막 수정 시각 → 타임스탬프 |
| `filesize` | `filesize($p)` | 파일 크기 → 바이트 |
| `filter_var` | `filter_var($s, FILTER_VALIDATE_EMAIL)` | 이메일 검증 → 값 또는 `false` |
| `filter_var` | `filter_var($s, FILTER_VALIDATE_INT)` | 정수 검증 → 값 또는 `false` |
| `filter_var` | `filter_var($s, FILTER_VALIDATE_URL)` | URL 검증 → 값 또는 `false` |
| `floatval` | `floatval("3.14abc")` | 실수 변환 → `3.14` |
| `floor` | `floor(4.9)` | 내림 → `4.0` |
| `fmod` | `fmod(10.5, 3)` | 실수 나머지 → `1.5` |
| `fopen` | `fopen($p, "r")` | 파일 열기 (`r w a x`, `+` 붙이면 읽기쓰기) → 핸들 |
| `fputcsv` | `fputcsv($fp, $row)` | 배열을 CSV 한 줄로 → 바이트 수 |
| `fread` | `fread($fp, 1024)` | 바이트 수만큼 읽기 → 문자열 |
| `func_get_args` | `func_get_args()` | 넘어온 인자 전부 → 배열 |
| `function_exists` | `function_exists('str_contains')` | 함수 존재 여부 → bool |
| `fwrite` | `fwrite($fp, $s)` | 쓰기 → 바이트 수 |

## G

| 함수 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `get_class` | `get_class($obj)` | 클래스명 → 문자열 |
| `get_class_methods` | `get_class_methods($obj)` | 메서드 목록 → 배열 |
| `get_object_vars` | `get_object_vars($obj)` | 프로퍼티 → 연관 배열 |
| `getcwd` | `getcwd()` | 현재 작업 디렉토리 → 문자열 |
| `getdate` | `getdate()` | 날짜 정보 → 배열 |
| `getenv` | `getenv('DB_HOST')` | 환경변수 → 문자열 또는 `false` |
| `getimagesize` | `getimagesize($p)` | `[width, height, type,...]` → 배열 또는 `false` |
| `gettype` | `gettype($v)` | 타입명 → `"string"` `"integer"` ... |
| `glob` | `glob("./Upload/*.jpg")` | 패턴으로 파일 목록 → 배열 |
| `glob` | `glob("./*", GLOB_ONLYDIR)` | 디렉토리만 → 배열 |
| `gmdate` | `gmdate("Y-m-d", $ts)` | UTC 기준 포맷 → 문자열 |

## H

| 함수 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `hash` | `hash('sha256', $s)` | 해시 생성 → 문자열 |
| `hash_equals` | `hash_equals($a, $b)` | 타이밍 공격 안전 비교 (CSRF) → bool |
| `hash_hmac` | `hash_hmac('sha256', $s, $key)` | 키 기반 해시 → 문자열 |
| `header` | `header("Location: /login")` | HTTP 헤더 전송 → void (뒤에 `exit` 필수) |
| `headers_sent` | `headers_sent()` | 헤더 이미 나갔는지 → bool |
| `hexdec` | `hexdec("ff")` | 16진 → 10진 → `255` |
| `htmlspecialchars` | `htmlspecialchars($s, ENT_QUOTES, 'UTF-8')` | XSS 이스케이프 → 문자열 |
| `htmlspecialchars_decode` | `htmlspecialchars_decode($s)` | 되돌리기 → 문자열 |
| `html_entity_decode` | `html_entity_decode($s)` | 모든 엔티티 되돌리기 → 문자열 |
| `http_build_query` | `http_build_query(['a'=>1,'b'=>2])` | → `"a=1&b=2"` |
| `http_response_code` | `http_response_code(404)` | 상태코드 설정 → int |

## I

| 함수 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `iconv` | `iconv("EUC-KR", "UTF-8//IGNORE", $s)` | 인코딩 변환 → 문자열 |
| `implode` | `implode(",", $arr)` | 배열 → 문자열 (`join`도 동일) |
| `in_array` | `in_array("값", $a)` | 값 존재 → bool |
| `in_array` | `in_array("값", $a, true)` | 타입까지 엄격 비교 → bool |
| `ini_get` | `ini_get('upload_max_filesize')` | 설정값 읽기 → 문자열 |
| `ini_set` | `ini_set('display_errors', 1)` | 설정값 변경 → 이전 값 |
| `intdiv` | `intdiv(10, 3)` | 정수 나눗셈 → `3` |
| `intval` | `intval("12abc")` | 정수 변환 → `12` |
| `intval` | `intval("ff", 16)` | 진법 지정 변환 → `255` |
| `ip2long` / `long2ip` | `ip2long("127.0.0.1")` | IP ↔ 정수 → int / 문자열 |
| `is_array` | `is_array($v)` | 배열인지 → bool |
| `is_bool` / `is_int` / `is_float` | `is_int($v)` | 타입 검사 → bool |
| `is_callable` | `is_callable($fn)` | 호출 가능한지 → bool |
| `is_dir` | `is_dir($p)` | 디렉토리인지 → bool |
| `is_file` | `is_file($p)` | 파일인지 → bool |
| `is_null` | `is_null($v)` | null인지 → bool |
| `is_numeric` | `is_numeric("12.3")` | 숫자로 볼 수 있는지 → bool |
| `is_object` | `is_object($v)` | 객체인지 → bool |
| `is_readable` / `is_writable` | `is_writable($p)` | 권한 확인 → bool |
| `is_string` | `is_string($v)` | 문자열인지 → bool |
| `isset` | `isset($a['k'])` | 선언 + null 아님 → bool |
| `iterator_to_array` | `iterator_to_array($gen)` | 제너레이터/이터레이터 → 배열 |

## J

| 함수 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `join` | `join(",", $arr)` | `implode`의 별칭 → 문자열 |
| `json_encode` | `json_encode($data)` | 배열/객체 → JSON 문자열 |
| `json_encode` | `json_encode($d, JSON_UNESCAPED_UNICODE)` | 한글 안 깨지게 → 문자열 |
| `json_decode` | `json_decode($json)` | JSON → `stdClass` 객체 |
| `json_decode` | `json_decode($json, true)` | JSON → 연관 배열 |
| `json_last_error` | `json_last_error()` | 마지막 파싱 에러 코드 → int |
| `json_last_error_msg` | `json_last_error_msg()` | 에러 메시지 → 문자열 |

## K

| 함수 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `key` | `key($a)` | 현재 포인터의 키 → 키 |
| `krsort` | `krsort($a)` | 키 내림차순 → bool |
| `ksort` | `ksort($a)` | 키 오름차순 → bool |

## L

| 함수 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `lcfirst` | `lcfirst("Abc")` | 첫 글자 소문자 → `"abc"` |
| `levenshtein` | `levenshtein($a, $b)` | 편집 거리 (오타 교정) → int |
| `log` / `log10` | `log(M_E)` | 로그 → float |
| `ltrim` | `ltrim($s)` | 왼쪽 공백 제거 → 문자열 |
| `ltrim` | `ltrim($s, "0")` | 왼쪽에서 "0" 제거 → 문자열 |

## M

| 함수 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `mail` | `mail($to, $subj, $body)` | 메일 발송 → bool |
| `max` | `max(1, 2, 3)` / `max($arr)` | 최댓값 → 값 |
| `mb_convert_encoding` | `mb_convert_encoding($s, "UTF-8", "EUC-KR")` | 인코딩 변환 → 문자열 |
| `mb_detect_encoding` | `mb_detect_encoding($s)` | 인코딩 추측 → 문자열 |
| `mb_str_split` | `mb_str_split($s)` | 한글 안전 한 글자씩 → 배열 |
| `mb_strimwidth` | `mb_strimwidth($s, 0, 20, "...")` | 길면 잘라서 말줄임 → 문자열 |
| `mb_strlen` | `mb_strlen($s, 'UTF-8')` | 실제 글자 수 → int |
| `mb_strpos` | `mb_strpos($s, "값")` | 글자 단위 위치 → int 또는 `false` |
| `mb_strtolower` / `mb_strtoupper` | `mb_strtolower($s)` | 멀티바이트 대소문자 → 문자열 |
| `mb_substr` | `mb_substr($s, 0, 5, 'UTF-8')` | 한글 안전 자르기 → 문자열 |
| `md5` | `md5($s)` | MD5 해시 (비밀번호용 금지) → 문자열 |
| `memory_get_usage` | `memory_get_usage(true)` | 메모리 사용량 → 바이트 |
| `method_exists` | `method_exists($obj, 'run')` | 메서드 존재 → bool |
| `microtime` | `microtime(true)` | 실수 타임스탬프 (속도 측정) → float |
| `mime_content_type` | `mime_content_type($p)` | 실제 MIME 타입 → 문자열 |
| `min` | `min($arr)` | 최솟값 → 값 |
| `mkdir` | `mkdir($p, 0777, true)` | 폴더 생성 (true=중간경로까지) → bool |
| `move_uploaded_file` | `move_uploaded_file($tmp, $to)` | 업로드 파일 이동 → bool |
| `mt_rand` | `mt_rand(1, 100)` | 난수 → int |

## N

| 함수 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `natsort` | `natsort($a)` | 자연 정렬 (img2 < img10) → bool |
| `next` / `prev` / `reset` | `reset($a)` | 배열 포인터 이동 → 값 |
| `nl2br` | `nl2br($s)` | `\n` → `<br>` → 문자열 |
| `number_format` | `number_format(1234567)` | → `"1,234,567"` |
| `number_format` | `number_format($n, 2)` | 소수 2자리 + 콤마 → 문자열 |

## O

| 함수 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `ob_start` | `ob_start()` | 출력 버퍼링 시작 → bool |
| `ob_get_clean` | `$html = ob_get_clean()` | 버퍼 내용 가져오고 비움 → 문자열 |
| `ob_get_contents` | `ob_get_contents()` | 버퍼 내용만 → 문자열 |
| `ob_end_clean` | `ob_end_clean()` | 버퍼 버리고 종료 → bool |
| `ob_end_flush` | `ob_end_flush()` | 버퍼 출력하고 종료 → bool |
| `octdec` | `octdec("10")` | 8진 → 10진 → `8` |
| `ord` | `ord("A")` | 문자 → 아스키 코드 `65` |

## P

| 함수 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `parse_str` | `parse_str("a=1&b=2", $out)` | 쿼리스트링 → 배열 `$out` |
| `parse_url` | `parse_url($url)` | scheme/host/path/query 분해 → 배열 |
| `parse_url` | `parse_url($url, PHP_URL_PATH)` | 경로만 → 문자열 |
| `password_hash` | `password_hash($pw, PASSWORD_DEFAULT)` | 비밀번호 해시 → 문자열(60자+) |
| `password_verify` | `password_verify($입력, $해시)` | 비밀번호 대조 → bool |
| `password_needs_rehash` | `password_needs_rehash($h, PASSWORD_DEFAULT)` | 재해시 필요 여부 → bool |
| `pathinfo` | `pathinfo($f, PATHINFO_EXTENSION)` | 확장자만 → 문자열 |
| `pathinfo` | `pathinfo($f)` | dirname/basename/extension/filename → 배열 |
| `php_sapi_name` | `php_sapi_name()` | 실행 환경 → `"cli"` `"apache2handler"` |
| `phpinfo` | `phpinfo()` | 환경 정보 출력 → bool |
| `pow` | `pow(2, 10)` (= `2 ** 10`) | 거듭제곱 → `1024` |
| `preg_grep` | `preg_grep('/^a/', $arr)` | 패턴 맞는 요소만 → 배열 |
| `preg_last_error_msg` | `preg_last_error_msg()` | 정규식 에러 메시지 → 문자열 |
| `preg_match` | `preg_match($패턴, $검사할값, $m)` | 첫 매칭 → `1` / `0` / `false`, `$m`에 결과 |
| `preg_match_all` | `preg_match_all($패턴, $값, $m)` | 전부 매칭 → 매칭 개수 |
| `preg_quote` | `preg_quote($입력, "#")` | 특수문자 이스케이프 → 문자열 |
| `preg_replace` | `preg_replace($패턴, '$1-$2', $값)` | 정규식 치환 → 문자열 |
| `preg_replace_callback` | `preg_replace_callback($패턴, fn($m) => ..., $값)` | 콜백 치환 → 문자열 |
| `preg_split` | `preg_split('/\s+/', $s)` | 패턴으로 쪼개기 → 배열 |
| `print_r` | `print_r($v)` | 사람이 읽기 쉽게 출력 → bool |
| `print_r` | `print_r($v, true)` | 출력 대신 문자열로 → 문자열 |
| `printf` | `printf("%s는 %d살", $n, $a)` | 포맷 출력 → 길이 |
| `property_exists` | `property_exists($obj, 'id')` | 프로퍼티 존재 → bool |

## R

| 함수 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `rand` | `rand(1, 100)` | 난수 → int |
| `random_bytes` | `random_bytes(16)` | 안전한 랜덤 바이트 → 문자열 |
| `random_int` | `random_int(1, 100)` | 암호학적 안전 난수 → int |
| `range` | `range(1, 10)` | `[1..10]` → 배열 |
| `range` | `range('a', 'e')` | `['a','b','c','d','e']` → 배열 |
| `range` | `range(0, 100, 10)` | 10씩 증가 → 배열 |
| `rawurlencode` | `rawurlencode($s)` | 공백 → `%20` (경로용) → 문자열 |
| `readfile` | `readfile($p)` | 파일 즉시 출력 (다운로드) → 바이트 수 |
| `realpath` | `realpath($p)` | 절대경로 → 문자열 또는 `false` |
| `register_shutdown_function` | `register_shutdown_function($fn)` | 스크립트 종료 시 실행 → void |
| `rename` | `rename($old, $new)` | 이동/개명 → bool |
| `rmdir` | `rmdir($p)` | 빈 디렉토리 삭제 → bool |
| `round` | `round(4.567, 2)` | 반올림 → `4.57` |
| `rsort` | `rsort($a)` | 값 내림차순 (키 재배열) → bool |
| `rtrim` | `rtrim($s, "/")` | 오른쪽에서 "/" 제거 → 문자열 |

## S

| 함수 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `scandir` | `scandir($p)` | 디렉토리 목록 (`.` `..` 포함) → 배열 |
| `serialize` / `unserialize` | `serialize($v)` | PHP 직렬화 (외부 입력 금지) → 문자열 |
| `session_start` | `session_start()` | 세션 시작 (출력보다 먼저!) → bool |
| `session_destroy` | `session_destroy()` | 세션 파기 → bool |
| `session_id` | `session_id()` | 세션 ID → 문자열 |
| `session_regenerate_id` | `session_regenerate_id(true)` | ID 재발급 (로그인 직후 필수) → bool |
| `session_status` | `session_status()` | `PHP_SESSION_NONE` / `ACTIVE` → int |
| `session_unset` | `session_unset()` | 세션 값 전부 비우기 → bool |
| `set_error_handler` | `set_error_handler($fn)` | 에러 핸들러 등록 → 이전 핸들러 |
| `set_exception_handler` | `set_exception_handler($fn)` | 미처리 예외 핸들러 → 이전 핸들러 |
| `set_time_limit` | `set_time_limit(30)` | 최대 실행 시간 → bool |
| `setcookie` | `setcookie("k", "v", time()+86400, "/")` | 쿠키 설정 → bool |
| `settype` | `settype($v, "integer")` | 변수 타입 변경 → bool |
| `sha1` | `sha1($s)` | SHA-1 해시 → 문자열 |
| `shuffle` | `shuffle($a)` | 무작위 섞기 → bool (원본 수정) |
| `similar_text` | `similar_text($a, $b)` | 유사 글자 수 → int |
| `sleep` / `usleep` | `sleep(1)` / `usleep(500000)` | 초 / 마이크로초 대기 → int |
| `sort` | `sort($a)` | 값 오름차순 (키 재배열) → bool |
| `sprintf` | `sprintf("%05.2f", 3.1)` | 포맷 문자열 → `"03.10"` |
| `sqrt` | `sqrt(16)` | 제곱근 → `4.0` |
| `str_contains` | `str_contains($s, "값")` | 포함 여부 (8.0+) → bool |
| `str_ends_with` | `str_ends_with($s, ".jpg")` | 끝나는지 (8.0+) → bool |
| `str_starts_with` | `str_starts_with($s, "http")` | 시작하는지 (8.0+) → bool |
| `str_ireplace` | `str_ireplace("a", "b", $s)` | 대소문자 무시 치환 → 문자열 |
| `str_pad` | `str_pad($s, 5, "0", STR_PAD_LEFT)` | 자리 채우기 → `"00abc"` |
| `str_repeat` | `str_repeat("=", 30)` | 반복 → 문자열 |
| `str_replace` | `str_replace("찾을값", "바꿀값", $s)` | 전부 치환 → 문자열 |
| `str_replace` | `str_replace(["a","b"], ["1","2"], $s)` | 여러 개 동시 치환 → 문자열 |
| `str_shuffle` | `str_shuffle($s)` | 문자 섞기 → 문자열 |
| `str_split` | `str_split($s, 2)` | 2글자씩 쪼갬 → 배열 |
| `str_word_count` | `str_word_count($s)` | 영단어 수 → int |
| `strcasecmp` | `strcasecmp($a, $b)` | 대소문자 무시 비교 → 같으면 `0` |
| `strcmp` | `strcmp($a, $b)` | 문자열 비교 → 같으면 `0` |
| `stream_context_create` | `stream_context_create([...])` | 요청 옵션 컨텍스트 → resource |
| `strip_tags` | `strip_tags($s)` | HTML 태그 제거 → 문자열 |
| `strip_tags` | `strip_tags($s, "<b><a>")` | 특정 태그만 허용 → 문자열 |
| `stripos` | `stripos($s, "값")` | 대소문자 무시 위치 → int 또는 `false` |
| `stripslashes` | `stripslashes($s)` | 역슬래시 제거 → 문자열 |
| `strlen` | `strlen($s)` | **바이트** 길이 (한글 1자=3) → int |
| `strncmp` | `strncmp($a, $b, 3)` | 앞 3글자만 비교 → `0`이면 같음 |
| `strpos` | `strpos($s, "찾을값")` | 첫 위치 → int 또는 `false` (`!== false`로 비교) |
| `strrev` | `strrev($s)` | 뒤집기 → 문자열 |
| `strrpos` | `strrpos($s, "값")` | 마지막 위치 → int 또는 `false` |
| `strstr` | `strstr($s, "@")` | `@` 이후 전체 → 문자열 |
| `strstr` | `strstr($s, "@", true)` | `@` 이전 전체 → 문자열 |
| `strtok` | `strtok($uri, '?')` | 구분자 앞까지 (쿼리스트링 제거) → 문자열 |
| `strtolower` / `strtoupper` | `strtolower($s)` | 소문자 / 대문자 → 문자열 |
| `strtotime` | `strtotime("2026-09-23")` | 문자열 → 타임스탬프 |
| `strtotime` | `strtotime("+1 day")` | 상대 시각 → 타임스탬프 |
| `strtr` | `strtr($s, ['a' => '1'])` | 매핑 배열로 일괄 치환 → 문자열 |
| `strval` | `strval($v)` | 문자열 변환 → 문자열 |
| `substr` | `substr($s, 0, 5)` | 바이트 기준 자르기 → 문자열 |
| `substr` | `substr($s, -3)` | 뒤에서 3글자 → 문자열 |
| `substr_count` | `substr_count($s, "a")` | 등장 횟수 → int |
| `substr_replace` | `substr_replace($s, "값", 0, 3)` | 위치 지정 치환 → 문자열 |

## T

| 함수 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `tempnam` | `tempnam(sys_get_temp_dir(), "up")` | 임시 파일 생성 → 경로 |
| `time` | `time()` | 현재 타임스탬프 → int |
| `touch` | `touch($p)` | 빈 파일 생성 / 시각 갱신 → bool |
| `trigger_error` | `trigger_error("경고", E_USER_WARNING)` | 사용자 에러 발생 → bool |
| `trim` | `trim($s)` | 양쪽 공백 제거 → 문자열 |
| `trim` | `trim($s, "/")` | 양쪽에서 "/" 제거 → 문자열 |

## U

| 함수 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `uasort` | `uasort($a, $fn)` | 키 유지 사용자 정렬 → bool |
| `ucfirst` | `ucfirst("abc")` | 첫 글자 대문자 → `"Abc"` |
| `ucwords` | `ucwords("hello world")` | 단어마다 첫 글자 대문자 → `"Hello World"` |
| `uksort` | `uksort($a, $fn)` | 키 기준 사용자 정렬 → bool |
| `uniqid` | `uniqid("", true)` | 고유 ID (파일명 생성) → 문자열 |
| `unlink` | `unlink($p)` | 파일 삭제 → bool |
| `unset` | `unset($a['k'])` | 변수/키 제거 → void |
| `urlencode` / `urldecode` | `urlencode($s)` | 공백 → `+` → 문자열 |
| `usort` | `usort($a, fn($x,$y) => $x['age'] <=> $y['age'])` | 사용자 정의 정렬 → bool |

## V

| 함수 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `var_dump` | `var_dump($v)` | 타입+값 상세 출력 → void |
| `var_export` | `var_export($v, true)` | PHP 코드 형태로 → 문자열 |
| `version_compare` | `version_compare(PHP_VERSION, '8.0', '>=')` | 버전 비교 → bool |
| `vsprintf` | `vsprintf("%s-%s", ['a','b'])` | 배열로 포맷 → 문자열 |

## W

| 함수 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `wordwrap` | `wordwrap($s, 20, "\n", true)` | 줄바꿈 삽입 → 문자열 |

---

## 언어 구성요소 (함수처럼 쓰지만 함수 아님)

| 키워드 | 쓰는 법 | 설명 |
|---|---|---|
| `echo` | `echo $a, $b;` | 출력 (여러 개 가능, 리턴 없음, 제일 빠름) |
| `print` | `print $a;` | 출력하고 `1` 리턴 (표현식 안에서 사용 가능) |
| `isset` | `isset($v)` | 선언됨 + null 아님 → bool |
| `empty` | `empty($v)` | falsy면 true (미선언도 경고 없음) |
| `unset` | `unset($v)` | 변수/배열키 제거 |
| `list` | `list($a, $b) = [1, 2]` | 구조 분해 (`[$a, $b] = ...`와 동일) |
| `include` | `include "a.php"` | 없으면 경고 후 계속 |
| `include_once` | `include_once "a.php"` | 이미 포함했으면 건너뜀 |
| `require` | `require "a.php"` | 없으면 치명적 에러로 중단 |
| `require_once` | `require_once __DIR__."/db.php"` | 클래스/함수 정의 파일은 무조건 이걸로 |
| `exit` / `die` | `exit;` / `die("메시지")` | 즉시 종료 (완전히 같은 것) |
| `clone` | `$b = clone $a` | 객체 얕은 복사 |
| `instanceof` | `$obj instanceof PDO` | 타입 확인 → bool |
| `match` | `match($x) { 1 => "a", default => "b" }` | 엄격 비교 + 값 리턴 (8.0+) |
| `fn` | `fn($x) => $x * 2` | 화살표 함수 (외부 변수 자동 캡처) |
| `function() use()` | `function($x) use ($y) {}` | 클로저 (use로 캡처, `&$y`면 참조) |
| `yield` | `yield $v;` | 제너레이터 (메모리 절약 반복) |
| `...` | `f(...$args)` / `function f(...$a)` | 스프레드 / 가변 인자 |
| `??` | `$a ?? "기본"` | null 병합 |
| `??=` | `$a ??= 5` | null일 때만 대입 |
| `?:` | `$a ?: "기본"` | 엘비스 (falsy면 오른쪽) |
| `?->` | `$obj?->run()` | nullsafe 호출 (8.0+) |
| `<=>` | `$a <=> $b` | 우주선 (작으면 -1, 같으면 0, 크면 1) |
| `@` | `@file_get_contents($u)` | 에러 억제 (되도록 쓰지 말 것) |

---

## 클래스 메서드

### PDO

| 메서드 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `prepare` | `$pdo->prepare($sql)` | 프리페어드 스테이트먼트 → PDOStatement |
| `query` | `$pdo->query($sql)` | 바인딩 없는 즉시 실행 → PDOStatement |
| `exec` | `$pdo->exec($sql)` | INSERT/UPDATE/DELETE 즉시 실행 → 영향 행 수 |
| `lastInsertId` | `$pdo->lastInsertId()` | 방금 INSERT된 AUTO_INCREMENT → 문자열 |
| `beginTransaction` | `$pdo->beginTransaction()` | 트랜잭션 시작 → bool |
| `commit` / `rollBack` | `$pdo->commit()` | 확정 / 되돌리기 → bool |
| `inTransaction` | `$pdo->inTransaction()` | 트랜잭션 중인지 → bool |
| `setAttribute` | `$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)` | 속성 설정 → bool |
| `quote` | `$pdo->quote($s)` | 이스케이프 (바인딩이 우선) → 문자열 |

### PDOStatement

| 메서드 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `execute` | `$st->execute([$id])` | 실행 (바인딩 배열 전달) → bool |
| `fetch` | `$st->fetch()` | 한 행 → 배열 또는 `false` |
| `fetchAll` | `$st->fetchAll()` | 전체 행 → 배열 (없으면 `[]`) |
| `fetchColumn` | `$st->fetchColumn()` | 첫 컬럼 값 하나 (COUNT용) → 값 |
| `fetchObject` | `$st->fetchObject()` | 한 행을 객체로 → object |
| `rowCount` | `$st->rowCount()` | 영향받은 행 수 → int |
| `bindValue` | `$st->bindValue(':n', $n, PDO::PARAM_INT)` | 값 바인딩 (LIMIT에 필요) → bool |
| `bindParam` | `$st->bindParam(':n', $n)` | 변수 참조 바인딩 → bool |
| `columnCount` | `$st->columnCount()` | 컬럼 수 → int |

**PDO 상수**: `ATTR_ERRMODE`(3) · `ERRMODE_EXCEPTION`(2) · `ATTR_DEFAULT_FETCH_MODE`(19) · `FETCH_ASSOC`(2) · `FETCH_OBJ`(5) · `FETCH_NUM`(3) · `FETCH_COLUMN`(7) · `FETCH_KEY_PAIR`(12) · `ATTR_EMULATE_PREPARES`(20) · `PARAM_INT`(1) · `PARAM_STR`(2)

### DateTime / DateTimeImmutable

| 메서드 | 쓰는 법 | 설명 → 리턴 |
|---|---|---|
| `__construct` | `new DateTime("2026-09-23")` | 생성 (인자 없으면 현재) |
| `format` | `$d->format("Y-m-d H:i")` | 포맷 출력 → 문자열 |
| `modify` | `$d->modify("+1 day")` | 시각 변경 → DateTime |
| `add` / `sub` | `$d->add(new DateInterval("P1D"))` | 더하기 / 빼기 → DateTime |
| `diff` | `$d1->diff($d2)` | 차이 → DateInterval (`->days ->y ->m ->d ->invert`) |
| `getTimestamp` | `$d->getTimestamp()` | 타임스탬프 → int |
| `setDate` / `setTime` | `$d->setTime(0, 0)` | 날짜 / 시각 지정 → DateTime |
| `createFromFormat` | `DateTime::createFromFormat("d/m/Y", $s)` | 커스텀 포맷 파싱 → DateTime |

`DateInterval` 기간 표기: `P1D`(1일) `P1M`(1개월) `P1Y`(1년) `PT1H`(1시간) `PT30M`(30분)

### Exception

| 메서드 | 설명 |
|---|---|
| `getMessage()` | 메시지 |
| `getCode()` | 코드 |
| `getFile()` / `getLine()` | 발생 파일 / 줄 |
| `getTraceAsString()` | 스택 트레이스 문자열 |
| `getPrevious()` | 이전 예외 |

**예외 종류**: `Exception` · `RuntimeException` · `LogicException` · `InvalidArgumentException` · `TypeError` · `ValueError` · `ArgumentCountError` · `DivisionByZeroError` · `UnhandledMatchError` · `PDOException` · `JsonException` · `ErrorException`

---

## 자주 쓰는 상수

| 상수 | 값 / 의미 |
|---|---|
| `PHP_EOL` | OS별 개행 문자 |
| `PHP_INT_MAX` / `PHP_INT_MIN` | 정수 최대 / 최소 |
| `PHP_FLOAT_EPSILON` | 실수 비교 오차 기준 |
| `PHP_VERSION` / `PHP_OS_FAMILY` | 버전 / OS |
| `DIRECTORY_SEPARATOR` | `\` 또는 `/` |
| `__DIR__` / `__FILE__` | 현재 폴더 / 파일 절대경로 |
| `__LINE__` / `__FUNCTION__` / `__CLASS__` / `__METHOD__` | 줄 번호 / 함수명 / 클래스명 / 메서드명 |
| `ENT_QUOTES` | `htmlspecialchars`에서 `'` `"` 모두 변환 |
| `JSON_UNESCAPED_UNICODE` | 한글 그대로 출력 |
| `JSON_UNESCAPED_SLASHES` | `/`를 `\/`로 안 바꿈 |
| `JSON_PRETTY_PRINT` | 들여쓰기 출력 |
| `JSON_THROW_ON_ERROR` | 실패 시 예외 |
| `SORT_ASC` / `SORT_DESC` | 정렬 방향 |
| `STR_PAD_LEFT` / `STR_PAD_RIGHT` / `STR_PAD_BOTH` | `str_pad` 방향 |
| `UPLOAD_ERR_OK` | 업로드 성공 (`0`) |
| `E_ALL` / `E_USER_WARNING` | 에러 레벨 |
| `COUNT_RECURSIVE` | `count` 다차원 |
| `ARRAY_FILTER_USE_KEY` / `ARRAY_FILTER_USE_BOTH` | `array_filter` 콜백 인자 모드 |
| `FILE_APPEND` / `FILE_IGNORE_NEW_LINES` / `FILE_SKIP_EMPTY_LINES` | 파일 플래그 |
| `PASSWORD_DEFAULT` / `PASSWORD_BCRYPT` / `PASSWORD_ARGON2ID` | 해시 알고리즘 |
| `M_PI` / `M_E` | 원주율 / 자연상수 |
| `PHP_URL_PATH` / `PHP_URL_QUERY` / `PHP_URL_HOST` | `parse_url` 지정 |
| `PATHINFO_EXTENSION` / `PATHINFO_FILENAME` / `PATHINFO_BASENAME` | `pathinfo` 지정 |

---

## 용도별 빠른 색인

**문자열 길이/자르기** `strlen` `mb_strlen` `substr` `mb_substr` `str_split` `mb_str_split` `mb_strimwidth`
**문자열 검색** `strpos` `stripos` `strrpos` `mb_strpos` `str_contains` `str_starts_with` `str_ends_with` `substr_count` `strstr` `strtok`
**문자열 치환/변형** `str_replace` `str_ireplace` `substr_replace` `strtr` `trim` `ltrim` `rtrim` `strtolower` `strtoupper` `ucfirst` `ucwords` `lcfirst` `str_pad` `str_repeat` `strrev` `nl2br` `wordwrap` `str_shuffle`
**문자열 분해/결합** `explode` `implode` `join` `preg_split` `str_split`
**문자열 비교** `strcmp` `strcasecmp` `strncmp` `hash_equals` `similar_text` `levenshtein`
**포맷** `sprintf` `printf` `vsprintf` `number_format` `str_pad`

**배열 생성** `range` `array_fill` `array_fill_keys` `array_combine` `compact` `explode`
**배열 추가/삭제** `array_push` `array_pop` `array_shift` `array_unshift` `array_splice` `unset`
**배열 검색** `in_array` `array_search` `array_key_exists` `isset` `array_keys` `array_column` `array_key_first` `array_key_last`
**배열 가공** `array_map` `array_filter` `array_reduce` `array_walk` `array_slice` `array_chunk` `array_unique` `array_values` `array_flip` `array_reverse` `array_pad`
**배열 합치기** `array_merge` `array_replace` `array_merge_recursive` `array_diff` `array_intersect` `array_diff_key` `array_intersect_key`
**배열 정렬** `sort` `rsort` `asort` `arsort` `ksort` `krsort` `usort` `uasort` `uksort` `natsort` `shuffle` `array_multisort`
**배열 계산** `count` `array_sum` `array_product` `max` `min` `array_count_values`

**정규식** `preg_match` `preg_match_all` `preg_replace` `preg_replace_callback` `preg_split` `preg_grep` `preg_quote`
**콜백/동적 호출** `call_user_func` `call_user_func_array` `is_callable` `function_exists` `func_get_args` `array_map` `usort`

**숫자** `abs` `ceil` `floor` `round` `intdiv` `fmod` `fdiv` `pow` `sqrt` `max` `min` `number_format` `is_numeric` `intval` `floatval`
**난수** `rand` `mt_rand` `random_int` `random_bytes` `bin2hex` `uniqid` `shuffle` `array_rand` `str_shuffle`
**진법** `dechex` `hexdec` `decbin` `bindec` `decoct` `octdec` `base_convert`

**날짜** `date` `time` `mktime` `strtotime` `checkdate` `microtime` `date_default_timezone_set` `DateTime` `DateInterval`

**파일** `file_get_contents` `file_put_contents` `file` `fopen` `fgets` `fwrite` `fclose` `feof` `readfile` `copy` `rename` `unlink` `filesize` `filemtime` `file_exists` `is_file` `is_dir` `mkdir` `rmdir` `scandir` `glob` `realpath` `pathinfo` `basename` `dirname` `mime_content_type`
**업로드** `$_FILES` `move_uploaded_file` `getimagesize` `pathinfo` `mkdir` `uniqid`

**요청/응답** `header` `http_response_code` `headers_sent` `setcookie` `readfile` `exit` `ob_start` `ob_get_clean`
**URL** `parse_url` `parse_str` `http_build_query` `urlencode` `rawurlencode` `basename` `strtok`
**세션** `session_start` `session_regenerate_id` `session_destroy` `session_unset` `session_id` `session_status`

**보안** `htmlspecialchars` `strip_tags` `password_hash` `password_verify` `hash_equals` `random_bytes` `filter_var` `basename` `realpath`
**JSON/인코딩** `json_encode` `json_decode` `json_last_error_msg` `serialize` `unserialize` `base64_encode` `mb_convert_encoding` `iconv` `mb_detect_encoding`

**타입 검사** `gettype` `is_array` `is_string` `is_int` `is_numeric` `is_null` `is_bool` `is_object` `is_callable` `isset` `empty`
**타입 변환** `intval` `floatval` `strval` `boolval` `settype` `(int)` `(array)` `(object)`
**객체/클래스** `get_class` `get_object_vars` `get_class_methods` `method_exists` `property_exists` `class_exists` `instanceof`

**디버깅** `var_dump` `print_r` `var_export` `error_log` `debug_backtrace` `memory_get_usage` `microtime` `phpinfo`
**에러** `try/catch/finally` `throw` `error_reporting` `ini_set` `set_error_handler` `set_exception_handler` `trigger_error` `register_shutdown_function`

**네트워크** `file_get_contents` `stream_context_create` `curl_init` `curl_setopt_array` `curl_exec` `curl_getinfo` `curl_close` `mail`
**환경** `getenv` `ini_get` `ini_set` `php_sapi_name` `extension_loaded` `function_exists` `set_time_limit` `sleep` `usleep`
