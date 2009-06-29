<?php
// Created on: <29-Jun-2009 18:04 damien pobel>
//
// SOFTWARE NAME: eZ Feed Parse
// SOFTWARE RELEASE: 0.1
// COPYRIGHT NOTICE: Copyright (C) 2009 Damien POBEL
// SOFTWARE LICENSE: GNU General Public License v2.0
// NOTICE: >
//   This program is free software; you can redistribute it and/or
//   modify it under the terms of version 2.0  of the GNU General
//   Public License as published by the Free Software Foundation.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of version 2.0 of the GNU General
//   Public License along with this program; if not, write to the Free
//   Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
//   MA 02110-1301, USA.

class eZFeedFunctionCollection
{

    function parseFeed( $feedURL )
    {
        try
        {
            $feed = ezcFeed::parse( $feedURL );
        }
        catch( Exception $e )
        {
            eZDebug::writeError( 'Unabled to parse feed : ' . $e->getMessage(), __METHOD__ );
            return array( 'error' => array( 'error_type' => 'kernel',
                                            'error_code' => eZError::KERNEL_NOT_AVAILABLE ) );
        }
        return array( 'result' => new eZTemplateObject( $feed ) );
    }


}


?>
