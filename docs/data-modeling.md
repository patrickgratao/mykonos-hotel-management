# Data modeling

# Users Resource

Responsible for the administrative part of the system and user management.

## Variables

  - id: int
  - name: string
  - email: string
  - password: string
  - timestamps: datetime
  - isAdmin: boolean
  - isActive: boolean

## Methods

  - GET /users -> getMultiple()
  - GET /users/:id -> getOne()
  - POST /users -> create()
  - PUT /users/:id -> update()
  - DELETE /users/:id -> remove()

# Guests Resource

This is the main part of the system, containing the guest data.

## Variables

  - id: int
  - name: string
  - cpf: string
  - birth_date: string
  - gender: char (f/m)
  - phone: string
  - email: string
  - marital_status: string

  - cep: string
  - street: string
  - neighborhood: string
  - state: string

  - checkin_date: date
  - checkout_date: date
  - amount_dalys: int
  - amount_payers: int
  - daily_price: float
  - amount_paid: float
  - total_price: float
  - extra_infos: string
 
  - category_id: int
  - updated_by: string
  - isRemoved: boolean

## Methods

  - GET /guests -> getMultiple()
  - GET /guests/:id -> getOne()
  - POST /guests -> create()
  - PUT /guests/:id -> update()
  - DELETE /guests/:id -> remove()


# Categories Resource

Responsible for adding the tour leader categories.

## Variables

  - id: int
  - name: string
  - description: string
  - isActive: boolean
  - timestamps: Date Time

## Methods

  - GET /guests -> getMultiple()
  - GET /guests/:id -> getOne()
  - POST /guests -> create()
  - PUT /guests/:id -> update()
  - DELETE /guests/:id -> remove()