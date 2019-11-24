<center>
    <select required multiple="multiple" id="my-select" name="tests[]" size="17" class="searchable">
        <option value="01.01">ПКК</option>
        {foreach from=$tests item=test}
        <option value="{$test.code}" style="list-style: none;">{$test.button}</option>
        {/foreach}
        <option value="01.09">Урина-Седимент</option>
        <option value="01.08">Урина-Химично</option>
        <option value="66.00">АКР</option>
        <option value="01.40">Левкограма</option>
    </select>
</center>
<script src="../js/jquery.multi-select.js" type="text/javascript"></script>
<script>
    $('#my-select').multiSelect()
</script>