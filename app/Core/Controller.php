<?php

	namespace App\Core;

	use App\Core\Request;
	
	Class Controller
	{
		protected function post($index)
		{
			return (new Request)->post($index);
		} 

		protected function get($index)
		{
			return (new Request)->get($index);
		} 

		protected function get_all()
		{
			return (new Request)->get_all();
		} 

		protected function post_all()
		{
			return (new Request)->post_all();
		} 

		protected function all()
		{
			return (new Request)->all();
		}

		protected function sess($sess)
		{
			return (new Request)->sess($sess);
		}

		protected function set_session($sess)
		{
			return (new Request)->set_session($sess);
		}

		protected function unset_session($sess)
		{
			return (new Request)->unset_session($sess);
		}

		protected function destroy_session()
		{
			return (new Request)->destroy_session();
		}
	}