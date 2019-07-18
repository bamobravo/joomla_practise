<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.BAMOBRAVO
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

JText::script('TPL_BAMOBRAVO_ALTOPEN');
JText::script('TPL_BAMOBRAVO_ALTCLOSE');
JText::script('TPL_BAMOBRAVO_TEXTRIGHTOPEN');
JText::script('TPL_BAMOBRAVO_TEXTRIGHTCLOSE');
JText::script('TPL_BAMOBRAVO_FONTSIZE');
JText::script('TPL_BAMOBRAVO_BIGGER');
JText::script('TPL_BAMOBRAVO_RESET');
JText::script('TPL_BAMOBRAVO_SMALLER');
JText::script('TPL_BAMOBRAVO_INCREASE_SIZE');
JText::script('TPL_BAMOBRAVO_REVERT_STYLES_TO_DEFAULT');
JText::script('TPL_BAMOBRAVO_DECREASE_SIZE');
JText::script('TPL_BAMOBRAVO_OPENMENU');
JText::script('TPL_BAMOBRAVO_CLOSEMENU');

$this->addScriptDeclaration("
	var big        = '" . (int) $this->params->get('wrapperLarge') . "%';
	var small      = '" . (int) $this->params->get('wrapperSmall') . "%';
	var bildauf    = '" . $this->baseurl . '/templates/' . $this->template . "/images/plus.png';
	var bildzu     = '" . $this->baseurl . '/templates/' . $this->template . "/images/minus.png';
	var rightopen  = '" . JText::_('TPL_BAMOBRAVO_TEXTRIGHTOPEN', true) . "';
	var rightclose = '" . JText::_('TPL_BAMOBRAVO_TEXTRIGHTCLOSE', true) . "';
	var altopen    = '" . JText::_('TPL_BAMOBRAVO_ALTOPEN', true) . "';
	var altclose   = '" . JText::_('TPL_BAMOBRAVO_ALTCLOSE', true) . "';
");
