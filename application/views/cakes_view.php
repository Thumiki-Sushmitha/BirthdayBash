
<div>
<h1 style="color: blue;background-color: #EEE;padding-left: 5%;" class="col-sm-offset-2 col-sm-4">
	<b>Cakes</b>
</h1>
</div>
<br><br>
<div class="container col-sm-8 ">
<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>home/getcakeshops">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id_location">
                                Enter location:
                            </label>
                            <div class="col-sm-10">
                                <input id="id_location" maxlength="30" name="location" type="text" list="loc">
                                <datalist id="loc">
                                    <?php foreach ($loc as $m): ?>
                                    <option value = <?php echo  $m->location;?> />
                                    <?php endforeach ?>
                                </datalist>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-2 ">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div><br>
                            
                        </div>

                    </form>
</div>