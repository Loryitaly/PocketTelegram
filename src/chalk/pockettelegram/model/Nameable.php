<?php

/*
 * Copyright (C) 2015  ChalkPE
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * @author ChalkPE <chalkpe@gmail.com>
 * @since 2015-10-22 21:49
 */

namespace chalk\pockettelegram\model;

interface Nameable {
    /**
     * @return string
     */
    public function getFirstName();

    /**
     * @return string|null
     */
    public function getLastName();

    /**
     * @return string|null
     */
    public function getUsername();

    /**
     * @return string
     */
    public function getFullName();
}