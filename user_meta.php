<?php
add_filter('the_content','user_meta');



function user_meta($content)
{
    if(1==get_the_ID())
    {
        update_user_meta(1,'smaranika','position','Fullstack Intern')
    }
    return $content;

}


?>