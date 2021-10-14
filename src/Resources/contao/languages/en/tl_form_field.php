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
$GLOBALS['TL_LANG']['tl_form_field']['protected_legend'] = 'Access protection';

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_form_field']['protected'] = ['Protect form field', 'Show the form field to certain member groups only.'];
$GLOBALS['TL_LANG']['tl_form_field']['groups']    = ['Allowed member groups', 'These member groups will be able to see the form field.'];
$GLOBALS['TL_LANG']['tl_form_field']['guests']    = ['Show to guests only', 'Hide the form field if a member is logged in.'];
