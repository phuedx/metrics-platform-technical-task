# Metrics Platform Technical Task

A/B testing is an integral part of the process of developing features for end users. Say a change has been made to a
menu, moving it out of the menu and into its own button on the page. How could we know that this change resulted in the
menu item being clicked on more or less often? To this end, we would like to use an experiment framework that will allow
us to trial this feature on a small subset of all user traffic.

**Your task is to implement a basic experiment framework that will permit a software engineer (herein "the
experimenter”) to carry out such an experiment.**

## Setup

This repository contains a basic Slim 4 app. The app has one endpoint, `GET /`, which is defined in
[`public/index.php`](public/index.php#L25). You will be implementing the basic experiment framework within this app.

```bash
cd /path/to/metrics-platform-technical-task
composer install
composer serve # or php -S localhost:8888 public/index.php
```

and navigate to http://localhost:8888 in your web browser.

## Resources

1. [Slim 4 Documentation](https://www.slimframework.com/docs/v4/)
