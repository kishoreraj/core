/**
 * Copyright (c) 2020, ownCloud GmbH
 *
 * @author Thomas Müller <thomas.mueller@tmit.eu>
 *
 * This file is licensed under the Affero General Public License version 3
 * or later.
 *
 * See the COPYING-README file.
 *
 */

$(document).ready(function(){
	var lockBreakersGroupsList = $('#lock_breakers_groups_list');
	OC.Settings.setupGroupsSelect(lockBreakersGroupsList);
	lockBreakersGroupsList.change(function(ev) {
		OC.AppConfig.setValue('core', 'lock-breaker-groups', JSON.stringify(ev.val || []));
	});
});
