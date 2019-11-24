<select required id="aioConceptName" name="tests[]" class="ui-choose" multiple="multiple" id="uc_04">
    <option value="01.01" style="list-style: none;">CBC</option>
    {foreach from=$tests item=test}
    <option value="{$test.code}" style="list-style: none;">{$test.button}</option>
    {/foreach}
    <option value="01.09" style="list-style: none;">Urine-Sediment</option>
    <option value="01.08" style="list-style: none;">Urine-Chemical</option>
    <option value="15.00" style="list-style: none;">Na, K, Cl</option>
    <option value="66.00" style="list-style: none;">BGA</option>
    <option value="01.40" style="list-style: none;">WBC count</option>
    <option value="62.00" style="list-style: none;">AGP<!--ambulatory glucose profile--></option>
</select>