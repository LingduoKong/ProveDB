<?php
function get_web_page( $url )
{
    $options = array(
        CURLOPT_RETURNTRANSFER => true,     // return web page
        CURLOPT_HEADER         => false,    // don't return headers
        CURLOPT_FOLLOWLOCATION => true,     // follow redirects
        CURLOPT_ENCODING       => "",       // handle compressed
        CURLOPT_USERAGENT      => "spider", // who am i
        CURLOPT_AUTOREFERER    => true,     // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
        CURLOPT_TIMEOUT        => 120,      // timeout on response
        CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
        CURLOPT_SSL_VERIFYPEER => 0,
    );

    $ch = curl_init( $url );
    curl_setopt_array( $ch, $options );
    $content = curl_exec( $ch );
    $err     = curl_errno( $ch );
    $errmsg  = curl_error( $ch );
    $header  = curl_getinfo( $ch );
    curl_close( $ch );

    $header['errno']   = $err;
    $header['errmsg']  = $errmsg;
    $header['content'] = $content;
    return $header;
}
?>

<?php
    $url = 'https://raw.githubusercontent.com/SciCrunch/CINERGI-PROV/master/client/q1_client.py';
    $header1 = get_web_page( $url );
    $page1=$header1['content'];   
    $url = 'https://raw.githubusercontent.com/SciCrunch/CINERGI-PROV/master/client/q2_client.py';
    $header2 = get_web_page( $url ); 
    $url = 'https://raw.githubusercontent.com/SciCrunch/CINERGI-PROV/master/client/q3_client.py';
    $header3 = get_web_page( $url );
    $url = 'https://raw.githubusercontent.com/SciCrunch/CINERGI-PROV/master/client/q5_client.py';
    $header4 = get_web_page( $url );
    $url = 'https://raw.githubusercontent.com/SciCrunch/CINERGI-PROV/master/client/q7_client.py';
    $header5 = get_web_page( $url );
    $url = 'https://raw.githubusercontent.com/SciCrunch/CINERGI-PROV/master/client/post_client.py';
    $header6 = get_web_page( $url );
?> 