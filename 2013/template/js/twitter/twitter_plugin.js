// JavaScript Document for Twitter
/*
*	jQuery Tweet v0.1
*	written by Diego Peralta
*
*	Copyright (c) 2010 Diego Peralta (http://www.bahiastudio.net/)
*	Dual licensed under the MIT (MIT-LICENSE.txt)
*	and GPL (GPL-LICENSE.txt) licenses.
*	Built using jQuery library 
*
*	Options:
*		- before (string): HTML code before the tweet.
*		- after (string): HTML code after the tweet.
*		- tweets (numeric): number of tweets to display.
*	
*	Example: 
*	
*		<script type="text/javascript" charset="utf-8">
*   		$(document).ready(function() {
*      			$('#tweets').tweets({
*          			tweets:4,
*          			username: "diego_ar"
*      			});
*  			});
*		</script>
*
*/
(function($){
    $.fn.tweets = function(options) {
        $.ajaxSetup({ cache: true });
        var defaults = {
            tweets: 2,
            before: "<li>",
			after: "</li>"
        };
        var optionsWithDefaults = $.extend(defaults, options);
        return this.each(function() {
            var obj = $(this);
            $.getJSON('http://api.twitter.com/1/statuses/user_timeline.json?callback=?&screen_name='+optionsWithDefaults.username+'&count=' + optionsWithDefaults.tweets,
                function(data) {
                    $.each(data, function(i, tweet) {
                        if(tweet.text !== undefined) {
                            $(obj).append(optionsWithDefaults.before+tweet.text+optionsWithDefaults.after);
                        }
                    });
                }
            );
        });
    };
})(jQuery);