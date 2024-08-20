<?php
/* Smarty version 4.3.1, created on 2024-08-20 10:08:46
  from 'C:\laragon\www\SuiteCRM-7.14.5\modules\Campaigns\tpls\WizardHomeStart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66c46b2e5a4ce9_55325684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa4b75eea8b64102e6bbcc47d851a8d68e7cb700' => 
    array (
      0 => 'C:\\laragon\\www\\SuiteCRM-7.14.5\\modules\\Campaigns\\tpls\\WizardHomeStart.tpl',
      1 => 1723532450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c46b2e5a4ce9_55325684 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id='wiz_stage'>
<form  id="wizform" name="wizform" method="POST" action="index.php">
	<input type="hidden" name="module" value="Campaigns">
	<input type="hidden" id='action' name="action" value='WizardNewsletter'>
	<input type="hidden" id="return_module" name="return_module" value="Campaigns">
	<input type="hidden" id="return_action" name="return_action" value="WizardHome">


	
<table class='other view' cellspacing="1">
<tr>


	<td  rowspan='2' width='100%' class='edit view'>
		<div id="wiz_message"></div>


		<div id=wizard class="wizard-unique-elem">


			<div id='step1' >
				<table border="0" cellpadding="0" cellspacing="0" width="100%">

					<tr>
						<td colspan='2' >
							<fieldset>
								<legend><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOME_START_MESSAGE'];?>
</legend>
								<p style="display: none;">
									<input type="radio"  id="wizardtype_nl" name="wizardtype" value='1'checked ><label for='wizardtype_nl'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEWSLETTER'];?>
</label><br>
									<input type="radio"  id="wizardtype_em" name="wizardtype" value='2'><label for='wizardtype_em'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL'];?>
</label><br>
									<input type="radio"  id="wizardtype_ot" name='wizardtype' value='3'><label for='wizardtype_ot'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_OTHER_TYPE_CAMPAIGN'];?>
</label><br>
									<input type="radio"  id="wizardtype_survey" name='wizardtype' value='4'><label for='wizardtype_survey'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CAMPAIGN_SURVEY'];?>
</label><br>
								</p>



								<ul class="icon-btn-lst">
									<li class="icon-btn">
										<a href="javascript:" onclick="$('#wizardtype_nl').click(); $(this).closest('form').submit();" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEWSLETTER_TITLE'];?>
">
											<span class="suitepicon suitepicon-action-view-news"></span>
											<br />
											<span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEWSLETTER'];?>
</span>
										</a>
									</li>

									<li class="icon-btn">
										<a href="javascript:" onclick="$('#wizardtype_em').click(); $(this).closest('form').submit();" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL_TITLE'];?>
">
											<span class="suitepicon suitepicon-module-emails"></span>
											<br />
											<span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL'];?>
</span>
										</a>
									</li>

									<li class="icon-btn">
										<a href="javascript:" onclick="$('#wizardtype_ot').click(); $(this).closest('form').submit();" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NON_EMAIL_TITLE'];?>
">
											<span class="suitepicon suitepicon-action-megaphone"></span>
											<br />
											<span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_OTHER_TYPE_CAMPAIGN'];?>
</span>
										</a>
									</li>
									<li class="icon-btn">
										<a href="javascript:" onclick="$('#wizardtype_survey').click(); $(this).closest('form').submit();" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CAMPAIGN_SURVEY'];?>
">
											<span class="suitepicon suitepicon-module-surveys"></span>
											<br />
											<span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CAMPAIGN_SURVEY'];?>
</span>
										</a>
									</li>
								</ul>

							</fieldset>
						</td>
					</tr>
				</table>
			</div>

		</div>


	
	</td>
</tr>
</table>



</form>



</div>



<?php }
}
