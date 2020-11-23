<?php /** @var \App\Models\Article $data */ ?>



<div class="container">


    <form method="post">
        <div class="form-group">
            <label>Nazov Hry:</label>
            <input type="text" name="title" value="<?= ( !empty($data['model']) ? $data['model']->getTitle() : "") ?>"pattern="^[^\s].+[^\s]$"" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>

            <p for="exampleFormControlTextarea1">Recenzia</p>

            <input type="text" name="text" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10" value="<?=  ( !empty($data['model']) ? $data['model']->getText() : "")?>"pattern="^[^\s].+[^\s]$"" required>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>




        </div>


    </form>

</div>