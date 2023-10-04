## Crossword project
- Mini [Crosswords](https://www.nytimes.com/crosswords/game/mini) are published daily.
- Build a production ready utility that, given a date, generates an output similar to the following one: `{"answer":"SNOB","clue":"Haughty person","length":4,"date":"2023-07-25","direction":"across"}`.
- Automate deployments so that each push to default branch will trigger a deployment to production environment.
- Get all the historical crosswords data.
- Run the utility daily in an automated fashion.

## Utility drivers
- Find an API which can provide answers for crosswords.
- Create a handler for data logic.
- Create a builder for the given object structure.

## Concerns
- Inconsistent availability of data at any given date for the presumably only available [API](https://www.nytimes.com/svc/crosswords/v6/puzzle/mini.json). Fragment can contain a date for historical data: `2023/10/03`.

## Instructions for running the project

- `npm install`
- `composer install`
- `php artisan serve` -> visit provided local url at route `/crossword`

## TODO list:

- automate deployment
- automate running utility daily 
- handler for data logic
- resolve historical data access
- code improvements by leveraging Laravel's structure

