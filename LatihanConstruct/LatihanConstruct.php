<!-- <?php

    // const CHECK_STATUS = 'HADIR';


    // const CHECK_NAMA_GORENGAN = [
    //     'TAHU ISI', 'TEMPE', 'BATAGOR'
    // ];


    // const STUDENT = [
    //     'NAMA : ' => 'JOHANLU DODOL',
    //     'AGE : ' => 999,
    //     'ROLE : ' => 'ASSASIN',
    //     'is_active' => true
    // ];


    const USERS = [
        //CONST DENGAN NILAI ARRAY MULTI DIMENSI 
        [
            'NAMA'=> 'DEDISUN DODOL',
            'AGE' => 99999999,
            'ROLE' => 'ORANG GA JELAS',
            'is_active' => true
        ],
        [
            'NAMA' => 'ZAYNC.',
            'AGE' => 99999999999999,
            'ROLE' => 'BLUE ASSASIN',
            'is_active' => true
        ],
        [
            'NAMA' => 'SURYADI DODOL',
            'AGE' => 999999999999999999,
            'ROLE' => 'DARK ASSASIN',
            'is_active' => true
        ]
    ];

    $index = 1;


    // foreach (USERS as $key => $value) {
    //     echo 'No. ' . $index++ . '<br>';
    //     echo 'Nama : ' . $value ['NAMA'] . '<br>';
    //     echo 'Umur : ' . $value ['AGE'] . '<br>';
    //     echo 'Role : ' . $value ['ROLE'] . '<br>';
    //     echo 'Nama : ' . $value ['is_active'] . '<br>';
    //     echo '<hr>';
    // }

//nilai constant menggunakan method define dengan 1 nilai
    define('CHECK_STATUS', 'Hadir');


    define('NAMA_GORENGAN', [
        //ARRAY BIASA
              'TAHU ISI', 'TEMPE', 'BATAGOR', 'BAKWAN'
    ]);

//menampilkan nilai define
    echo CHECK_STATUS . '<hr>';
//output : 'Hadir"


//menampilkan nilai array biasa
foreach (NAMA_GORENGAN as $key => $value) {
    echo $key . '. ' . '<hr>';
}

    //output :
// 0. 'TAHU ISI',
// 1. 'TEMPE',
// 2. 'BATAGOR',
// 3. 'BAKWAN'
//4. TRUE

define('USERS   ', [

    //array asosiasi
        'NAMA : ' => 'JOHANLU DODOL',
        'AGE : ' => 9999999,
        'ROLE : ' => 'ASSASIN',
        'is_active' => true,

]);

    foreach (USERS as $key => $value){
        echo '<br>';
    }


    var_dump(USERS);
        define('STUDENT', [
            [ 
            'NAMA : ' => 'JOHANLU DODOL',
            'AGE : ' => 9999999,
            'ROLE : ' => 'ASSASIN',
            'is_active' => true,
            ],
            [  
            'NAMA : ' => 'JOHANLU DODOL',
            'AGE : ' => 9999999,
            'ROLE : ' => 'ASSASIN',
            'is_active' => true,
            ],
            [  
            'NAMA : ' => 'JOHANLU DODOL',
            'AGE : ' => 9999999,
            'ROLE : ' => 'ASSASIN',
            'is_active' => true,
            ]
        ]);
    
        $index = 1;
            foreach (USERS as $key => $value) {
                echo 'no. ' . $index++ . '<br>';
                echo 'Nama : ' . $value ['name'] . '<br>';
                echo 'Umur :' . $value ['age'] . '<br>';
                echo 'Jabatan : ' . $value ['role'] . '<br>';
                echo 'Aktif : ' . $value ['is_active'] . '<br>';
                echo '<hr>';
            }






    //CHECK NILAI SELURUH ARRAY
//print_r(USERS);
    




 //   foreach (CHECK_NAMA_GORENGAN as $key => $value) {
  //      echo $key . '. ' .$value . '<br>';
  //  }


 
