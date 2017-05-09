<?php

/*
 * Copyright (C) 2017  Daniel Siepmann <coding@daniel-siepmann.de>
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301, USA.
 */

t3lib_div::makeInstance('Tx_Extbase_Command_HelpCommandController');
t3lib_div::makeInstance(\TYPO3\CMS\Core\Resource\Service\IndexerService::class);
// Not handled by this sniff, but StaticCallSniff, as this uses double colon.
t3lib_div::makeInstance(Tx_Extbase_Command_HelpCommandController::class);

t3lib_div::makeInstance('TYPO3\CMS\Perm\Controller\PermissionAjaxController');
