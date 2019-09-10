<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

namespace phpbb\db\migration\data\v330;

class add_display_unapproved_posts_config extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('config.add', array('display_unapproved_posts', 1)),
		);
	}
}
