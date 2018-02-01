// imports polyfill.js which helps with rendering cache methods correctly accross browsers
importScripts('./js/polyfill.js')

// initialises the cache key
var cacheName = 'pdfy-1'

// an array of files to be cached(the app shell)
var filesToCache = [
  'index.html',
  './css/bootstrap.min.css',
  './css/font-awesome.min.css',
  './css/custom.css',
  './js/jquery-3.2.1.min.js',
  './js/bootstrap.min.js',
  './js/pdfy.js',
  'pages.js',
  'cm.html',
  'privacypolicy.html',
  'contact.html',
  'footer.html',
  './images/bav.jpeg',
  './images/exam-land.jpeg',
  './images/admin-land.jpeg',
  './images/background.jpg'
]

// install event that installs all the files needed by the app shell
self.addEventListener('install', function (e) {
  console.log('[serviceWorker] install')
  e.waitUntil(
    caches.open(cacheName).then(function (cache) {
      console.log('[serviceWorker] caching app shell')
      return cache.addAll(filesToCache)
    })
  )
})

// activate event that purges any outdated file making sure updated files are served
self.addEventListener('activate', function (event) {
  event.waitUntil(
    caches.keys().then(function (cacheNames) {
      return Promise.all(
        cacheNames.filter(function (cacheName) {
          // Return true if you want to remove this cache,
          // but remember that caches are shared across
          // the whole origin
        }).map(function (cacheName) {
          return caches.delete(cacheName)
        })
      )
    })
  )
})

// fetch event handler that tries to get requested file from the cache first then the network if it doesn't find it in the cache
self.addEventListener('fetch', function (e) {
  console.log('[serviceWorker] fetch', e.request.url)
  e.respondWith(
    caches.match(e.request).then(function (response) {
      return response || fetch(e.request)
    })
  )
})

// generic fallback
self.addEventListener('fetch', function (event) {
  event.respondWith(
    // Try the cache
    caches.match(event.request).then(function (response) {
      // Fall back to network
      return response || fetch(event.request)
    }).catch(function () {
      // If both fail, show a generic fallback:
      console.log('offline oo');
     // return caches.match('/offline.html')
    // However, in reality you'd have many different
    // fallbacks, depending on URL & headers.
    // Eg, a fallback silhouette image for avatars.
    })
  )
})
