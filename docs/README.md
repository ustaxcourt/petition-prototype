# Documentation

## Requirements

The application uses [the U.S. Web Design System](https://designsystem.digital.gov/) (USWDS), and uses some class names that are specific to that CSS framework (prefixed `usa-`).

## Build process

This uses CircleCI and, per [the CircleCI config file](https://github.com/ustaxcourt/petition-prototype/blob/master/.circleci/config.yml), relies on a handful of tools to assemble and test test the site.

At the moment, the only test is [an HTML5 validator](https://github.com/svenkreiss/html5validator).

## Deployment

_The site is not deployed anywhere right now._ The build process has no destination. There is [a staging site](https://ustaxcourt.github.io/petition-prototype/), but that's based on [GitHub Pages](https://pages.github.com/) and, as such, it is deployed directly from the repository, i.e. not via CircleCI. Because USWDS is retrieved via npm at build time, this means that the build site lacks those assets.

