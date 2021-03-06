<?php
/** @var \Slim\App $this */


### REST API
// list all contacts
$this->get('/contacts', \App\Contact\ContactController::class . ":getAll");
// get count all contacts
$this->get('/contacts/count', \App\Contact\ContactController::class . ":count");

// insert contact
$this->map(['POST'], '/contact', \App\Contact\ContactController::class . ":insertAndRetrieve");
// get contact by id
$this->get('/contact/{id:[A-Z0-9a-z]+}', \App\Contact\ContactController::class . ":get");
// update contact by id
$this->put('/contact/{id:[A-Z0-9a-z]+}', \App\Contact\ContactController::class . ":update");
// delete contact by id
$this->delete('/contact/{id:[A-Z0-9a-z]+}', \App\Contact\ContactController::class . ":delete");