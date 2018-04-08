/* Theme Name:iDea - Clean & Powerful Bootstrap Theme
 * Author:HtmlCoder
 * Author URI:http://www.htmlcoder.me
 * Author e-mail:htmlcoder.me@gmail.com
 * Version: 1.2.1
 * Created:October 2014
 * License URI:http://support.wrapbootstrap.com/
 * File Description: Place here your custom scripts
 */

jQuery(document).ready(function() {
    IOM.run();
    jQuery('.itsOnMe').click(function() {
        var widgetUrl = 'https://www.itson.me/widget/74-1312-old-hickory-golf-club';
        var widgetTitle = 'Old Hickory Golf Club';
        if (!IOM.open(widgetUrl, widgetTitle)) window.open(widgetUrl);
    });
});