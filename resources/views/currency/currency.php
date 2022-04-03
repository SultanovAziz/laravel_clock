<option value="" class="label"><?=strtoupper($this->currency['code']);?></option>
<?php foreach($this->currency['child'] as $k => $v): ?>
    <option value="<?=$k;?>"><?=strtoupper($k);?></option>
<?php endforeach; ?>
