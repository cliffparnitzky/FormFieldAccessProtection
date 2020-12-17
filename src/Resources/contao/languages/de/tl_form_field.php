<?php

declare(strict_types=1);

/*
 * This file is part of form-field-access-protection-bundle.
 *
 * (c) 2020 Dr. Philip von der Borch <git@vonderborch.com>
 *
 * @license LGPL-3.0-or-later
 */

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_form_field']['protected_legend'] = 'Zugriffsschutz';
 
/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_form_field']['protected'] = ['Formularfeld schützen', 'Das Formularfeld nur bestimmten Mitgliedergruppen anzeigen.'];
$GLOBALS['TL_LANG']['tl_form_field']['groups']    = ['Erlaubte Mitgliedergruppen', 'Diese Mitgliedergruppen können das Formularfeld sehen.'];
$GLOBALS['TL_LANG']['tl_form_field']['guests']    = ['Nur Gästen anzeigen', 'Das Formularfeld verstecken sobald ein Mitglied angemeldet ist.'];
