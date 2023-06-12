<?php

?>
<!DOCTYPE html>
<html>

<head>
    <title>Seat Booking Form</title>
    <link rel="stylesheet" type="text/css" href="/assignment_william/public/assets/css/ticketing.css">
    <script defer src="/assignment_william/public/assets/js/script.js"></script>
</head>

<body>
    <div class="container">
        <div class="text">
            <p class="title">Seat(s)</p>
            <p id="result"></p>
        </div>
        <div class="stage">
            <img src="/assignment_william/public/assets/images/stage.png" class="brown-stage">
        </div>
        <div class="row1">
            <div class="seat-r1c1">
                <button class="seat-button" onclick="changeColor(this)">A01</button>
                <button class="seat-button" onclick="changeColor(this)">A02</button>
                <button class="seat-button" onclick="changeColor(this)">A03</button>
            </div>
            <div class="seat-r1c2">
                <button class="seat-button" onclick="changeColor(this)">A04</button>
                <button class="seat-button" onclick="changeColor(this)">A05</button>
                <button class="seat-button" onclick="changeColor(this)">A06</button>
                <button class="seat-button" onclick="changeColor(this)">A07</button>
                <button class="seat-button" onclick="changeColor(this)">A08</button>
                <button class="seat-button" onclick="changeColor(this)">A09</button>
                <button class="seat-button" onclick="changeColor(this)">A10</button>
                <button class="seat-button" onclick="changeColor(this)">A11</button>
                <button class="seat-button" onclick="changeColor(this)">A12</button>
                <button class="seat-button" onclick="changeColor(this)">A13</button>
            </div>
            <div class="seat-r1c3">
                <button class="seat-button" onclick="changeColor(this)">A14</button>
                <button class="seat-button" onclick="changeColor(this)">A15</button>
                <button class="seat-button" onclick="changeColor(this)">A16</button>

            </div>
        </div>
        <div class="row">
            <div class="seat-rc1">
                <button class="seat-button" onclick="changeColor(this)">B01</button>
                <button class="seat-button" onclick="changeColor(this)">B02</button>
                <button class="seat-button" onclick="changeColor(this)">B03</button>

            </div>
            <div class="seat-rc2">
                <button class="seat-button" onclick="changeColor(this)">B04</button>
                <button class="seat-button" onclick="changeColor(this)">B05</button>
                <button class="seat-button" onclick="changeColor(this)">B06</button>
                <button class="seat-button" onclick="changeColor(this)">B07</button>
                <button class="seat-button" onclick="changeColor(this)">B08</button>
                <button class="seat-button" onclick="changeColor(this)">B09</button>
                <button class="seat-button" onclick="changeColor(this)">B10</button>
                <button class="seat-button" onclick="changeColor(this)">B11</button>
                <button class="seat-button" onclick="changeColor(this)">B12</button>
                <button class="seat-button" onclick="changeColor(this)">B13</button>
            </div>
            <div class="seat-rc3">
                <button class="seat-button" onclick="changeColor(this)">B14</button>
                <button class="seat-button" onclick="changeColor(this)">B15</button>
                <button class="seat-button" onclick="changeColor(this)">B16</button>
            </div>
        </div>
        <div class="row">
            <div class="seat-rc1">
                <button class="seat-button" onclick="changeColor(this)">C01</button>
                <button class="seat-button" onclick="changeColor(this)">C02</button>
                <button class="seat-button" onclick="changeColor(this)">C03</button>

            </div>
            <div class="seat-rc2">
                <button class="seat-button" onclick="changeColor(this)">C04</button>
                <button class="seat-button" onclick="changeColor(this)">C05</button>
                <button class="seat-button" onclick="changeColor(this)">C06</button>
                <button class="seat-button" onclick="changeColor(this)">C07</button>
                <button class="seat-button" onclick="changeColor(this)">C08</button>
                <button class="seat-button" onclick="changeColor(this)">C09</button>
                <button class="seat-button" onclick="changeColor(this)">C10</button>
                <button class="seat-button" onclick="changeColor(this)">C11</button>
                <button class="seat-button" onclick="changeColor(this)">C12</button>
                <button class="seat-button" onclick="changeColor(this)">C13</button>
            </div>
            <div class="seat-rc3">
                <button class="seat-button" onclick="changeColor(this)">C14</button>
                <button class="seat-button" onclick="changeColor(this)">C15</button>
                <button class="seat-button" onclick="changeColor(this)">C16</button>
            </div>
        </div>
        <div class="row">
            <div class="seat-rc1">
                <button class="seat-button" onclick="changeColor(this)">D01</button>
                <button class="seat-button" onclick="changeColor(this)">D02</button>
                <button class="seat-button" onclick="changeColor(this)">D03</button>

            </div>
            <div class="seat-rc2">
                <button class="seat-button" onclick="changeColor(this)">D04</button>
                <button class="seat-button" onclick="changeColor(this)">D05</button>
                <button class="seat-button" onclick="changeColor(this)">D06</button>
                <button class="seat-button" onclick="changeColor(this)">D07</button>
                <button class="seat-button" onclick="changeColor(this)">D08</button>
                <button class="seat-button" onclick="changeColor(this)">D09</button>
                <button class="seat-button" onclick="changeColor(this)">D10</button>
                <button class="seat-button" onclick="changeColor(this)">D11</button>
                <button class="seat-button" onclick="changeColor(this)">D12</button>
                <button class="seat-button" onclick="changeColor(this)">D13</button>
            </div>
            <div class="seat-rc3">
                <button class="seat-button" onclick="changeColor(this)">D14</button>
                <button class="seat-button" onclick="changeColor(this)">D15</button>
                <button class="seat-button" onclick="changeColor(this)">D16</button>
            </div>
        </div>
        <div class="row">
            <div class="seat-rc1">
                <button class="seat-button" onclick="changeColor(this)">E01</button>
                <button class="seat-button" onclick="changeColor(this)">E02</button>
                <button class="seat-button" onclick="changeColor(this)">E03</button>

            </div>
            <div class="seat-rc2">
                <button class="seat-button" onclick="changeColor(this)">E04</button>
                <button class="seat-button" onclick="changeColor(this)">E05</button>
                <button class="seat-button" onclick="changeColor(this)">E06</button>
                <button class="seat-button" onclick="changeColor(this)">E07</button>
                <button class="seat-button" onclick="changeColor(this)">E08</button>
                <button class="seat-button" onclick="changeColor(this)">E09</button>
                <button class="seat-button" onclick="changeColor(this)">E10</button>
                <button class="seat-button" onclick="changeColor(this)">E11</button>
                <button class="seat-button" onclick="changeColor(this)">E12</button>
                <button class="seat-button" onclick="changeColor(this)">E13</button>
            </div>
            <div class="seat-rc3">
                <button class="seat-button" onclick="changeColor(this)">E14</button>
                <button class="seat-button" onclick="changeColor(this)">E15</button>
                <button class="seat-button" onclick="changeColor(this)">E16</button>
            </div>
        </div>
        <div class="row">
            <div class="seat-rc1">
                <button class="seat-button" onclick="changeColor(this)">F01</button>
                <button class="seat-button" onclick="changeColor(this)">F02</button>
                <button class="seat-button" onclick="changeColor(this)">F03</button>

            </div>
            <div class="seat-rc2">
                <button class="seat-button" onclick="changeColor(this)">F04</button>
                <button class="seat-button" onclick="changeColor(this)">F05</button>
                <button class="seat-button" onclick="changeColor(this)">F06</button>
                <button class="seat-button" onclick="changeColor(this)">F07</button>
                <button class="seat-button" onclick="changeColor(this)">F08</button>
                <button class="seat-button" onclick="changeColor(this)">F09</button>
                <button class="seat-button" onclick="changeColor(this)">F10</button>
                <button class="seat-button" onclick="changeColor(this)">F11</button>
                <button class="seat-button" onclick="changeColor(this)">F12</button>
                <button class="seat-button" onclick="changeColor(this)">F13</button>
            </div>
            <div class="seat-rc3">
                <button class="seat-button" onclick="changeColor(this)">F14</button>
                <button class="seat-button" onclick="changeColor(this)">F15</button>
                <button class="seat-button" onclick="changeColor(this)">F16</button>
            </div>
        </div>
        <div class="row">
            <div class="seat-rc1">
                <button class="seat-button" onclick="changeColor(this)">G01</button>
                <button class="seat-button" onclick="changeColor(this)">G02</button>
                <button class="seat-button" onclick="changeColor(this)">G03</button>

            </div>
            <div class="seat-rc2">
                <button class="seat-button" onclick="changeColor(this)">H04</button>
                <button class="seat-button" onclick="changeColor(this)">H05</button>
                <button class="seat-button" onclick="changeColor(this)">H06</button>
                <button class="seat-button" onclick="changeColor(this)">H07</button>
                <button class="seat-button" onclick="changeColor(this)">H08</button>
                <button class="seat-button" onclick="changeColor(this)">H09</button>
                <button class="seat-button" onclick="changeColor(this)">H10</button>
                <button class="seat-button" onclick="changeColor(this)">H11</button>
                <button class="seat-button" onclick="changeColor(this)">H12</button>
                <button class="seat-button" onclick="changeColor(this)">H13</button>
            </div>
            <div class="seat-rc3">
                <button class="seat-button" onclick="changeColor(this)">H14</button>
                <button class="seat-button" onclick="changeColor(this)">H15</button>
                <button class="seat-button" onclick="changeColor(this)">H16</button>
            </div>
        </div>
        <div class="row">
            <div class="seat-rc1">
                <button class="seat-button" onclick="changeColor(this)">I01</button>
                <button class="seat-button" onclick="changeColor(this)">I02</button>
                <button class="seat-button" onclick="changeColor(this)">I03</button>

            </div>
            <div class="seat-rc2">
                <button class="seat-button" onclick="changeColor(this)">I04</button>
                <button class="seat-button" onclick="changeColor(this)">I05</button>
                <button class="seat-button" onclick="changeColor(this)">I06</button>
                <button class="seat-button" onclick="changeColor(this)">I07</button>
                <button class="seat-button" onclick="changeColor(this)">I08</button>
                <button class="seat-button" onclick="changeColor(this)">I09</button>
                <button class="seat-button" onclick="changeColor(this)">I10</button>
                <button class="seat-button" onclick="changeColor(this)">I11</button>
                <button class="seat-button" onclick="changeColor(this)">I12</button>
                <button class="seat-button" onclick="changeColor(this)">I13</button>
            </div>
            <div class="seat-rc3">
                <button class="seat-button" onclick="changeColor(this)">I14</button>
                <button class="seat-button" onclick="changeColor(this)">I15</button>
                <button class="seat-button" onclick="changeColor(this)">I16</button>
            </div>
        </div>
        <div class="row">
            <div class="seat-rc1">
                <button class="seat-button" onclick="changeColor(this)">J01</button>
                <button class="seat-button" onclick="changeColor(this)">J02</button>
                <button class="seat-button" onclick="changeColor(this)">J03</button>

            </div>
            <div class="seat-rc2">
                <button class="seat-button" onclick="changeColor(this)">J04</button>
                <button class="seat-button" onclick="changeColor(this)">J05</button>
                <button class="seat-button" onclick="changeColor(this)">J06</button>
                <button class="seat-button" onclick="changeColor(this)">J07</button>
                <button class="seat-button" onclick="changeColor(this)">J08</button>
                <button class="seat-button" onclick="changeColor(this)">J09</button>
                <button class="seat-button" onclick="changeColor(this)">J10</button>
                <button class="seat-button" onclick="changeColor(this)">J11</button>
                <button class="seat-button" onclick="changeColor(this)">J12</button>
                <button class="seat-button" onclick="changeColor(this)">J13</button>
            </div>
            <div class="seat-rc3">
                <button class="seat-button" onclick="changeColor(this)">J14</button>
                <button class="seat-button" onclick="changeColor(this)">J15</button>
                <button class="seat-button" onclick="changeColor(this)">J16</button>
            </div>
        </div>
        <div class="row">
            <div class="seat-rc1">
                <button class="seat-button" onclick="changeColor(this)">K01</button>
                <button class="seat-button" onclick="changeColor(this)">K02</button>
                <button class="seat-button" onclick="changeColor(this)">K03</button>

            </div>
            <div class="seat-rc2">
                <button class="seat-button" onclick="changeColor(this)">K04</button>
                <button class="seat-button" onclick="changeColor(this)">K05</button>
                <button class="seat-button" onclick="changeColor(this)">K06</button>
                <button class="seat-button" onclick="changeColor(this)">K07</button>
                <button class="seat-button" onclick="changeColor(this)">K08</button>
                <button class="seat-button" onclick="changeColor(this)">K09</button>
                <button class="seat-button" onclick="changeColor(this)">K10</button>
                <button class="seat-button" onclick="changeColor(this)">K11</button>
                <button class="seat-button" onclick="changeColor(this)">K12</button>
                <button class="seat-button" onclick="changeColor(this)">K13</button>
            </div>
            <div class="seat-rc3">
                <button class="seat-button" onclick="changeColor(this)">K14</button>
                <button class="seat-button" onclick="changeColor(this)">K15</button>
                <button class="seat-button" onclick="changeColor(this)">K16</button>
            </div>

            <button onclick="submit()">Submit</button>
        </div>
    </div>

</body>

<script>
    function submit() {
        fetch('<?=ROOT?>/api_ticket', {
                method: 'post',
                body: JSON.stringify({
                    "post_id": <?php echo $_GET['post_id'] ?>,
                    "seat_numbers": selectedButtons
                })
            })
            .then(res => res.json())
            .then(res => {
                window.location.href = "<?=ROOT?>/checkout?ticket_id=" + res.id;
            })
            .catch(err => {
                // TODO: implement error screen
                console.error(err)
            })
    }

</script>

</html>