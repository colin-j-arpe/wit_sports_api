# WIT Sports Coding Test

## Starting the local server
1. Clone the repo and `cd` into it
2. Run `composer install`
3. Run `bin/cake server`

## Setting up Postman
1. Open a new HTTP request in Postman
2. Under "Headers", deactivate the default `Accept` header
3. Add a new header with the key `Accept` and the value `application/json`
4. Base URL for all requests is `http://localhost:8765`

## Endpoints
- `GET /games`
  - returns a list of all games with opponent and score data
- `GET /games/[week number]`
  - returns data for a single game
  - week number is a number between 1 and 18
  - week 6 is the bye week and will throw an exception
- `GET /players`
  - returns a list of players with names and positions
  - key for each player is their player ID, e.g. `brock-purdy`
- `GET /players/[player ID]`
  - returns data for a single player
- `GET /players/viewGame/[week number]/[player ID]`
  - returns the player data plus single game stats
