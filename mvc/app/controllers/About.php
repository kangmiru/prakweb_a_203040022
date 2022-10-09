<?php

class About {
    public function index($nama = 'hafadz', $pekerjaan = 'mahasiswa'){
        echo "Hallo nama saya $nama, saya adalah $pekerjaan";
    }

    public function page(){
        echo 'About/page';
    }
}