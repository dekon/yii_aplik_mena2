<?php


echo CHtml::ajaxButton('hey'
,array('site/przesylajx') ,
 array('update' => '#zawartosc',
 'type' => 'POST',
    'beforeSend' => "function( request )
                     {
                      alert( request );
                     }",
    'success' => "function( data )
                  {
                    // handle return data
                    alert( data );
                  }"),

 );





?>

<div id="zawartosc">   </div>