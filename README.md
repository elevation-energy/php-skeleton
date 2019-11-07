# Very short description of the package
<p align="center">
    <a href="https://circleci.com/gh/elevation-energy/:package_name">
        <img src="https://circleci.com/gh/elevation-energy/:package_name.svg?style=svg&circle-token=1c12bb1825205d3d843037cd2ae47e3061b055e5" alt="Build Status" />
    </a>
    <a href="https://codeclimate.com/repos/5d8116a4a9d6045c2f00fef6/maintainability"><img src="https://api.codeclimate.com/v1/badges/ada4e05936f6ca61f8c0/maintainability" /></a>
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

