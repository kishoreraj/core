<?php
/**
 * @var array $_
 * @var \OCP\IL10N $l
 * @var OC_Defaults $theme
 */
script('settings', 'panels/lock-breaker');
?>
<div class="section">
	<h2 class="app-name"><?php p($l->t('File lock breaker'));?></h2>
	<p id="lock-breakers">
		<br />
		<?php p($l->t('The following groups are allowed to break locks of anybody:')); ?>
		<input name="lock_breakers_groups_list" type="hidden" id="lock_breakers_groups_list" value="<?php p($_['lock-breaker-groups']) ?>" style="width: 400px">
		<em>
			<br />
			<?php p($l->t('lorem ipsun .....')); ?>
		</em>
	</p>
</div>
