<?php

/**
 * Hide extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0-only
 */

namespace alfredoramos\hide\migrations\v10x;

use phpbb\db\migration\container_aware_migration;
use alfredoramos\hide\includes\helper as hide_helper;

class m1_hide_data extends container_aware_migration
{

	/**
	 * Install BBCode in database.
	 *
	 * @return array
	 */
	public function update_data()
	{
		return [
			[
				'custom',
				[
					[
						new hide_helper(
							$this->container->get('dbal.conn'),
							$this->container->get('filesystem'),
							$this->container->getParameter('core.root_path'),
							$this->container->getParameter('core.php_ext')
						),
						'install_bbcode'
					]
				]
			]
		];
	}

	/**
	 * Uninstall BBCode from database.
	 *
	 * @return array
	 */
	public function revert_data()
	{
		return [
			[
				'custom',
				[
					[
						new hide_helper(
							$this->container->get('dbal.conn'),
							$this->container->get('filesystem'),
							$this->container->getParameter('core.root_path'),
							$this->container->getParameter('core.php_ext')
						),
						'uninstall_bbcode'
					]
				]
			]
		];
	}

}
