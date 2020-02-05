# Package Name
<p align="center">
    <a href="https://circleci.com/gh/elevation-energy/:package_name">
        <img src="https://circleci.com/gh/elevation-energy/:package_name.svg?style=svg&circle-token=1c12bb1825205d3d843037cd2ae47e3061b055e5" alt="Build Status" />
    </a>
    <a href="https://codeclimate.com/repos/this-project-id/maintainability">
        <img src="https://api.codeclimate.com/v1/badges/ada4e05936f6ca61f8c0/maintainability" />
    </a>
    <a href="https://codeclimate.com/repos/this-project-id/test_coverage">
        <img src="https://api.codeclimate.com/v1/badges/c74f4414e95171cedda3/test_coverage" />
    </a>
</p>

**Note:** Replace ```:author_name``` ```:author_username``` ```:author_email``` ```:package_name``` ```:package_description``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line.

This is where your description should go. Try and limit it to a paragraph or two. Consider adding a small example.

## Installation
Add the git repo url to composer.json and require the package
```
    "repositories": [
        {
            "url": "https://github.com/elevation-energy/:package_name",
            "type": "git"
        }
    ],
    "require": {
        "elevation-energy/:package_name": "dev-master"
    }
```

## Purposes of This Repository
How does this package integrate with our other packages on a higher level than code? Why does it exist?

## Usage
``` php
$skeleton = new Elevation\Skeleton();
echo $skeleton->echoPhrase('Hello, Elevation!');
```

### Testing
``` bash
composer test
```

### Changelog
Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits
- [:author_name](https://github.com/:author_username)
- [All Contributors](../../contributors)

