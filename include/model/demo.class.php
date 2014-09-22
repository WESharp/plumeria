<?php
	if ( !class_exists( 'demo' ) ) :
	class Demo{
		/**
		 * 查询数据
		 * 
		 * @return array
		 */
		public function find_all() {
			$sql = 'select id, name from demo';
			$mysql = new MysqlAccess();
			return $mysql->getData($sql);
		}
	}
	endif;
?>