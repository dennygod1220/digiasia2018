<script src="//cdn.doublemax.net/js/rtid.js"></script>
<script src="//dmp.eland-tech.com/dmpreceiver/eland_tracker.js"></script>
<script async src="https://cdn.doublemax.net/dmp/cft/tracker.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128573860-1"></script>

<script>
    clickforce_rtid("8685002");
    ElandTracker.Track({
        'source': 'CAP8685',
        'trackType': 'view',
        'trackSubfolderDepth': 3,
        'targetType': 'pageView'
    });

    clickforce_rtid("8685001");
    ElandTracker.Track({
        'source': 'CAP8685',
        'trackType': 'view',
        'trackSubfolderDepth': 3,
        'targetType': 'usual'
    });
    window.cft = window.cft || function () {
        (cft.q = cft.q || []).push([].slice.call(arguments))
    };
    cft('setSiteId', 'CF-181100010363');
    cft('setEnableCookie');
    cft('setViewPercentage');
    cft('setTPCookie');

    //GA
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-128573860-1');
</script>