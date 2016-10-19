# Facebook refresh url in sharing debugger 

Reload cached data in facebook sharing debugger

## About

  https://developers.facebook.com/docs/opengraph/using-objects
		 
  Updating Objects
 
  When an action is published, or a Like button pointing to the object clicked,
  Facebook will 'scrape' the HTML page of the object and read the meta tags.
  The object scrape also occurs when:
 
       - Every 7 days after the first scrape
 
       - The object URL is input in the Object Debugger
            http://developers.facebook.com/tools/debug
 
       - When an app triggers a scrape using an API endpoint
            This Graph API endpoint is simply a call to:
            POST /?id={object-instance-id or object-url}&scrape=true

## Install

`composer require veneliniliev/facebook-sharing-debugger`

## Usage

`use veneliniliev\FacebookSharingDebugger\FacebookSharingDebugger;`

`$response = FacebookSharingDebugger::reload('http://example.com/page.html');`

### License

This project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

