<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Latihan</title>

    <style>
        li {
            list-style: none;
        }

        fieldset {
            margin: 10px;
        }
    </style>
</head>

<body>
    <h1>Hasil Soal Latihan</h1>

    <?php

    use App\Controllers\Nilai;

    $array1 = array(); ?>
    <?php $array2 = array(); ?>
    <?php $array3 = array(); ?>
    <?php $array4 = array(); ?>
    <?php $array5 = array(); ?>
    <?php $array6 = array(); ?>
    <?php $array7 = array(); ?>
    <?php $array8 = array(); ?>

    <?php foreach ($cek as $cekJawaban) : ?>
        <?php array_push($array1, $cekJawaban); ?>
    <?php endforeach ?>

    <?php foreach ($hasil as $hasilLatihan) : ?>
        <?php
        array_push($array2, $hasilLatihan['jawaban']);
        array_push($array3, $hasilLatihan['id']);
        array_push($array4, $hasilLatihan['soal']);
        array_push($array5, $hasilLatihan['pilihan1']);
        array_push($array6, $hasilLatihan['pilihan2']);
        array_push($array7, $hasilLatihan['pilihan3']);
        array_push($array8, $hasilLatihan['pembahasan']);
        ?>
    <?php endforeach ?>

    <?php
    $nilai = 0;
    $x = 0;
    $y = $array3[0];
    foreach ($hasil as $hasilLatihan) : ?>

        <!-- Ini penting untuk mengecek array! -->
        <?php
        // print_r($array3);
        // print_r($array1);
        // print_r($array4);
        // die;
        ?>


        <p><?= ($x + 1) ?> . <img src="/images/database_reference/<?= $array4[$x]; ?>" width="100px"></p>
        <?php if ($array2[$x] != $array1[$x]['soal' . $y]) { ?>
            <p>Jawaban kamu : <span style="background-color: #FF9C9E"><?= $array1[$x]['soal' . $y] ?></span>. <br><br><?= $array1[$x]['soal' . $y] ?> adalah jawaban yang salah.</p>
            <p><span style="background-color: #ADFFB4"><?= $array2[$x] ?></span> adalah jawaban yang benar.</p>
        <?php } else { ?>
            <p>Jawaban kamu : <span style="background-color: #ADFFB4"><?= $array1[$x]['soal' . $y] ?></span>. <br><br><?= $array1[$x]['soal' . $y] ?> adalah jawaban yang benar.</p>
        <?php } ?>
        <img src="/images/database_reference/<?= $array8[$x]; ?>" width="100%">

        <br>
    <?php $x++;
        $y++;
    endforeach ?>
</body>

</html>