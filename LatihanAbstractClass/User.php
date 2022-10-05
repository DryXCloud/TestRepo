<!-- <?php
class User {
    //1. array biasa
    $numbers = [
        1, 2, 3, 4, 5
    ];
    
}


//2. array assosiasi
$user = [
    'nama' => 'Arief' ,
    'age' => 10 ,
    'major' => 'RPL'
];

//3. array multi dimensi
$student = [
    'satu' =>
    [
        'Name :' => 'Arief',
        'Age :' => 10,
        'Major :' => 'RPL'
    ],
    'dua' =>
    [
        'Name :' => 'Dedisun',
        'Age :' => 18,
        'Major :' => 'RPL'
    ],
    'tiga' =>
    [
        'Name :' => 'Johanlu',
        'Age :' => 17,
        'Major :' => 'RPL'
    ],

];

//menampilkan / mengeluarkan nilai array biasa
echo 'nilai array biasa' . '<br>';
foreach ($numbers as $key => $value) {
    echo $key . '. ' . $value . '<br>';
}

//menampilkan / mengeluarkan nilai array assosiasi
echo 'nilai array assosiasi' . '<br>';
foreach ($user as $key => $value) {
    echo $key . '<br>';
}

//menampilkan / mengeluarkan nilai array multi dimensi
echo '<br>';
echo 'nilai array multi dimensi' . '<br>';
foreach ($student as $key => $value) {
    echo 'Name : ' . $value['name'] . '<br>';
    echo 'Age : ' . $value['age'] . '<br>';
    echo 'Jurusan : ' . $value['major'] . '<br>';
    '<hr>';
}

?>