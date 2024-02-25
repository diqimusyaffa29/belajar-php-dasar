<?php

include "MyFunction.php"; //karena dalam satu dir , maka tidak usah dimasukkan lib nya
include_once "MyFunction.php"; //include once memastikan agar file yang di include hanya dipanggil sekali

echo sayHello("Diqi", "Musyaffa");

//kalao mengguakan require, maka program akan berhenti di jalankan.
//kalau menggunakan include, maka program akan tetap dijalankan, hanya akan menampilakn warning

