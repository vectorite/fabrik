<?php
/**
 *  JTable For Subscriptions Invoices
 *
 * @package     Joomla.Plugin
 * @subpackage  Fabrik.form.subscriptions
 * @copyright   Copyright (C) 2005 Fabrik. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

require_once JPATH_ADMINISTRATOR . '/components/com_fabrik/tables/fabtable.php';

/**
 *  JTable For Subscriptions Invoices
 *
 * @package     Joomla.Plugin
 * @subpackage  Fabrik.form.subscriptions
 * @since       3.0.7
 */

class FabrikTableInvoice extends JTable
{

	/**
	 * Constructor
	 *
	 * @param   object  $_db  Database Object
	 */

	function __construct(&$_db)
	{
		parent::__construct('#__fabrik_subs_invoices', 'id', $_db);
	}

}
