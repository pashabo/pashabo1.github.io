<?php
//забираем данные формы
$floors = $_POST['floors'];
$area = $_POST['area'];
$material = $_POST['material'];
$composition = $_POST['composition'];

switch ($material) {
case 'Кирпичный дом':
switch ($area) {
case '100':
switch ($floors) {
case '1':
$fImage = 'kir-1-100.jpg';
break;
case '2':
$fImage = 'kir-2-100.jpg';
break;
}
switch ($composition) {
case 'Эскиз':
$fCost = '35000';
break;
case 'АР+КР':
$fCost = '100000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '150000';
break;
case 'Под ключ':
$fCost = '200000';
break;
}
break;
case '150':
switch ($floors) {
case '1':
$fImage = 'kir-1-150.jpg';
break;
case '2':
$fImage = 'kir-2-150.jpg';
break;
}
switch ($composition) {
case 'Эскиз':
$fCost = '52500';
break;
case 'АР+КР':
$fCost = '150000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '225000';
break;
case 'Под ключ':
$fCost = '300000';
break;
}
break;
case '200':
switch ($floors) {
case '1':
$fImage = 'kir-1-200.jpg';
break;
case '2':
$fImage = 'kir-2-200.jpg';
break;
}
switch ($composition) {
case 'Эскиз':
$fCost = '70000';
break;
case 'АР+КР':
$fCost = '200000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '300000';
break;
case 'Под ключ':
$fCost = '400000';
break;
}
break;
case '250':
$fImage = 'kir-250.jpg';
switch ($composition) {
case 'Эскиз':
$fCost = '87500';
break;
case 'АР+КР':
$fCost = '250000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '375000';
break;
case 'Под ключ':
$fCost = '500000';
break;
}
break;
case '300':
$fImage = 'kir-250.jpg';
switch ($composition) {
case 'Эскиз':
$fCost = '105000';
break;
case 'АР+КР':
$fCost = '300000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '450000';
break;
case 'Под ключ':
$fCost = '600000';
break;
}
break;
case '400':
$fImage = 'kir-250.jpg';
switch ($composition) {
case 'Эскиз':
$fCost = '140000';
break;
case 'АР+КР':
$fCost = '400000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '600000';
break;
case 'Под ключ':
$fCost = '800000';
break;
}
break;
case '500':
$fImage = 'kir-250.jpg';
switch ($composition) {
case 'Эскиз':
$fCost = '175000';
break;
case 'АР+КР':
$fCost = '500000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '750000';
break;
case 'Под ключ':
$fCost = '1000000';
break;
}
break;
}
break;
case 'Газобетон':
switch ($area) {
case '100':
switch ($floors) {
case '1':
$fImage = 'gaz-1-100.jpg';
break;
case '2':
$fImage = 'gaz-2-100.jpg';
break;
}
switch ($composition) {
case 'Эскиз':
$fCost = '35000';
break;
case 'АР+КР':
$fCost = '100000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '150000';
break;
case 'Под ключ':
$fCost = '200000';
break;
}
break;
case '150':
switch ($floors) {
case '1':
$fImage = 'gaz-1-150.jpg';
break;
case '2':
$fImage = 'gaz-2-150.jpg';
break;
}
switch ($composition) {
case 'Эскиз':
$fCost = '52500';
break;
case 'АР+КР':
$fCost = '150000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '225000';
break;
case 'Под ключ':
$fCost = '300000';
break;
}
break;
case '200':
switch ($floors) {
case '1':
$fImage = 'gaz-1-200.jpg';
break;
case '2':
$fImage = 'gaz-2-200.jpg';
break;
}
switch ($composition) {
case 'Эскиз':
$fCost = '70000';
break;
case 'АР+КР':
$fCost = '200000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '300000';
break;
case 'Под ключ':
$fCost = '400000';
break;
}
break;
case '250':
$fImage = 'gaz-500.jpg';
switch ($composition) {
case 'Эскиз':
$fCost = '87500';
break;
case 'АР+КР':
$fCost =
'250000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '375000';
break;
case 'Под ключ':
$fCost = '500000';
break;
}
break;
case '300':
$fImage = 'gaz-500.jpg';
switch ($composition) {
case 'Эскиз':
$fCost = '105000';
break;
case 'АР+КР':
$fCost = '300000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '450000';
break;
case 'Под ключ':
$fCost = '600000';
break;
}
break;
case '400':
$fImage = 'gaz-500.jpg';
switch ($composition)
{
case 'Эскиз':
$fCost = '140000';
break;
case 'АР+КР':
$fCost = '400000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '600000';
break;
case 'Под ключ':
$fCost = '800000';
break;
}
break;
case '500':
$fImage = 'gaz-500.jpg';
switch ($composition) {
case 'Эскиз':
$fCost = '175000';
break;
case 'АР+КР':
$fCost = '500000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '750000';
break;
case 'Под ключ':
$fCost = '1000000';
break;
}
break;
}
break;
case 'Деревянный дом':
switch ($area) {
case '100':
switch ($floors) {
case '1':
$fImage = 'der-1.jpg';
break;
case '2':
$fImage = 'der-2-200.jpg';
break;
}
switch ($composition) {
case 'Эскиз':
$fCost = '30000';
break;
case 'АР+КР':
$fCost = '80000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '130000';
break;
case 'Под ключ':
$fCost = '175000';
break;
}
break;
case '150':
switch ($floors) {
case '1':
$fImage = 'der-1.jpg';
break;
case '2':
$fImage = 'der-2-200.jpg';
break;
}
switch ($composition) {
case 'Эскиз':
$fCost = '45000';
break;
case 'АР+КР':
$fCost = '120000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '195000';
break;
case 'Под ключ':
$fCost = '262500';
break;
}
break;
case '200':
switch ($floors) {
case '1':
$fImage = 'der-1.jpg';
break;
case '2':
$fImage = 'der-2-200.jpg';
break;
}
switch ($composition) {
case 'Эскиз':
$fCost = '60000';
break;
case 'АР+КР':
$fCost = '160000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '260000';
break;
case 'Под ключ':
$fCost = '350000';
break;
}
break;
case '250':
switch ($floors) {
case '1':
$fImage = 'der-1.jpg';
break;
case '2':
$fImage = 'der-2-250.jpg';
break;
}
switch ($composition) {
case 'Эскиз':
$fCost = '75000';
break;
case 'АР+КР':
$fCost = '200000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '325000';
break;
case 'Под ключ':
$fCost = '437500';
break;
}
break;
case '300':
switch ($floors) {
case '1':
$fImage = 'der-1.jpg';
break;
case '2':
$fImage = 'der-2-300.jpg';
break;
}
switch ($composition) {
case 'Эскиз':
$fCost = '90000';
break;
case 'АР+КР':
$fCost = '240000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '390000';
break;
case 'Под ключ':
$fCost = '525000';
break;
}
break;
case '400':
switch ($floors) {
case '1':
$fImage = 'der-1.jpg';
break;
case '2':
$fImage = 'der-2-500.jpg';
break;
}
switch ($composition) {
case 'Эскиз':
$fCost = '120000';
break;
case 'АР+КР':
$fCost = '320000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '520000';
break;
case 'Под ключ':
$fCost = '700000';
break;
}
break;
case '500':
switch ($floors) {
case '1':
$fImage = 'der-1.jpg';
break;
case '2':
$fImage = 'der-2-500.jpg';
break;
}
switch ($composition) {
case 'Эскиз':
$fCost = '150000';
break;
case 'АР+КР':
$fCost = '400000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '650000';
break;
case 'Под ключ':
$fCost = '875000';
break;
}
break;
}
break;
case 'Каркасный дом':
switch ($area) {
case '100':
switch ($floors) {
case '1':
$fImage = 'kar-1-100.jpg';
break;
case '2':
$fImage = 'kar-2-150.jpg';
break;
}
switch ($composition) {
case 'Эскиз':
$fCost = '30000';
break;
case 'АР+КР':
$fCost = '80000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '130000';
break;
case
'Под ключ':
$fCost = '175000';
break;
}
break;
case '150':
switch ($floors) {
case '1':
$fImage = 'kar-1-150.jpg';
break;
case '2':
$fImage = 'kar-2-150.jpg';
break;
}
switch ($composition) {
case 'Эскиз':
$fCost = '45000';
break;
case 'АР+КР':
$fCost = '120000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '195000';
break;
case 'Под ключ':
$fCost = '262500';
break;
}
break;
case '200':
switch ($floors) {
case '1':
$fImage = 'kar-1-150.jpg';
break;
case '2':
$fImage = 'kar-2-200.jpg';
break;
}
switch ($composition) {
case 'Эскиз':
$fCost = '60000';
break;
case 'АР+КР':
$fCost = '160000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '260000';
break;
case 'Под
ключ':
$fCost = '350000';
break;
}
break;
case '250':
switch ($floors) {
case '1':
$fImage = 'kar-1-150.jpg';
break;
case '2':
$fImage = 'kar-2-200.jpg';
break;
}
switch ($composition) {
case 'Эскиз':
$fCost = '75000';
break;
case 'АР+КР':
$fCost = '200000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '325000';
break;
case 'Под ключ':
$fCost = '437500';
break;
}
break;
case '300':
switch ($floors) {
case '1':
$fImage = 'kar-1-150.jpg';
break;
case '2':
$fImage = 'kar-2-200.jpg';
break;
}
switch ($composition) {
case 'Эскиз':
$fCost = '90000';
break;
case 'АР+КР':
$fCost = '240000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '390000';
break;
case 'Под ключ':
$fCost = '525000';
break;
}
break;
case '400':
switch ($floors) {
case '1':
$fImage = 'kar-1-150.jpg';
break;
case '2':
$fImage = 'kar-2-200.jpg';
break;
}
switch ($composition) {
case 'Эскиз':
$fCost = '120000';
break;
case 'АР+КР':
$fCost = '320000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '520000';
break;
case 'Под ключ':
$fCost = '700000';
break;
}
break;
case '500':
switch ($floors) {
case '1':
$fImage = 'kar-1-150.jpg';
break;
case '2':
$fImage = 'kar-2-200.jpg';
break;
}
switch ($composition) {
case 'Эскиз':
$fCost = '150000';
break;
case 'АР+КР':
$fCost = '400000';
break;
case 'АР+КР+ВК+ОВ+ЭС':
$fCost = '650000';
break;
case 'Под ключ':
$fCost = '875000';
break;
}
break;
}
break;
}

echo json_encode([
'floor' => $floors,
'area' => $area,
'material' => $material,
'composition' => $composition,
'cost' => $fCost,
'img' => $fImage
]);
