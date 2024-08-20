

<script language="javascript">
    {literal}
    SUGAR.util.doWhen(function () {
        return $("#contentTable").length == 0;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
<input type="hidden" name="mode" value="">
{if !$config.enable_action_menu}
<div class="buttons">
<input type="button" class="button" onclick="window.location='index.php?module=Campaigns&action=WizardHome&record={$fields.id.value}';" name="button" id="launch_wizard_button" value="{$MOD.LBL_TO_WIZARD_TITLE}" //>
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView');var _form = (_form) ? _form : document.forms[0]; _form.return_module.value='Campaigns'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);_form.submit();" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button"/>{/if}
{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView');var _form = (_form) ? _form : document.forms[0]; _form.return_module.value='Campaigns'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form);_form.submit();" type="button" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button"/>{/if}
<input type="button" title="{$MOD.LBL_TEST_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('formDetailView');_form = document.getElementById('formDetailView'); _form.return_module.value='Campaigns'; _form.return_action.value='TrackDetailView';_form.action.value='Schedule';_form.mode.value='test';SUGAR.ajaxUI.submitForm(_form);_form.submit();" name="button" id="send_test_button" value="{$MOD.LBL_TEST_BUTTON_LABEL}"/>
<input type="button" title="{$MOD.LBL_QUEUE_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='Campaigns'; _form.return_action.value='TrackDetailView';_form.action.value='Schedule';SUGAR.ajaxUI.submitForm(_form);_form.submit();" name="button" id="send_emails_button" value="{$MOD.LBL_QUEUE_BUTTON_LABEL}"/>
<input type="button" title="{$MOD.LBL_MARK_AS_SENT}" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='Campaigns'; _form.return_action.value='TrackDetailView';_form.action.value='DetailView';_form.mode.value='set_target';SUGAR.ajaxUI.submitForm(_form);_form.submit();" name="button" id="mark_as_sent_button" value="{$MOD.LBL_MARK_AS_SENT}"/>
<script {$MSG_SCRIPT} ></script>
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Campaigns", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
{/if}
</form>
</div>
</td>
<td align="right" width="20%" class="buttons">{$ADMIN_EDIT}
</td>
<td align="right" width="10%">&nbsp;</td>
<td align="right" width="100%" NOWRAP class="buttons">
<div class="actionsContainer">
<input type="button" class="button" onclick="javascript:window.location='index.php?module=Campaigns&action=TrackDetailView&record={$fields.id.value}';" name="button" id="view_status_button" value="{$MOD.LBL_TRACK_BUTTON_LABEL}" />&nbsp;
<input id="viewRoiButtonId" type="button" class="button" onclick="javascript:window.location='index.php?module=Campaigns&action=RoiDetailView&record={$fields.id.value}';" name="button" id="view_roi_button" value="{$MOD.LBL_TRACK_ROI_BUTTON_LABEL}" />&nbsp;
</div>
</td>
</tr>
</table>
{sugar_include include=$includes}
<div class="detail-view">
<div class="mobile-pagination">{$PAGINATION}</div>

<ul class="nav nav-tabs">

{if $config.enable_action_menu and $config.enable_action_menu != false}
<li role="presentation" class="active">
<a id="tab0" data-toggle="tab" class="hidden-xs">
{sugar_translate label='LBL_CAMPAIGN_INFORMATION' module='Campaigns'}
</a>
<a id="xstab0" href="#" class="visible-xs first-tab dropdown-toggle" data-toggle="dropdown">
{sugar_translate label='LBL_CAMPAIGN_INFORMATION' module='Campaigns'}
</a>
</li>
{/if}
{if $config.enable_action_menu and $config.enable_action_menu != false}
<li id="tab-actions" class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">ACTIONS<span class="suitepicon suitepicon-action-caret"></span></a>
<ul class="dropdown-menu">
<li><input type="button" class="button" onclick="window.location='index.php?module=Campaigns&action=WizardHome&record={$fields.id.value}';" name="button" id="launch_wizard_button" value="{$MOD.LBL_TO_WIZARD_TITLE}" //></li>
<li>{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView');var _form = (_form) ? _form : document.forms[0]; _form.return_module.value='Campaigns'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);_form.submit();" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button"/>{/if}</li>
<li>{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView');var _form = (_form) ? _form : document.forms[0]; _form.return_module.value='Campaigns'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form);_form.submit();" type="button" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button"/>{/if}</li>
<li><input type="button" title="{$MOD.LBL_TEST_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('formDetailView');_form = document.getElementById('formDetailView'); _form.return_module.value='Campaigns'; _form.return_action.value='TrackDetailView';_form.action.value='Schedule';_form.mode.value='test';SUGAR.ajaxUI.submitForm(_form);_form.submit();" name="button" id="send_test_button" value="{$MOD.LBL_TEST_BUTTON_LABEL}"/></li>
<li><input type="button" title="{$MOD.LBL_QUEUE_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='Campaigns'; _form.return_action.value='TrackDetailView';_form.action.value='Schedule';SUGAR.ajaxUI.submitForm(_form);_form.submit();" name="button" id="send_emails_button" value="{$MOD.LBL_QUEUE_BUTTON_LABEL}"/></li>
<li><input type="button" title="{$MOD.LBL_MARK_AS_SENT}" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='Campaigns'; _form.return_action.value='TrackDetailView';_form.action.value='DetailView';_form.mode.value='set_target';SUGAR.ajaxUI.submitForm(_form);_form.submit();" name="button" id="mark_as_sent_button" value="{$MOD.LBL_MARK_AS_SENT}"/></li>
<li><script {$MSG_SCRIPT} ></script></li>
<li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Campaigns", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li>
</ul>
</li>
<li class="tab-inline-pagination">
{$PAGINATION}
</li>
{/if}
</ul>
<div class="clearfix"></div>

{if $config.enable_action_menu and $config.enable_action_menu != false}

<div class="tab-content">
{else}

<div class="tab-content" style="padding: 0; border: 0;">
{/if}


{if $config.enable_action_menu and $config.enable_action_menu != false}
<div class="tab-pane-NOBOOTSTRAPTOGGLER active fade in" id='tab-content-0'>





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="company_name_c">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMPANY_NAME' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="varchar" field="company_name_c" colspan='3'>

{if !$fields.company_name_c.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.company_name_c.value) <= 0}
{assign var="value" value=$fields.company_name_c.default_value }
{else}
{assign var="value" value=$fields.company_name_c.value }
{/if} 
<span class="sugar_field" id="{$fields.company_name_c.name}">{$fields.company_name_c.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="date_entered">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="datetime" field="date_entered" >

{if !$fields.date_entered.hidden}
{counter name="panelFieldCount" print=false}
<span id="date_entered" class="sugar_field">{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}</span>
{/if}

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="date_modified">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_MODIFIED' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="datetime" field="date_modified" >

{if !$fields.date_modified.hidden}
{counter name="panelFieldCount" print=false}
<span id="date_modified" class="sugar_field">{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}</span>
{/if}

</div>


</div>

</div>

</div>
{else}

<div class="tab-pane-NOBOOTSTRAPTOGGLER panel-collapse"></div>
{/if}
</div>

<div class="panel-content">
<div>&nbsp;</div>





{if $config.enable_action_menu and $config.enable_action_menu != false}

{else}

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel--1" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_CAMPAIGN_INFORMATION' module='Campaigns'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel--1" data-id="LBL_CAMPAIGN_INFORMATION">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="company_name_c">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMPANY_NAME' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="varchar" field="company_name_c" colspan='3'>

{if !$fields.company_name_c.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.company_name_c.value) <= 0}
{assign var="value" value=$fields.company_name_c.default_value }
{else}
{assign var="value" value=$fields.company_name_c.value }
{/if} 
<span class="sugar_field" id="{$fields.company_name_c.name}">{$fields.company_name_c.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="date_entered">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="datetime" field="date_entered" >

{if !$fields.date_entered.hidden}
{counter name="panelFieldCount" print=false}
<span id="date_entered" class="sugar_field">{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}</span>
{/if}

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="date_modified">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_MODIFIED' module='Campaigns'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field" type="datetime" field="date_modified" >

{if !$fields.date_modified.hidden}
{counter name="panelFieldCount" print=false}
<span id="date_modified" class="sugar_field">{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}</span>
{/if}

</div>


</div>

</div>

</div>
</div>
</div>
{/if}
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>            <script type="text/javascript" src="include/InlineEditing/inlineEditing.js"></script>
<script type="text/javascript" src="modules/Favorites/favorites.js"></script>
{literal}
<script type="text/javascript">

                    let selectTabDetailView = function(tab) {
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
                        $('#content div.detail-view div.panel-content div.panel.panel').hide();
                        $('#content div.panel-content div.panel.tab-panel-' + tab).show();
                    };

                    var selectTabOnError = function(tab) {
                        selectTabDetailView(tab);
                        $('#content ul.nav.nav-tabs > li').removeClass('active');
                        $('#content ul.nav.nav-tabs > li a').css('color', '');

                        $('#content ul.nav.nav-tabs > li').eq(tab).find('a').first().css('color', 'red');
                        $('#content ul.nav.nav-tabs > li').eq(tab).addClass('active');

                    };

                    var selectTabOnErrorInputHandle = function(inputHandle) {
                        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^detailpanel_(.*)$/)[1];
                        selectTabOnError(tab);
                    };


                    $(function(){
                        $('#content ul.nav.nav-tabs > li > a[data-toggle="tab"]').click(function(e){
                            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(?<number>(.)*)$/)[1]);
                                selectTabDetailView(tab);
                            }
                        });
                    });

                </script>
{/literal}