<?
header('Content-Type: application/json');

$data = $_POST;
if(empty($data)) {
    echo json_encode(["result" => '', "success" => false, "error" => 'Отсутствуют данные']);
    exit;
} else {
    $errorFields = [];
    foreach($data as $code => $field) {
        $fieldJson = json_decode($field, true);
        if(empty($fieldJson['value'])) {
            $errorFields[] = $fieldJson['name'];
        }
    }
    if(!empty($errorFields)) {
        echo json_encode([
            "result" => '',
            "success" => false,
            "error" => 'Заполните поля ' . implode('; ', $errorFields)
        ]);
        exit;
    }
}
sleep(1); // имитация логики
echo json_encode(["result" => 1500, "success" => true, "error" => '']);
?>