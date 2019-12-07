{include file="header.tpl"} {include file="top_menu.tpl"} {include file="side_menu.tpl"}
<div class="content">
    <div class="settings">
        <table>
            <tr>
                <td style="color: white" align="center">
                    <p>{$lang.panel} {$lang.tests}</p>
                    <form action="./settings.php" method="post">

                        <p>
                            <input type="radio" value="panel_1" name="p1" {if $test_panel.0.setting_selected=="panel_1" } checked {/if} onclick="javascript: submit()">{$lang.look} 1:
                            <br>
                            <img src="../images/panel_1.PNG" width="200" height="100" border="1">
                        </p>
                        <p>
                            <input type="radio" value="panel_2" name="p1" {if $test_panel.0.setting_selected=="panel_2" } checked {/if} onclick="javascript: submit()"> {$lang.look} 2:
                            <br>
                            <img src="../images/panel_2.PNG" width="200" height="100" border="1">
                        </p>
                    </form>

                </td>
                <td align="center">
                    <table>
                        <form action="../controller/settings.php" method="POST">
                            <table border="0" class="td-submenu">
                                <h1 style="color: whitesmoke ; font-size: 25px;">{$lang.general_settings}</h1>
                                <hr>
                                <tr>
                                    <td align="right">{$lang.hospital}:</td>
                                    <td>
                                        <input type="text" name="hospital" value="{$hospital.0.name}">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">{$lang.doctor}:</td>
                                    <td>
                                        <input type="text" name="doctor" value="{$hospital.0.doctor}">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">{$lang.address}:</td>
                                    <td>
                                        <input type="text" name="address" value="{$hospital.0.address}">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">{$lang.phone}:</td>
                                    <td>
                                        <input type="text" name="phone" value="{$hospital.0.phone}">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right"> Mail:</td>
                                    <td>
                                        <input type="text" name="mail" value="{$hospital.0.mail}">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">{$lang.website}:</td>
                                    <td>
                                        <input type="text" name="web" value="{$hospital.0.web}">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">{$lang.warning}:</td>
                                    <td>
                                        <textarea name="note" rows="10" cols="35" style="resize: none;">{$hospital.0.note}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">{$lang.language}:</td>
                                    <td>
                                        <select name="lang">
                                            <option value="english" {if {$hospital.0.default_lang} == "english"}selected{/if}>English</option>
                                            <option value="bulgarian" {if {$hospital.0.default_lang} == "bulgarian"}selected{/if}>Български</option>
                                            <option value="france" {if {$hospital.0.default_lang} == "france"}selected{/if}>Le français</option>
                                            <option value="spanish" {if {$hospital.0.default_lang} == "spanish"}selected{/if}>Español</option>
                                        </select>
                                    </td>
                                </tr>

                            </table>
                            <p>
                                <input type="submit" name="save" value="{$lang.save_btn}">
                            </p>
                        </form>
                </td>
            </tr>
            </table>

    </div>
    <div class="footer"></div>
</div>
{include file="footer.tpl"}