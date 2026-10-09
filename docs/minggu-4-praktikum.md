# Praktikum Minggu 4 — Read-only Laravel API

## Resource
Book

## Endpoint
- GET /api/books
- GET /api/books/{book}

## Verification
- 200 list: berhasil
- 200 detail: berhasil
- 404 not found: berhasil

## Contract Comparison
Actual response sudah sesuai dengan contract API Minggu 3. 
- Pada endpoint `GET /api/books`, struktur response telah dibungkus menggunakan properti `data` yang memuat array of object Book (`id`, `title`, `isbn`, `available`, `created_at`).
- Pada endpoint `GET /api/books/{book}`, response memuat single object Book di dalam properti `data`.
- Pada endpoint 404 (buku tidak ditemukan), response memuat properti `message` berisi pesan error dan `errors` bernilai null sesuai standar (status code 404).
- Penamaan field (`title`, `isbn`, `available`) tipe data dan atributnya sesuai dengan apa yang ada di _api-contract.md_.

## Evidence
- **GET /api/books**: 
  - Status: `200 OK`
  - Hasil: Menampilkan array JSON dari semua buku development di database.
- **GET /api/books/1**: 
  - Status: `200 OK`
  - Hasil: Menampilkan satu buah object JSON buku "Clean Code".
- **GET /api/books/999**:
  - Status: `404 Not Found`
  - Hasil: Menampilkan pesan `{"message": "Book not found", "errors": null}` karena ID 999 tidak terdaftar di database.
