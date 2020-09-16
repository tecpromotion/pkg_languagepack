<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_languagepack
 *
 * @copyright   Copyright (C) 2020 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/** @var  $this  LanguagepackViewLanguages */

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;
?>
<form action="index.php?option=com_languagepack&view=languages" method="post" id="adminForm" name="adminForm">
	<table class="table table-striped table-hover">
		<thead>
            <tr>
                <th width="2%">
                    <?php echo HTMLHelper::_('grid.checkall'); ?>
                </th>
                <th width="85%">
                    <?php echo Text::_('COM_LANGUAGEPACK_LANGUAGE_NAME') ;?>
                </th>
                <th width="5%">
                    <?php echo Text::_('COM_LANGUAGEPACK_APPLICATION_ID'); ?>
                </th>
                <th width="8%">
		            <?php echo Text::_('COM_LANGUAGEPACK_LANGUAGE_CODE'); ?>
                </th>
            </tr>
		</thead>
		<tfoot>
            <tr>
                <td colspan="4">
                    <?php echo $this->pagination->getListFooter(); ?>
                </td>
            </tr>
		</tfoot>
		<tbody>
		<?php if (!empty($this->languages)) : ?>
			<?php foreach ($this->languages as $i => $row) : ?>
				<tr>
					<td>
						<?php echo HTMLHelper::_('grid.id', $i, $row->id); ?>
					</td>
					<td>
						<?php echo $row->name; ?>
					</td>
					<td align="center">
						<?php echo Text::_($row->application_name); ?>
					</td>
					<td align="center">
						<?php echo $row->lang_code; ?>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php endif; ?>
		</tbody>
	</table>
</form>
