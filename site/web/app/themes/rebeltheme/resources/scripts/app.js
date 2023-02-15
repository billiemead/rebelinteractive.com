import domReady from '@roots/sage/client/dom-ready';

// Import Bootstrap
import 'bootstrap';
/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

// import then needed Font Awesome functionality
import { library, dom } from '@fortawesome/fontawesome-svg-core';

// import the Bars icon
import { faBars } from "@fortawesome/free-solid-svg-icons";

// add the imported icons to the library
library.add(faBars);

// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
dom.watch();

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
