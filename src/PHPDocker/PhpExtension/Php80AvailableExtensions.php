<?php
/**
 * Copyright 2019 Luis Alberto Pabón Flores
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

namespace PHPDocker\PhpExtension;

class Php80AvailableExtensions extends BaseAvailableExtensions
{
    /**
     * Must return an array of all available mandatory extensions, indexed by display name
     * and containing an array of ['packages' => ['deb-package-1', 'deb-package-2' ...]
     *
     * @return array
     */
    protected function getMandatoryExtensionsMap(): array
    {
        return [
            'cURL'     => ['packages' => ['php8.0-curl']],
            'JSON'     => ['packages' => ['php8.0-json']],
            'MBSTRING' => ['packages' => ['php8.0-mbstring']],
            'OPCache'  => ['packages' => ['php8.0-opcache']],
            'Readline' => ['packages' => ['php8.0-readline']],
            'XML'      => ['packages' => ['php8.0-xml']],
            'Zip'      => ['packages' => ['php8.0-zip']],
        ];
    }

    /**
     * Must return an array of all available optional extensions, indexed by display name
     * and containing an array of ['packages' => ['deb-package-1', 'deb-package-2' ...]
     *
     * @return array
     */
    protected function getOptionalExtensionsMap(): array
    {
        return [
            'Memcached'           => ['packages' => ['php8.0-memcached']],
            'MySQL'               => ['packages' => ['php8.0-mysql']],
            'PostgreSQL'          => ['packages' => ['php8.0-pgsql']],
            'Redis'               => ['packages' => ['php8.0-redis']],
            'SQLite3'             => ['packages' => ['php8.0-sqlite3']],
            'XDebug'              => ['packages' => ['php8.0-xdebug']],
            'Bcmath'              => ['packages' => ['php8.0-bcmath']],
            'bz2'                 => ['packages' => ['php8.0-bz2']],
            'DBA'                 => ['packages' => ['php8.0-dba']],
            'Enchant'             => ['packages' => ['php8.0-enchant']],
            'GD'                  => ['packages' => ['php8.0-gd']],
            'Gearman'             => ['packages' => ['php8.0-gearman']],
            'GMP'                 => ['packages' => ['php8.0-gmp']],
            'igbinary'            => ['packages' => ['php8.0-igbinary']],
            'ImageMagick'         => ['packages' => ['php8.0-imagick']],
            'IMAP'                => ['packages' => ['php8.0-imap']],
            'Interbase'           => ['packages' => ['php8.0-interbase']],
            'Intl'                => ['packages' => ['php8.0-intl']],
            'LDAP'                => ['packages' => ['php8.0-ldap']],
            'MongoDB'             => ['packages' => ['php8.0-mongodb']],
            'MessagePack/msgpack' => ['packages' => ['php8.0-msgpack']],
            'ODBC'                => ['packages' => ['php8.0-odbc']],
            'PHPDBG'              => ['packages' => ['php8.0-phpdbg']],
            'PSpell'              => ['packages' => ['php8.0-pspell']],
            'raphf'               => ['packages' => ['php8.0-raphf']],
            'SNMP'                => ['packages' => ['php8.0-snmp']],
            'SOAP'                => ['packages' => ['php8.0-soap']],
            'SSH2'                => ['packages' => ['php8.0-ssh2']],
            'Sybase'              => ['packages' => ['php8.0-sybase']],
            'Tideways'            => ['packages' => ['php8.0-tideways']],
            'Tidy'                => ['packages' => ['php8.0-tidy']],
            'XMLRPC-EPI'          => ['packages' => ['php8.0-xmlrpc']],
            'XSL'                 => ['packages' => ['php8.0-xsl']],
            'Xhprof'              => ['packages' => ['php8.0-xhprof']],
            'YAML'                => ['packages' => ['php8.0-yaml']],
            'ZeroMQ'              => ['packages' => ['php8.0-zmq']],
        ];
    }
}
