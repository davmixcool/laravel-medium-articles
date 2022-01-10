# Laravel Medium Articles

Laravel Medium Articles is a laravel package that allows website owners to easily embed Medium.com articles on their site. Embed articles as grid post formats or as scrolling galleries. This package is powered by [Mediumable](https://mediumable.io). 


[![GitHub license](https://img.shields.io/github/license/davmixcool/laravel-medium-articles.svg)](https://github.com/davmixcool/laravel-medium-articles/blob/master/LICENSE)  [![GitHub issues](https://img.shields.io/github/issues/davmixcool/laravel-medium-articles.svg)](https://github.com/davmixcool/laravel-medium-articles/issues)


## Features

* Grid Post
* Carousel Post
* Lead Capture
* Customization

## Requirements

- PHP 5.4 and above

## Steps:

* [Install](#install)
* [Configuration](#configuration)
* [Usage](#usage)
* [Example](#example)
* [Maintainers](#maintainers)
* [License](#license)


### Install

**Composer**

Run the following to include this package via Composer

```shell
composer require davmixcool/laravel-medium-articles
```

#### Laravel 5.5+ uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.


Once download is complete, the next thing you have to do is include the service provider within `config/app.php`.

```php
'providers' => [
        Davmixcool\Medium\MediumServiceProvider::class,
];
```
Then run `php artisan vendor:publish --provider="Davmixcool\Medium\MediumServiceProvider"` to get the config of Laravel Medium Articles.


### Configuration

Setup default medium widget in `medium.php` config. (Optional but recommended)

#### Render options:

Option | Description
--------- | -------
`renderTo` | By Default the widget is rendered to `laravel-medium-articles`. But you can specify your own custom element ID where you want to render the widget.
`id` | A random unique ID to identify the widget. This is very useful when you need to include multiple widgets on one page.
`username` | Your medium username.


#### Layout customization options:

Customize the appearance of your widget.

Option | Description
--------- | -------
`layout.type` | The way you want your articles to be displayed.
`layout.limit` | The number of articles to show.
`layout.column` | Define how many columns you want.
`layout.size` | By default image size are set to big but you can choose a small picture preview size if you want to show article images at the left side. Options are: `big`, `small` and `off`.
`layout.ratio` | Define an aspect ratio for your article images. Default is `landscape` and options are: `landscape`, `original`, `square`.
`layout.pagination` | By default pagination is `off` but you can enable pagination to display a load more button. Options are: `on` and `off`.
`layout.pagination_text` | The text on the pagination button. Default is `See More Articles`. You can specify any text you want.


#### Elements customization options:

Customize what your readers see.

Option | Description
--------- | -------
`elements.title` | By default article title is `on` but you can disable it. Options are: `on` and `off`.
`elements.description` | By default article description is `on` but you can disable it. Options are: `on` and `off`.
`elements.author` | By default article author is `on` but you can disable it. Options are: `on` and `off`.
`elements.claps` | By default article claps is `off` but you can enable it. Options are: `on` and `off`.
`elements.fans` | By default article fans is `off` but you can enable it. Options are: `on` and `off`.
`elements.read_duration` | By default article read duration is `off` but you can enable it. Options are: `on` and `off`.
`elements.pubDate` |  By default article publication date is `on` but you can disable it. Options are: `on` and `off`.


#### Target customization options:

Choose the action you want to execute when a reader clicks on your article.

Option | Description
--------- | -------
`target.value` | The action you want to execute when a reader clicks on your article. Default is `external` which will redirect your reader to the article. Options are: `external` and `capture` which will open a modal to collect your reader email and name before they proceed to your post.
`target.capture.style` | The popup style to show. Default is `modal-default` which opens a normal modal. Options are: `modal-default` and `modal-full` which opens a modal to cover the entire window.
`target.capture.email` | By default capture email is `on` but you can disable it to not collect reader's email. Options are: `on` and `off`.
`target.capture.name` | By default capture name is `off` but you can enable it to collect reader's name. Options are: `on` and `off`.
`target.capture.message` | An info message to show to the reader on the modal before they proceed. Default is `Drop your details to proceed`
`target.capture.button_text` | The text on the capture submit button. Default is `Proceed to Post`
`target.capture.webhook_status` | By default capture webhook status is `false` but you can enable it to submit collected details to webhook url. Options are: `true` and `false`.
`target.capture.webhook_url` | The webhook url to submit collected details to. It can be Zapier, IFTTT or a Custom webhook.




### Usage

Once configuration is complete you can then add the below code where you want your articles to show;

```php
@include('medium::widget')
```

The above will use the predefined configurations to prefill the generated widget. However, if you choose to define certain options on the fly or you choose to include multiple widgets on one page then you can use the code below.


```php
@include('medium::widget', [
    'username' => 'iamdavidoti',
    'id'   => 27623742, //This id should be unique for each widget you include on a page.
])
```

You can alawys refer to the customization table to supply the customization parameters that you need to tweak.



### Example

```html
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
    	<div>
    		@include('medium::widget', [
			    'username' => 'iamdavidoti',
			    'id'   => 27623742,
			])
    	</div>
    </body>
    </html>
```


### Maintainers

This package is maintained by [David Oti](http://github.com/davmixcool) and you!


### License

This package is licensed under the [MIT license](https://github.com/davmixcool/laravel-medium-articles/blob/master/LICENSE).

### Reference

This package is powered by [Mediumable](https://mediumable.io).
