const express = require('express')

const UserController = require('./controllers/UserController')

const routes = express.Router()

// Users
routes.get('/users', UserController.index)



module.exports = routes