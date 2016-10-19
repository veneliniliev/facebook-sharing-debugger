<?php

namespace veneliniliev\FacebookSharingDebugger;

/**
 * Something
 *
 */
class FacebookSharingDebugger {


    /*
     * https://developers.facebook.com/docs/opengraph/using-objects
     *
     * Updating Objects
     *
     * When an action is published, or a Like button pointing to the object clicked,
     * Facebook will 'scrape' the HTML page of the object and read the meta tags.
     * The object scrape also occurs when:
     *
     *      - Every 7 days after the first scrape
     *
     *      - The object URL is input in the Object Debugger
     *           http://developers.facebook.com/tools/debug
     *
     *      - When an app triggers a scrape using an API endpoint
     *           This Graph API endpoint is simply a call to:
     *
     *           POST /?id={object-instance-id or object-url}&scrape=true
     */

    public static function reload($url) {
        $graph = 'https://graph.facebook.com/';
        $post = 'id=' . urlencode($url) . '&scrape=true';

        $r = curl_init();
        curl_setopt($r, CURLOPT_URL, $graph);
        curl_setopt($r, CURLOPT_POST, 1);
        curl_setopt($r, CURLOPT_POSTFIELDS, $post);
        curl_setopt($r, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($r, CURLOPT_CONNECTTIMEOUT, 5);
        $data = curl_exec($r);
        curl_close($r);
        return json_decode($data);
    }
}

