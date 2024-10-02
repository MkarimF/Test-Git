<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>

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
    <h1>Soal Latihan</h1>

    <!-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSe03P-0S02GHoFkQ5bqzgNefbJYSSyqRxRAvB2JdBIw75TkuA/viewform?embedded=true" width="640" height="1606" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe> -->

    <form method="POST" action="/home">

        <div>
            <?php foreach ($soal as $data) : ?>
                <div>
                <fieldset>
                <?php $arr_opsi = array($data['pilihan1'], $data['pilihan2'], $data['pilihan3'], $data['jawaban']);
                shuffle($arr_opsi); ?>
                    <p><?= $data['id'] ?> .<?= $data['soal'] ?></p>
                    <input type="radio" id="soal<? $data['id'] ?>" name="soal<?= $data['id'] ?>" value="<?= $arr_opsi[0] ?>"> <?= $arr_opsi[0] ?><br />
                    <input type="radio" id="soal<? $data['id'] ?>" name="soal<?= $data['id'] ?>" value="<?= $arr_opsi[1] ?>"> <?= $arr_opsi[1] ?><br />
                    <input type="radio" id="soal<? $data['id'] ?>" name="soal<?= $data['id'] ?>" value="<?= $arr_opsi[2] ?>"> <?= $arr_opsi[2] ?><br />
                    <input type="radio" id="soal<? $data['id'] ?>" name="soal<?= $data['id'] ?>" value="<?= $arr_opsi[3] ?>"> <?= $arr_opsi[3] ?><br />
                </fieldset>    
                </div>
                
            <?php endforeach ?>

            <input type="submit" value="Kumpulkan Jawaban">
        </div>


    </form>
</body>

</html>