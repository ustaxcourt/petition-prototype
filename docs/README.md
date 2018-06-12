# Documentation

## Requirements

The application uses [the U.S. Web Design System](https://designsystem.digital.gov/) (USWDS), and uses some class names that are specific to that CSS framework (prefixed `usa-`).

## Modifying

The site is a single HTML page, found at `index.html`, with images in `assets/images/` and SCSS in `assets/scss/custom.scss`.

## Build process

This uses CircleCI and, per [the CircleCI config file](https://github.com/ustaxcourt/petition-prototype/blob/master/.circleci/config.yml), relies on a handful of tools to assemble and test the site. This build process is contained entirely within Docker, and can be invoked locally by [installing the CircleCI 2.0 Local CLI](https://circleci.com/docs/2.0/local-cli/) and running `circleci build`.

Alternately, the build process can be kicked off by pushing a change to [the GitHub repository](https://github.com/ustaxcourt/petition-prototype).

### Tests
Right now, the only test is [an HTML5 validator](https://github.com/svenkreiss/html5validator). Although it can optionally validate CSS, it is only configured to validate HTML.

## Deployment

_The site is not deployed anywhere right now._ The build process has no destination. There is [a staging site](https://ustaxcourt.github.io/petition-prototype/), but that's based on [GitHub Pages](https://pages.github.com/) and, as such, it is deployed directly from the repository, i.e. not via CircleCI. Because USWDS is retrieved via npm at build time, this means that the build site lacks those assets.
