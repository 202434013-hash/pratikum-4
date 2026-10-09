# Praktikum Minggu 4

## Penjelasan

Praktikum ini membuat dua endpoint berdasarkan API contract dari Minggu 3:
- `GET /api/books`
- `GET /api/books/{book}`

Resource yang digunakan adalah `Book`.

## Implementasi

1. **Model dan Migration**:
   - Dibuat menggunakan `php artisan make:model Book -m`.
   - Migration memiliki field: `title` (string), `author` (string), `description` (text, nullable), dan `published_year` (integer, nullable).
   - Model `Book` telah diupdate untuk mengisi `$fillable` fields.

2. **Seeder**:
   - Dibuat `BookSeeder` untuk mengisi tabel `books` dengan 2 data development.
   - Dipanggil di `DatabaseSeeder.php` menggunakan `$this->call(BookSeeder::class)`.

3. **Controller**:
   - Dibuat `BookController` dengan dua method `index()` dan `show($id)`.
   - `index()` mengembalikan semua buku: `return response()->json(Book::all());`.
   - `show($id)` mengembalikan satu buku berdasarkan ID. Jika ID tidak ada, mengembalikan response json pesan error dengan kode 404.

4. **Routes**:
   - Di `routes/api.php` ditambahkan route:
     - `Route::get('/books', [BookController::class, 'index']);`
     - `Route::get('/books/{book}', [BookController::class, 'show']);`

## Pengujian dengan Postman

Berikut adalah response dari pengujian melalui Postman (atau browser) yang dibandingkan dengan ekspektasi Minggu 3.

### 1. GET `/api/books`
Endpoint ini mereturn status code `200 OK`.

**Actual Response**:
```json
[
    {
        "id": 1,
        "title": "The Lord of the Rings",
        "author": "J.R.R. Tolkien",
        "description": "A fantasy novel.",
        "published_year": 1954,
        "created_at": "2026-10-09T09:54:27.000000Z",
        "updated_at": "2026-10-09T09:54:27.000000Z"
    },
    {
        "id": 2,
        "title": "1984",
        "author": "George Orwell",
        "description": "Dystopian social science fiction novel and cautionary tale.",
        "published_year": 1949,
        "created_at": "2026-10-09T09:54:27.000000Z",
        "updated_at": "2026-10-09T09:54:27.000000Z"
    }
]
```

### 2. GET `/api/books/1`
Endpoint ini mereturn status code `200 OK`.

**Actual Response**:
```json
{
    "id": 1,
    "title": "The Lord of the Rings",
    "author": "J.R.R. Tolkien",
    "description": "A fantasy novel.",
    "published_year": 1954,
    "created_at": "2026-10-09T09:54:27.000000Z",
    "updated_at": "2026-10-09T09:54:27.000000Z"
}
```

### 3. GET `/api/books/999` (Not Found)
Endpoint ini mereturn status code `404 Not Found`.

**Actual Response**:
```json
{
    "message": "Book not found"
}
```
