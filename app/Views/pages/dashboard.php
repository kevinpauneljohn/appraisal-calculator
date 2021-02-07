<div class="container-md">

    <div class="container-md" style="max-width: 800px;margin-top: 50px;">
        <div class="form-group">
            <label for="real-property">Select Formula Approach</label><span class="required">*</span>
            <select class="form-control real_property" name="real_property">
                <option value=""></option>
                <option value="long method">Long Method</option>
                <option value="Stripping Method">Stripping Method</option>
            </select>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    const action = $(document);

    action.on('change','.real_property', function(){
        let value = this.value;
        console.log(value);
        $.ajax({
            'url' : `<?php echo base_url("index.php/formula/approach")?>/${value}`,
            'type' : 'GET',
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            success: function(response){
                console.log(response);
            },error(xhr, status, error){
                console.log(xhr);
            }
        });
    });
</script>