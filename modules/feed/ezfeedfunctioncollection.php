<?php


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
