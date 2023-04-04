const STATIC_CACHE = "static";
const APP_SHELL = [
    "/",
    "./index.php",
    "./main.js",
    "./img/512.png",
    "./img/plane.jpg",
    "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css",
    "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"

];
self.addEventListener("install", (e) => {
    console.log("entrando a instalar");
    const cacheStatic = caches
        .open(STATIC_CACHE)
        .then((cache) => cache.addAll(APP_SHELL));

        e.waitUntil(cacheStatic);
});

//En el evento fetch se envian los archivos a la pagina web o paginas.
self.addEventListener("fetch", (e) => {
    console.log("fectch! ", e.request);

    e.respondWith(
        caches
        .match(e.request)
        .then(res => res || fetch(e.request))
        .catch(console.log)
    );
});