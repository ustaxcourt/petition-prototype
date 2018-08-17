# Petition Prototype 

Prototyping a web-based interface for filing petitions with the court, based on [T.C. Form 5](https://ustaxcourt.gov/forms/Petition_Kit.pdf).

## Functionality

When the form is completed and submitted, the field values are encoded as JSON and written to the filesystem as a new file.

## Getting started

1. Download this repository.
1. Install [Docker](https://www.docker.com/).
1. Open the Petition Prototype directory with `cd petition-protype/`.
1. Run `docker-compose build; docker-compose up`.
1. Open `http://localhost:8000/` in a browser.

## The deployment process

This prototype uses CircleCI to deploy to AWS. Any change made to `master` will be picked up by CircleCI, which uses [the CircleCI config file](https://github.com/ustaxcourt/petition-prototype/blob/master/.circleci/config.yml) to install dependencies, test the HTML, compile SCSS, and deploy to AWS. All files are hosted in an S3 bucket, and [visible on the web](http://prototype.ustaxcourt.gov.s3-website.us-east-2.amazonaws.com/project/).

## Contributing
See [CONTRIBUTING](CONTRIBUTING.md) for additional information.

## Public domain

This project is in the worldwide [public domain](LICENSE.md). As stated in [CONTRIBUTING](CONTRIBUTING.md):

> This project is in the public domain within the United States, and copyright and related rights in the work worldwide are waived through the [CC0 1.0 Universal public domain dedication](https://creativecommons.org/publicdomain/zero/1.0/).
>
> All contributions to this project will be released under the CC0 dedication. By submitting a pull request, you are agreeing to comply with this waiver of copyright interest.
