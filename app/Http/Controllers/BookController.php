<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $sortColumn = $request->get('sort', 'id');

        $sortDirection = 'asc';

        $allowedColumns = ['id', 'title', 'author', 'year'];

        if (!in_array($sortColumn, $allowedColumns)) {
            $sortColumn = 'id';
        }
        
        // buscar todos os registros em Books
        $books = Book::orderBy($sortColumn, $sortDirection)->get();
        //$books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required|integer',
            'description' => 'nullable'
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')
                        ->with('sucess', 'Livro adicionado com sucesso!');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required|integer',
            'description' => 'nullable'
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')
                        ->with('sucess', 'Livro atualizado com sucesso!');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')
                        ->with('sucess', 'Livro removido com sucesso!');
    }
}
