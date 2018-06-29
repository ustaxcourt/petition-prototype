#!/bin/bash
npm install -g npm@latest
npm install
sass assets/scss/default.scss assets/css/compiled.css
nginx -g 'daemon off;'
