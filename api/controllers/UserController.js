const usersData = require("../services/users");

module.exports = {
  async index(request, response, next) {
    try {
      response.json(await usersData.getMultiple(request.query.page));
    } catch (error) {
      console.error(`Error while getting programming languages `, err.message);
      next(err);
    }
  },
};
