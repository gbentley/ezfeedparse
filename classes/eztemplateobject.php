<?php

class eZTemplateObject
{
    private $object;


    function __construct( $object )
    {
        $this->object = $object;
    }

    function hasAttribute( $name )
    {
        return isset( $this->object->$name );
    }

    function attribute( $name )
    {
        $val = $this->object->$name;
        if ( is_object( $val ) )
        {
            return new eZTemplateObject( $val );
        }
        else if ( is_array( $val ) )
        {
            // transform all elements of the array
            // into eZTemplateObject to be able to use in template
            $func = create_function( '$element',
                                     'if ( is_object( $element ) )
                                      {
                                          return new eZTemplateObject( $element );
                                      }
                                      return $element;' );
            return array_map( $func, $val );
        }
        return $val;
    }
}


?>
