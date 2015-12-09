<?php
	class ArrayManager
	{
		public function arrayColumn($array, $name)
		{
			$tmp = array();
			
			foreach($array as $item)
			{
				foreach($item as $column => $value)
				{
					if($column === $name) $tmp[] = $value;
					else break;
				}
			}
			
			return count($tmp) === count($array) ? $tmp : array();
		}
	}
?>