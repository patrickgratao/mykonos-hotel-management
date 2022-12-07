const db = require("./db");
const helper = require("../helper");
const config = require("../config");

async function getMultiple(page = 1) {
  const offset = helper.getOffset(page, config.listPerPage);

  const rows = await db.query(
    `SELECT id, name, email, password, isAdmin, isActive FROM users LIMIT ${offset},${config.listPerPage}`
  );

  const data = helper.emptyOrRows(rows);
  const meta = { page };

  return {
    data,
    meta,
  };
}

async function create(user) {
  const result = await db.query(
    `INSERT INTO users (name, email, password, isActive, isAdmin) VALUES ("${user.name}", "${user.email}", "${user.password}", "${user.isActive}", "${user.isAdmin}")`
  );

  let message = "Error in creating user";
  let statusCode = 400;

  if (result.affectedRows) {
    message = "User created successfully";
    statusCode = 200;
  }

  return {
    message,
    statusCode,
  };
}

module.exports = {
  getMultiple,
  create,
};
