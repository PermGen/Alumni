<?php

class UniversityAdminController extends BaseController {

	/* University Admin Menu */
	public function showUAdminDashboard() 
	{
		return View::make('university_admin/uadmin_dashboard');
	}

	public function showUAdminConversations() 
	{
		return	View::make('university_admin/uadmin_conversations');
	}

	public function showUManageAdminAlumni() 
	{
		return	View::make('university_admin/uadmin_manage_alumni');
	}

	public function showUAdminStats() 
	{
		return	View::make('university_admin/uadmin_statistics');
	}

	/*End Univer... */

}