# Chatgpt Laravel


This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
 composer require subashrijal5/chatgpt-laravel
```
In config/app.php add provider
```
 Subashrijal5\ChatgptLaravel\ChatgptLaravelServiceProvider::class
```

## Usage
Using Facade:
```
use Subashrijal5\ChatgptLaravel\Facades\ChatgptLaravel;

$response =  ChatgptLaravel::studyNotes('Your Topic');

```

available methods: 

```
use Subashrijal5\ChatgptLaravel\Facades\ChatgptLaravel;

ChatgptLaravel::askQuestion('Your question');
ChatgptLaravel::correctGrammer('Your Topic');
ChatgptLaravel::essayWriter('Your Topic');
ChatgptLaravel::essayOutline('Your Topic');
ChatgptLaravel::storyTeller('Your Topic', 'Your Genre');
ChatgptLaravel::storyTeller('Your Topic');
ChatgptLaravel::solveMathematicalProblem('Your Problem');

```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email subashrijal5@gmail.com instead of using the issue tracker.

## Credits

- [Subash Rijal][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/subashrijal5/chatgpt-laravel.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/subashrijal5/chatgpt-laravel.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/subashrijal5/chatgpt-laravel/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/subashrijal5/chatgpt-laravel
[link-downloads]: https://packagist.org/packages/subashrijal5/chatgpt-laravel
[link-travis]: https://travis-ci.org/subashrijal5/chatgpt-laravel
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/subashrijal5
[link-contributors]: ../../contributors
