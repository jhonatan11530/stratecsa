

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-93490262-3', 'auto');

  ga('send', 'pageview');





var checked = false;

var verifyCallback = function(response) {

  console.log(response);

  checked = true;

};

var widgetId1;

var widgetId2;

var onloadCallback = function() {

  grecaptcha.render('example1', {

    'sitekey' : '6LdrTEEUAAAAAAzLBYpOl1ImV2PWSf5tQZvHwPr4',

    'callback' : verifyCallback,

    'theme' : 'dark'

  });

  grecaptcha.render('example2', {

    'sitekey' : '6LdrTEEUAAAAAAzLBYpOl1ImV2PWSf5tQZvHwPr4',

    'callback' : verifyCallback,

    'theme' : 'dark',

    'size': 'compact'

  });

};

