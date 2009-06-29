<?php

$FunctionList = array();
$FunctionList['parse'] = array( 'name' => 'parse',
                                'operation_types' => array( 'read' ),
                                'call_method' => array( 'class' => 'eZFeedFunctionCollection',
                                                        'method' => 'parseFeed' ),
                                'parameter_type' => 'standard',
                                'parameters' => array( array( 'name' => 'rss_url',
                                                              'type' => 'string',
                                                              'required' => true,
                                                              'default' => '' ) ) );

?>
