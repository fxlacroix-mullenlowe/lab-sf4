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
require('./component/utils/prototype');
require('./component//utils/function');
require('./component/utils/tool');
require('./component/jquery/analyzer/analyzer');
require('./component/jquery/card/battle');

const Package = require('./component/jquery/card/package');

var packages = new Package();
console.log(packages.generatePackage().mix());