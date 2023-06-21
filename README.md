## Description
Aegis is a simple OAuth2 server implementation using Laravel. It features a simple way to request a token and authenticate requests so your services can
communicate with each other in a secure way.

## Installation

```bash
$ composer install
```
## Generating credentials
### Client credentials
```bash
php artisan passport:client --client
```
### Password credentials
```bash
php artisan passport:client --password
```

## Running the server locally

```bash
$ php artisan serve
```

## Requesting a token

### Client credentials

````http request
POST /oauth/token
````

Request body:

````json
{
  "grant_type": "client_credentials",
  "client_id": "some-client-id",
  "client_secret": "some-client-secret",
  "scope": "*"
}
````

Response:

````json
{
  "token_type": "Bearer",
  "expires_in": 31622400,
  "access_token": "the-access-token"
}
````

## Authorizing your requests
Authorizing your requests is as easy as performing a request to the Authorize method with the Authentication header using the access token as follows :

````http request
GET /authorize
````

If the request returns a 200, then the access token is valid, and you're authorized.


