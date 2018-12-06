# Real-time facades example

Simplified implementation of real-time facades extracted from [Laravel framework](https://laravel.com).

## Check it out

Clone this repository:
```
git clone https://github.com/nikazooz/real-time-facades-example
```

Run `composer dump-autoload` so the classes from `src/` directory and functions from `functions.php` file are loaded.

Run the example with `php index.php`. You should see "It works!" message printed in the terminal.

## What's going on

As you can see, in the `index.php` we're importing `App\Main` class with `Facades` prefix in the namespace, and calling `run()` method on a class statically even though it is not a static method.

Another thing you can see in the `index.php` is setting "Facades\\" as namespace prefix for `FacadeLoader` (in Laravel it is called `Illuminate\Foundation\AliasLoader`), and call register method on an instance of that class.

What this does is register `load` method from `FacadeLoader` as a first way to resolve unresolved classes. We check if the fully qualified class name starts with the prefix we've set. If it doesn't another loader will be used or an exception is thrown if the class is not found. If the requested class starts with the prefix, we require the facade file. If the file doesn't exist yet, we use the stub and replace the placeholder string with appropriate values and store the edited content to a cached facade file so we can require it.

It this example there is only a minimal implementation of facades that, unlike Laravel's which resolves instance from the container using facade accessor string, just creates a new instance of the class we're using as a real-time facade and calls the method we tried using statically on it.


