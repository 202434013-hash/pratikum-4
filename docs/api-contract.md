# API Contract - Book Resource

## Base URL
`/api/books`

## Data Structure
- `id` (integer, primary key)
- `title` (string, max 200 chars)
- `isbn` (string, max 13 chars, unique)
- `available` (boolean, default true)
- `created_at` (timestamp)
- `updated_at` (timestamp)

## Endpoints

### 1. Get All Books
- **Method**: `GET`
- **URL**: `/`
- **Success Response**: `200 OK`
  - Array of Book objects.

### 2. Get Single Book
- **Method**: `GET`
- **URL**: `/{book}`
- **Success Response**: `200 OK`
  - Single Book object.
- **Error Response**: `404 Not Found`
  - When the book ID does not exist.
