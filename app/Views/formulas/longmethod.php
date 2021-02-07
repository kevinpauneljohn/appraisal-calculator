<form>
    <div class="form-group">
        <label for="area">Area</label>
        <input type="number" class="form-control" id="area" name="area">
    </div>
    <div class="form-group">
        <label for="umv">Unit market value</label> <i>(price per sqm)</i>
        <input type="number" class="form-control" id="umv" name="umv">
    </div>
    <div class="form-group">
        <label for="assess_level">Real Property Class</label>
        <select class="rpc form-control" name="rpc">
            <?php
            foreach ($assessment_levels as $key => $value){
                echo '<option value="'.$value['assessment_level'].'">'.$value['class'].'</option>';
            }?>
        </select>
    </div>
</form>
