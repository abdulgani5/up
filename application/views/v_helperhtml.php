<?php
    echo heading('H!',3); //<h3>
    echo ul(array('ini list 1','ini list2'));

    $image_properties = array(
        'src' => 'https://eventkampus.com/data/sekolah/168-1.jpeg',
        'alt' => 'STMIK Jabar',
        'width' => '200',
        'height' => '100'

    );
echo img($image_properties);