const usersData = require("../services/users");

module.exports = {
  async index(req, res, next) {
    try {
      res.json(await usersData.getMultiple(req.query.page));
    } catch (error) {
      console.error(`Error while getting users `, error.message);
      next(error);
    }
  },

  async create(req, res, next) {
    try {
      res.json(await usersData.create(req.body));
    } catch (error) {
      console.error(`Error while creating users `, error.message);
      next(error);
    }
  },
};
