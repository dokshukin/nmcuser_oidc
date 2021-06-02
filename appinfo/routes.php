<?php

declare(strict_types=1);
/**
 * @copyright Copyright (c) 2020, Roeland Jago Douma <roeland@famdouma.nl>
 *
 * @author Bernd Rederlechner <bernd.rederlechner@t-systems.com>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

return [
	'routes' => [
		['name' => 'NmcUserApi#preflighted_cors', 'url' => '/api/0.1/{path}','verb' => 'OPTIONS', 'requirements' => ['path' => '.+']],
		['name' => 'NmcUserApi#index', 'url' => '/api/1.0/nmcusers/{providername}', 'verb' => 'GET'],
		['name' => 'NmcUserApi#show', 'url' => '/api/1.0/nmcusers/{providername}/{id}', 'verb' => 'GET'],
		['name' => 'NmcUserApi#create', 'url' => '/api/1.0/nmcusers/{providername}', 'verb' => 'POST'],
		['name' => 'NmcUserApi#update', 'url' => '/api/1.0/nmcusers/{providername}/{id}', 'verb' => 'PUT'],
		['name' => 'NmcUserApi#destroy', 'url' => '/api/1.0/nmcusers/{providername}/{id}', 'verb' => 'DELETE'],
		['name' => 'NmcUserApi#token', 'url' => '/api/1.0/token/{providername}/{id}', 'verb' => 'GET'],
	]
];
