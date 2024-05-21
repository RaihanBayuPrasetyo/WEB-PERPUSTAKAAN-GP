<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\CategoryBook;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('id', 'DESC')->limit(4)->get();
        $category_books = CategoryBook::orderBy('nama_kategori', 'ASC')->get();

        return view('home', compact('books', 'category_books'));
    }

    public function about() {
        return view('about');
    }

    public function book()
    {
        $b = Book::orderBy('id', 'DESC')->first();
        $books = Book::orderBy('id', 'DESC')->paginate(8);

        return view('book', compact('b', 'books'));
    }

    public function detail_book($slug)
    {
        $b = Book::where('slug', $slug)->first();
        $books = Book::orderBy('id', 'DESC')->paginate(8);

        return view('detail-book', compact('b', 'books'));
    }

    public function category_book($id)
    {
        $cb = CategoryBook::find($id);
        $category_books = CategoryBook::orderBy('nama_kategori', 'ASC')->get();
        $books = Book::where('category_book_id', $id)->get();

        return view('category-book', compact('cb', 'category_books', 'books'));
    }

    // public function search_book(Request $request)
    // {
    //     $search = $request->search;
    //     $books = Book::where('judul', 'LIKE', '%' . $search . '%' )->orWhere('pengarang', 'LIKE', '%' . $search . '%')->paginate(1);
    //     $book = Book::orderBy('id', 'DESC')->paginate(8);

    //     return view('search-book', compact('books', 'book'));
    // }

    

//     public function search_book(Request $request)
// {
//     $search = $request->search;
//     $books = Book::all();
//     $results = [];

//     // Algoritma Backtracking untuk mencari buku berdasarkan judul atau pengarang
//     foreach ($books as $book) {
//         if ($this->isMatch($book->judul, $search) ) {
//             $results[] = $book;
//         }
//     }

//     // Paginate the results manually
//     $perPage = 8;
//     $currentPage = \Illuminate\Pagination\Paginator::resolveCurrentPage();
//     $currentItems = array_slice($results, ($currentPage - 1) * $perPage, $perPage);
//     $books = new \Illuminate\Pagination\LengthAwarePaginator($currentItems, count($results), $perPage, $currentPage, [
//         'path' => \Illuminate\Pagination\Paginator::resolveCurrentPath(),
//         'pageName' => 'page',
//     ]);

//     // Default book listing for the page
//     $book = Book::orderBy('id', 'DESC')->paginate(8);

//     return view('search-book', compact('books', 'book'));
// }

// private function isMatch($text, $pattern)
// {
//     if ($pattern == "") return true;
//     if ($text == "") return false;

//     if ($text[0] == $pattern[0]) {
//         return $this->isMatch(substr($text, 1), substr($pattern, 1));
//     }

//     return $this->isMatch(substr($text, 1), $pattern);
// }

// YANG DIPAKAIIIIIIIIII
// public function search_book(Request $request)
// {
//     $search = strtolower($request->search); // Ubah pencarian menjadi huruf kecil
//     $books = Book::all();
//     $results = [];

//     // Algoritma Backtracking untuk mencari buku berdasarkan judul atau pengarang
//     foreach ($books as $book) {
//         $title = strtolower($book->judul); // Ubah judul buku menjadi huruf kecil
//         if ($this->isMatch($title, $search) ) {
//             $results[] = $book;
//         }
//     }

//     // Paginate the results manually
//     $perPage = 8;
//     $currentPage = \Illuminate\Pagination\Paginator::resolveCurrentPage();
//     $currentItems = array_slice($results, ($currentPage - 1) * $perPage, $perPage);
//     $books = new \Illuminate\Pagination\LengthAwarePaginator($currentItems, count($results), $perPage, $currentPage, [
//         'path' => \Illuminate\Pagination\Paginator::resolveCurrentPath(),
//         'pageName' => 'page',
//     ]);

//     // Default book listing for the page
//     $book = Book::orderBy('id', 'DESC')->paginate(8);

//     return view('search-book', compact('books', 'book'));
// }

// private function isMatch($text, $pattern)
// {
//     if ($pattern == "") return true;
//     if ($text == "") return false;

//     if ($text[0] == $pattern[0]) {
//         return $this->isMatch(substr($text, 1), substr($pattern, 1));
//     }

//     return $this->isMatch(substr($text, 1), $pattern);
// }



// ------------------------


