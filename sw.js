const cacheName = 'v1'

const cacheAssets = [
    './',
    'staff.html',
    '/css/staff.css',
    '/js/staff.js',
    '/css/navFooter.css',
    '/img/StaffPhoto.png',
    '/img/logo1.png',
    '/logo_airsense.png',
    '/js/homepage.js'
]


//install event
self.addEventListener('install', e => {
    console.log("service worker installed")

    e.waitUntil(
        caches
        .open(cacheName)
        .then(cache => {
            console.log("service worker caching Files")
            cache.addAll(cacheAssets);
        })

    )
})
self.addEventListener('activate', e => {
    console.log('service worker activated')
        //removing old caches
    e.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames.map(cache => {
                    if (cache !== cacheName) {
                        console.log('service worker deleting old cache')
                        return caches.delete(cache)
                    }
                })
            )
        })
    );
})

//call fetch event
self.addEventListener('fetch', e => {
    console.log("service worker fetching")
    e.respondWith(
        fetch(e.request).catch(() => caches.match(e.request))
    )
})