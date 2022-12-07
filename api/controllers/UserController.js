module.exports = {
  async index (request, response) {
    console.log(request.query)

    return response.json({
      login: "admin@admin.com"
    })
  }
}