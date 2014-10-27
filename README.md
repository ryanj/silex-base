# A basic Silex server example
*powered by PHP and Silex*

[![Build Status](http://img.shields.io/travis/ryanj/silex-base.svg)](https://travis-ci.org/ryanj/silex-base) [![Deploy](https://img.shields.io/badge/Launch_on-OpenShift-brightgreen.svg)](https://openshift.redhat.com/app/console/application_type/custom?cartridges%5B%5D=php-5&initial_git_url=https%3A%2F%2Fgithub.com%2Fryanj%2Fsilex-base.git&name=silex)

To host this project locally ([PHP-5.4 or better required](http://us3.php.net/manual/en/features.commandline.webserver.php)), run:

    php -S localhost:8080 -t static app.php

To spin up a new copy of this application on an OpenShift-powered cloud, use the [`rhc` command line tool](http://rubygems.org/gems/rhc):

    rhc app create silex php-5.4 --from-code=https://github.com/ryanj/silex-base.git
    
Or [link to a web-based clone+deploy](https://openshift.redhat.com/app/console/application_type/custom?cartridges%5B%5D=php-5.4&initial_git_url=https%3A%2F%2Fgithub.com%2Fryanj%2Fsilex-base.git) on [OpenShift Online](http://OpenShift.com) or on [your own OpenShift cloud](http://openshift.github.io): 

    https://openshift.redhat.com/app/console/application_type/custom?cartridges%5B%5D=php-5.4&initial_git_url=https%3A%2F%2Fgithub.com%2Fryanj%2Fsilex-base.git

## License
This code is dedicated to the public domain to the maximum extent permitted by applicable law, pursuant to CC0 (http://creativecommons.org/publicdomain/zero/1.0/)
