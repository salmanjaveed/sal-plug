# SalPlug
 > Simple WordPress Plugin to Display 'FETCH'ed API data in a custom endpoint page. The development is initiated via composer init and loads the autoload from the main Plugin file. 

![Build Passing](https://img.shields.io/badge/build-passing-green)

## Custom EndPoint Rendered Screenshot
![Plugin Custom Endpoint Render](assets/images/shots/app.png)

## Installation

```
$ git clone git@github.com:salmanjaveed/sal-plug.git
$ composer install
```

## Page Access Custom EndPoint

*https://www.example.com**/sal-plug***

## Dependencies

![PHP v7.4+](https://img.shields.io/badge/PHP-v7.4%2B-green)
![jQuery v3.5.1](https://img.shields.io/badge/jquery-v3.5.1-green)
![Datatables.net](https://img.shields.io/badge/Datatables.net-v1.10-green)

Required to show table in front-end in custom page

## Code Compliance 

![Inpsyde Coding Style Compliant](https://img.shields.io/badge/Coding%20Style-Inpsyde-blue)

This App is Inpsyde Coding Style Compliant
![Inpsyde Coding Style Compliant](assets/images/shots/inpsyde-coding-style-passing.png)

## HTTP Cache

Used **force-cache** with the *fetch* method to cache repeated queries. Screenshot below shows disk cache data retrieval.
![HTTP Cache Screenshot](assets/images/shots/cache.png)

## Error Handling

Error Handling is taken care of so as not to hinder the smooth navigation of users when an API *fetch* call fails. The method is appended with a catch and *console.logs* the error.
