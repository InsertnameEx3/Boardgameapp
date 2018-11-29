<?= require 'views/partials/head.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-2">
            <form action="battles">
                <button class="btn btn-primary">Terug</button>
            </form>
        </div>
        <div class="col-md-10 ">
            <h4>Start battle</h4>

        </div><!-- End div - battles -->

    </div>
    <hr>

    <form method="post" action="selectgame">


        <div class="form-group row">
            <div class="col-md-2">
                <label>Spel</label>
            </div>
            <div class="col-md-10">
                <select id="inputState" class="form-control" required name="titel">
                    <option value="" selected disabled>Selecteer spel...</option>
                    <?php
                    foreach ($games as $items) {
                        foreach ($items as $item => $value) {
                            if ($item == 'name') {
                                echo "<option value=\"$value\">$value</option>";
                            }


                        }
                    }


                    ?>
                </select>
            </div>
        </div>


        <div class="form-group row">
            <button type="submit" class="btn btn-primary">Begin spel</button>
        </div>
    </form>


</div>


<?= require 'views/partials/foot.php'; ?>