public function search_book(Request $request)
{
    $search = strtolower($request->search); // Ubah pencarian menjadi huruf kecil
    $books = Book::all();
    $results = [];

    // Algoritma Backtracking untuk mencari buku berdasarkan judul atau pengarang
    foreach ($books as $book) {
        $title = strtolower($book->judul); // Ubah judul buku menjadi huruf kecil
        $similarity = similar_text($title, $search, $percent);
        if ($this->isMatch($title, $search)|| $this->isMatch($book->pengarang, $search)) {
            $results[] = ['book' => $book, 'similarity' => $percent];
        }
    }

    // Urutkan hasil berdasarkan tingkat similaritas
    usort($results, function($a, $b) {
        return $b['similarity'] <=> $a['similarity'];
    });

    // Ekstrak buku dari hasil yang telah diurutkan
    $sortedResults = array_map(function($item) {
        return $item['book'];
    }, $results);

    // Paginate the sorted results manually
    $perPage = 8;
    $currentPage = \Illuminate\Pagination\Paginator::resolveCurrentPage();
    $currentItems = array_slice($sortedResults, ($currentPage - 1) * $perPage, $perPage);
    $books = new \Illuminate\Pagination\LengthAwarePaginator($currentItems, count($sortedResults), $perPage, $currentPage, [
        'path' => \Illuminate\Pagination\Paginator::resolveCurrentPath(),
        'pageName' => 'page',
    ]);

    // Default book listing for the page
    $book = Book::orderBy('id', 'DESC')->paginate(8);

    return view('search-book', compact('books', 'book'));
}


private function isMatch($text, $pattern)
{
    // Hilangkan spasi tambahan di sekitar teks dan pola
    $text = trim($text);
    $pattern = trim($pattern);

    // Kasus batas: jika pola kosong, cocok
    if ($pattern == "") return true;

    // Kasus batas: jika teks kosong dan pola tidak kosong, tidak cocok
    if ($text == "") return false;

    // Ubah teks dan pola menjadi huruf kecil untuk pencocokan case-insensitive
    $text = strtolower($text);
    $pattern = strtolower($pattern);

    // Cocokkan teks dengan pola
    return strpos($text, $pattern) !== false;
}











// public function search_book(Request $request)
// {
//     $search = $request->search;
//     $books = Book::all();
//     $results = [];

//     // Algoritma Backtracking untuk mencari buku berdasarkan judul atau pengarang
//     foreach ($books as $book) {
//         if ($this->isMatch($book->judul, $search) || $this->isMatch($book->pengarang, $search)) {
//             $results[] = $book;
//         }
//     }

//     // Tentukan jumlah item per halaman berdasarkan jumlah hasil pencarian
//     $totalResults = count($results);
//     $perPage = $totalResults > 0 ? max(1, min(8, $totalResults)) : 8;

//     // Paginate the results manually
//     $currentPage = \Illuminate\Pagination\Paginator::resolveCurrentPage();
//     $currentItems = array_slice($results, ($currentPage - 1) * $perPage, $perPage);
//     $books = new \Illuminate\Pagination\LengthAwarePaginator($currentItems, $totalResults, $perPage, $currentPage, [
//         'path' => \Illuminate\Pagination\Paginator::resolveCurrentPath(),
//         'pageName' => 'page',
//     ]);

//     // Default book listing for the page
//     $book = Book::orderBy('id', 'DESC')->paginate(8);

//     return view('search-book', compact('books', 'book'));
// }

// private function isMatch($text, $pattern)
// {
//     if ($pattern == "") return true;
//     if ($text == "") return false;

//     if ($text[0] == $pattern[0]) {
//         return $this->isMatch(substr($text, 1), substr($pattern, 1));
//     }

//     return $this->isMatch(substr($text, 1), $pattern);
// }


// public function search_book(Request $request)
// {
//     $search = $request->search;
//     $books = Book::all();
//     $results = [];

//     // Algoritma Backtracking untuk mencari buku berdasarkan judul atau pengarang
//     foreach ($books as $book) {
//         if ($this->isMatch($book->judul, $search) || $this->isMatch($book->pengarang, $search)) {
//             $results[] = $book;
//         }
//     }

//     // Tentukan jumlah item per halaman berdasarkan jumlah hasil pencarian
//     $totalResults = count($results);
//     $perPage = $totalResults > 0 ? max(1, min(8, $totalResults)) : 8;

//     // Paginate the results manually
//     $currentPage = \Illuminate\Pagination\Paginator::resolveCurrentPage();
//     $currentItems = array_slice($results, ($currentPage - 1) * $perPage, $perPage);
//     $books = new \Illuminate\Pagination\LengthAwarePaginator($currentItems, $totalResults, $perPage, $currentPage, [
//         'path' => \Illuminate\Pagination\Paginator::resolveCurrentPath(),
//         'pageName' => 'page',
//     ]);

//     // Default book listing for the page
//     $book = Book::orderBy('id', 'DESC')->paginate(8);

//     return view('search-book', compact('books', 'book'));
// }

// private function isMatch($text, $pattern)
// {
//     // Hilangkan spasi tambahan di sekitar teks dan pola
//     $text = trim($text);
//     $pattern = trim($pattern);

//     // Kasus batas: jika pola kosong, cocok
//     if ($pattern == "") return true;

//     // Kasus batas: jika teks kosong dan pola tidak kosong, tidak cocok
//     if ($text == "") return false;

//     // Periksa apakah karakter pertama teks cocok dengan karakter pertama pola
//     if ($text[0] == $pattern[0]) {
//         // Cocokkan sisa teks dan pola
//         return $this->isMatch(substr($text, 1), substr($pattern, 1));
//     }

//     // Lanjutkan dengan karakter berikutnya dalam teks
//     return $this->isMatch(substr($text, 1), $pattern);
// }






 
}
