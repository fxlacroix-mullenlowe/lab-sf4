// CSS
require('../css/app.scss');
require('../css/card.scss');
require('../css/battle.scss');
require('../css/analytic.scss');

// NPM
require('jquery');
require('jquery-ui-bundle');
require('bootstrap');

// JS
require('./utils/prototype');
require('./utils/function');
require('./utils/tool');
require('./jquery/analyzer/analyzer');
require('./jquery/card/battle');

const Package = require('./jquery/card/package');

var packages = new Package();
console.log(packages.generatePackage().mix());
