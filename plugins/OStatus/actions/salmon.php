<?php
/*
 * StatusNet - the distributed open-source microblogging tool
 * Copyright (C) 2010, StatusNet, Inc.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * @package OStatusPlugin
 * @author James Walker <james@status.net>
 */

if (!defined('STATUSNET') && !defined('LACONICA')) { exit(1); }

class SalmonAction extends Action
{

    function handle()
    {
        parent::handle();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->handlePost();
        }
    }


    function handlePost()
    {
        $user_id = $this->arg('id');
        common_log(LOG_DEBUG, 'Salmon: incoming post for user: '. $user_id);

        $xml = file_get_contents('php://input');

        // TODO : Insert new $xml -> notice code

    }
}