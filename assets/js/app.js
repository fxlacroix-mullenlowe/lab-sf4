// NPM
require('jquery');
require('jquery-ui-bundle');
require('bootstrap');

// JS
require('./analyzer/analyzer');
require('./card/battle');
require('./utils/tools');
require('./utils/prototype');
const Package = require('./card/package');

// CSS
require('../css/app.scss');
require('../css/card.scss');
require('../css/battle.scss');
require('../css/analytic.scss');


var packages = new Package();
console.log(packages.generatePackage().mix());
